<?php
	include('../inc/config.php');

	include 'inc/session.php';
	include '../admin/includes/slugify.php';

	$user_id = $_SESSION['user'];

	$stmt = $conn->prepare("SELECT * FROM users WHERE id=:user_id");
	$stmt->execute(['user_id'=>$user_id]);
	$row = $stmt->fetch();
	$investor_email = $row['email'];
	$investor_name = $row['full_name'];

	if(isset($_POST['complete'])){
		$withdrawal_amount = $_POST['withdrawal_amount'];
		$payment_mode = $_POST['payment_mode'];
		$payment_info = $_POST['payment_info'];
		$status = 'pending';


		$conn = $pdo->open();

		$trans_date = date('Y-m-d');

		$act_time = date('Y-m-d h:i A');

			try{

				$stmt = $conn->prepare("INSERT INTO request (user_id, trans_date, type, amount, payment_mode, payment_info, status) VALUES (:user_id, :trans_date, :type, :withdraw_amount, :payment_mode, :payment_info, :status)");
				$stmt->execute(['user_id'=>$user_id, 'trans_date'=>$trans_date, 'type'=>2, 'withdraw_amount'=>$withdrawal_amount, 'payment_mode'=>$payment_mode, 'payment_info'=>$payment_info, 'status'=>$status]);

				$activity = $conn->prepare("INSERT INTO activity (user_id, message, category, date_sent) VALUES (:user_id, :message, :category, :start_date)");
				$activity->execute(['user_id'=>$user_id, 'message'=>'You made a withdrawal request of $'.$withdrawal_amount, 'category'=>'Withdrawal Request', 'start_date'=>$act_time]);

				$message = "
			      	<html>
				      <head>
				      <title>".$settings->siteTitle."</title>
				      </head>
				      <body style='font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 20px;'>
				        <div style='max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 8px 8px 0 0; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>
				          <h1 style='font-size: 24px; color: #333; margin-bottom: 20px;'>".$settings->siteTitle."</h1>
				          <p style='font-size: 16px; color: #333;'>Dear ".$investor_name.",</p>
				          <p style='font-size: 16px; color: #333;'>Your request to withdraw $".$withdrawal_amount." has been received. Funds will be withdrawn to your choosen payment option upon confirmation.</p>
				          <p style='font-size: 16px; color: #333;'>Do note that ".$settings->siteTitle." will not give you any other wallet address apart from the one shown on the website.</p>
				          <p style='font-size: 16px; color: #333;'>To report fraudulent activities, contact fraud@".$sweet_url."</p>
				        </div>
				        <div style='max-width: 600px; margin: 0 auto; background-color: #ccc; padding: 20px; border-radius: 0 0 8px 8px; text-align: center;'>
				          <p style='font-size: 12px; color: #333;'>*This email account is not monitored. Reply to ".$settings->email." if you have any query. <a href='https://www.linaajo.com/#plans'>View Our Available Plans</a> </p>
				          <p style='font-size: 12px; color: #333;'>Your request to withdraw $".$withdrawal_amount." has been received. Funds will be withdrawn to your choosen payment option upon confirmation.</p>
				          <p style='font-size: 12px; color: #333;'>© 2021 Ridge Prime Investments.</p>
				        </div>
				      </body>
				    </html>
			    ";


				//Notify Admin

				$msg = $investor_name." just requested a withdrawal , Login Admin";

				// use wordwrap() if lines are longer than 70 characters
				$msg = wordwrap($msg,70);

				// send email
				mail($settings->email,"New Withdrawal Request",$msg);


			    try {
			    	$to = $investor_email;
					$subject = $settings->siteTitle." Withdrawal Request";

			    	// Set content-type for THE WEBSITE
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

					// Additional headers
					$headers .= "From: Ridge Prime Investmentss <noreply@linaajo.com>" . "\r\n";

					// Send the email
					mail($to, $subject, $message, $headers);

			        unset($_SESSION['full_name']);
			        unset($_SESSION['username']);
			        unset($_SESSION['email']);

			        $_SESSION['success'] = 'Your request has been sent and you will be contacted on how to proceed shortly';

			    } 
			    catch (Exception $e) {
			        $_SESSION['success'] = 'Your request has been sent. Please proceed to pay and invest';
			    }

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Make Sure all Fields are filled';
	}

	header('location: withdrawals.php');

?>