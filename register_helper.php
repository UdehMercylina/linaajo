<?php
    include('inc/config.php');

	include 'inc/session.php';

	if (!empty($_POST['extra_field'])) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }

	if(isset($_POST['signup'])){
		$full_name = $_POST['full_name'];
		$username = $_POST['username'];
		$phone_no = $_POST['phone_no'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		if (empty($_POST['referral'])) {
			$referral = 'linaajo';
		}else{$referral = $_POST['referral'];}
		$type = 0;
		$status = 0;

		$_SESSION['full_name'] = $full_name;    
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $email;

		if($password != $repassword){
			$_SESSION['error'] = 'Passwords did not match';
			header('location: register.php');
		}
		else{
			$conn = $pdo->open();

			$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM users WHERE email=:email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
				$_SESSION['error'] = 'Email already taken';
				header('location: register.php');
			}
			else{
				$now = date('Y-m-d');
				$password = password_hash($password, PASSWORD_DEFAULT);

				//generate code
				$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$code=substr(str_shuffle($set), 0, 12);

				try{
					$stmt = $conn->prepare("INSERT INTO users (email, password,  full_name, uname, phone_no, referral_code, activate_code, created_on, type, status) VALUES (:email, :password, :password_show, :full_name, :username, :phone_no, :referral, :code, :now, :type, :status)");
					$stmt->execute(['email'=>$email, 'password'=>$password, 'full_name'=>$full_name, 'username'=>$username, 'phone_no'=>$phone_no, 'referral'=>$referral, 'code'=>$code, 'now'=>$now, 'type'=>$type, 'status'=>$status]);
					$userid = $conn->lastInsertId();

					$message = "
				      <html>
					      <head>
					      <title>".$settings->siteTitle."</title>
					      </head>
					      <body style='font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 20px;'>
					        <div style='max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
					          <h1 style='font-size: 24px; color: #333; margin-bottom: 20px;'>".$settings->siteTitle."</h1>
					          <p style='font-size: 16px; color: #333;'>Dear ".$_POST['full_name']." (".$_POST['username'].")</p>
					          <p style='font-size: 16px; color: #333;'>Thank you for signing up with us. Your new account is being provisioned and can be accessed once activated.</p>
					          <p style='font-size: 16px; color: #333;'>Your registered email address is: <strong>".$email."</strong></p>
					          <p style='font-size: 16px; color: #333;'>Please click the link below to activate your account.</p>
					          <p style='font-size: 16px; color: #007bff;'><a href='https://".$sweet_url."/activate.php?code=".$code."&user=".$userid."' style='color: #007bff; text-decoration: none;'>Activate Account</a></p>
					        </div>
					      </body>
					      </html>
				      ";


					//Notify Admin

					$msg = "New User Registered, Login Admin";

					// use wordwrap() if lines are longer than 70 characters
					$msg = wordwrap($msg,70);

					// send email
					mail($settings->email,"New User Alert",$msg);


                            
				    try {
						$to = $email;
						$subject = $settings->siteTitle." Sign Up";

				    	// Set content-type for THE WEBSITE
						$headers = "MIME-Version: 1.0" . "\r\n";
						$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

						// Additional headers
					    $headers .= "From: ".$settings->siteTitle." <noreply@linaajo.com>" . "\r\n";

						// Send the email
						mail($to, $subject, $message, $headers);

				        unset($_SESSION['full_name']);
				        unset($_SESSION['username']);
				        unset($_SESSION['email']);

				        $_SESSION['success'] = 'Account created. Proceed to Login. To continue to navigate site, <a href="index.php">Click Here</a>';
				        $_SESSION['user'] = $userid;
                        header('location: login.php');

				    } 
				    catch (Exception $e) {
				        $_SESSION['success'] = 'Account created. Proceed to Login.. To continue to navigate site, <a href="index.php">Click Here</a>';
				        header('location: login.php');
				    }


				}
				catch(PDOException $e){
					$_SESSION['success'] = $e->getMessage();
					header('location: register.php');
				}

				$pdo->close();

			}

		}

	}
	else{
		$_SESSION['error'] = 'Fill up signup form first';
		header('location: register.php');
	}

?>