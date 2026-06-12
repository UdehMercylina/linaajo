<?php
	include('../inc/config.php');
	include 'includes/session.php';

	if(isset($_POST['fund'])){
		$id = $_POST['id'];
		$amt = $_POST['amount'];
		$amount = $amt;

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		$row = $stmt->fetch();

		$user = $conn->prepare("SELECT * FROM users WHERE id=:user_id");
		$user->execute(['user_id'=>$id]);
		$user_info = $user->fetch();
		$investor_name = $user_info['full_name'];
		$investor_email = $user_info['email'];

		if($row['numrows'] > 0){

			$stmt = $conn->prepare("SELECT balance FROM transaction WHERE user_id = $id ORDER BY trans_id DESC LIMIT 1");
			$stmt->execute();
			$row2 = $stmt->fetch();
			$receiver_balance = $row2["balance"];

			$trans_id = NULL;
			$trans_date = date('Y-m-d g:i A');
			$remarks = 'Amount of '.$amt.' was deposited successfully';
            $type = '1';
            $balance = $receiver_balance + $amt;

			$act_time = date('Y-m-d h:i A');
			
			try{

				$stmt = $conn->prepare("INSERT INTO transaction (trans_id, user_id, trans_date, type, amount, remark, balance) VALUES (:trans_id, :user_id, :trans_date, :type, :amount, :remark, :balance)");
				$stmt->execute(['trans_id'=>$trans_id, 'user_id'=>$id, 'trans_date'=>$trans_date, 'type'=>$type, 'amount'=>$amt, 'remark'=>$remarks, 'balance'=>$balance]);

				$activity = $conn->prepare("INSERT INTO activity (user_id, message, category, date_sent) VALUES (:user_id, :message, :category, :start_date)");
				$activity->execute(['user_id'=>$id, 'message'=>$remarks, 'category'=>'Deposit', 'start_date'=>$act_time]);

				$statement = 'The amount of $'.$amount.' has been deposited to your Ridge Prime Investments account.<br/> Thank you for investing with us';

				$message = "
					<html>
				      <head>
				      <title>".$settings->siteTitle."</title>
				      </head>
				      <body style='font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 20px;'>
				        <div style='max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 8px 8px 0 0; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
				          <h1 style='font-size: 24px; color: #333; margin-bottom: 20px;'>".$settings->siteTitle."</h1>
				          <p style='font-size: 16px; color: #333;'>Dear ".$investor_name.",</p>
				          <p style='font-size: 16px; color: #333;'>".$statement."</p>
				          <p style='font-size: 16px; color: #333;'>Do note that ".$settings->siteTitle." will not give you any other wallet address apart from the one shown on the website.</p>
				          <p style='font-size: 16px; color: #333;'>To report fraudulent activities, contact fraud@".$sweet_url."</p>
				        </div>
				        <div style='max-width: 600px; margin: 0 auto; background-color: #ccc; padding: 20px; border-radius: 0 0 8px 8px; text-align: center;'>
				          <p style='font-size: 12px; color: #333;'>*This email account is not monitored. Reply to ".$settings->email." if you have any query. <a href='https://www.linaajo.com/#plans'>View Our Available Plans</a> </p>
				          <p style='font-size: 12px; color: #333;'>© 2021 Ridge Prime Investments.</p>
				        </div>
				      </body>
				    </html>
				";

			    try {
			    	$to = $investor_email;
					$subject = $settings->siteTitle." Deposit";

			    	// Set content-type for THE WEBSITE
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

					// Additional headers
					$headers .= "From: Ridge Prime Investments <noreply@linaajo.com>" . "\r\n";

					// Send the email
					mail($to, $subject, $message, $headers);

			        unset($_SESSION['full_name']);
			        unset($_SESSION['username']);
			        unset($_SESSION['email']);

			        $_SESSION['success'] = 'Amount deposited successfully';

			    } 
			    catch (Exception $e) {
			        $_SESSION['success'] = 'Amount deposited successfully, however mail could not be sent. Please manually notify user via mail.';
			    }

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up deposit form first';
	}

	header('location: users.php');

?>