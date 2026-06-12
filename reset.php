<?php
    include('inc/config.php');

	include 'inc/session.php';

	if(isset($_POST['reset'])){
		$email = $_POST['email'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			//generate code
			$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code=substr(str_shuffle($set), 0, 15);
			try{
				$stmt = $conn->prepare("UPDATE users SET reset_code=:code WHERE id=:id");
				$stmt->execute(['code'=>$code, 'id'=>$row['id']]);

				$message = "
				    <html>
						<head>
							<title>".$settings->siteTitle."</title>
						</head>
						<body style='font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 20px;'>
					        <div style='max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
					          <h1 style='font-size: 24px; color: #333; margin-bottom: 20px;'>".$settings->siteTitle."</h1>
					          <p style='font-size: 16px; color: #333;'>Dear ".htmlspecialchars($row['full_name'])." (".htmlspecialchars($row['uname']).")</p>
					          <p style='font-size: 16px; color: #333;'>Your account:</p>
					          <p style='font-size: 16px; color: #333;'>Email Address - <strong>".htmlspecialchars($email)."</strong></p>
					          <p style='font-size: 16px; color: #333;'>Please click the link below to reset your password.</p>
					          <p style='font-size: 16px; color: #007bff;'><<a href='https://".$sweet_url."/password_reset.php?code=".urlencode($code)."&user=".intval($row['id'])."' style='color: #007bff; text-decoration: none;'>Reset Password</a></p>
					        </div>
						</body>
					</html>
				";

				                          
			    try {
			        $to = $email;
					$subject = $settings->siteTitle." Password Reset";

			    	// Set content-type for THE WEBSITE
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

					// Additional headers
					$headers .= "From: Ridge Prime Investmentss <noreply@linaajo.com>" . "\r\n";

					// Send the email
					mail($to, $subject, $message, $headers);

			        $_SESSION['success'] = 'Password reset link sent. Please check your email.';
			     
			    } 
			    catch (Exception $e) {
			        $_SESSION['error'] = 'Message could not be sent now. Contact support for password reset';
			    }
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}
		else{
			$_SESSION['error'] = 'Email not found';
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Input email associated with account';
	}

	header('location: password_forgot.php');

?>