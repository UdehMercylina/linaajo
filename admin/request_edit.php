<?php
	include('../inc/config.php');

	include 'includes/session.php';
	include 'includes/slugify.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$status = $_POST['status'];

		$request = $conn->prepare("SELECT * FROM request WHERE request_id=:id");
		$request->execute(['id'=>$id]);
		$request_info = $request->fetch();
		$user_id = $request_info['user_id'];
		$request_type = $request_info['type'];
		$amount = $request_info['amount'];

		$user = $conn->prepare("SELECT * FROM users WHERE id=:user_id");
		$user->execute(['user_id'=>$user_id]);
		$user_info = $user->fetch();
		$investor_name = $user_info['full_name'];
		$investor_email = $user_info['email'];

		if ($request_type == 1) {
            $trans_type = 'deposit';
		}else{
			$trans_type = 'withdraw';
		}

		$conn = $pdo->open();

		$trans_date = date('Y-m-d g:i A');

		$act_time = date('Y-m-d h:i A');

			try{
				$update_status = $conn->prepare("UPDATE request SET status=:status WHERE request_id=:id");
				$update_status->execute(['status'=>$status, 'id'=>$id]);

				if ($status == 'approved') {

					$get_balance = $conn->prepare("SELECT balance FROM transaction WHERE user_id = $user_id ORDER BY trans_id DESC LIMIT 1");
					$get_balance->execute();
					$wallet_balance = $get_balance->fetch();
					$receiver_balance = $wallet_balance["balance"];
					$trans_id = NULL;

					if($request_type == 1){
						$remarks = 'Amount of $'.$amount.' was deposited successfully';
			            $balance = $receiver_balance + $amount;
						$statement = 'Your request to deposit $'.$amount.' was approved. Funds have been deposited to your Ridge Prime Investments Investment account.<br/> Thank you for investing with us';

						try{

							$stmt = $conn->prepare("INSERT INTO transaction (trans_id, user_id, trans_date, type, amount, remark, balance) VALUES (:trans_id, :user_id, :trans_date, :type, :amount, :remark, :balance)");
							$stmt->execute(['trans_id'=>$trans_id, 'user_id'=>$user_id, 'trans_date'=>$trans_date, 'type'=>$request_type, 'amount'=>$amount, 'remark'=>$remarks, 'balance'=>$balance]);

							$activity = $conn->prepare("INSERT INTO activity (user_id, message, category, date_sent) VALUES (:user_id, :message, :category, :start_date)");
							$activity->execute(['user_id'=>$user_id, 'message'=>$remarks, 'category'=>'Deposit', 'start_date'=>$act_time]);

						}
						catch(PDOException $e){
							$_SESSION['error'] = $e->getMessage();
						}
					}

					if($request_type == 2){
						$remarks = 'Amount of $'.$amount.' was withdrawn successfully';
			            $balance = $receiver_balance - $amount;
						$statement = 'Your request to withdraw $'.$amount.' out of your Ridge Prime Investments Investment account was approved. Funds have been deposited to your choosen payment option.<br/> Thank you for investing with us';

						try{

							$stmt = $conn->prepare("INSERT INTO transaction (trans_id, user_id, trans_date, type, amount, remark, balance) VALUES (:trans_id, :user_id, :trans_date, :type, :amount, :remark, :balance)");
							$stmt->execute(['trans_id'=>$trans_id, 'user_id'=>$user_id, 'trans_date'=>$trans_date, 'type'=>$request_type, 'amount'=>$amount, 'remark'=>$remarks, 'balance'=>$balance]);

							$activity = $conn->prepare("INSERT INTO activity (user_id, message, category, date_sent) VALUES (:user_id, :message, :category, :start_date)");
							$activity->execute(['user_id'=>$user_id, 'message'=>$remarks, 'category'=>'Withdrawal', 'start_date'=>$act_time]);

						}
						catch(PDOException $e){
							$_SESSION['error'] = $e->getMessage();
						}
					}
				}elseif ($status == 'cancelled') {
					$statement = 'Your request to '.$trans_type.' $'.$amount.' was denied.<br/> If this was done in error, please contact support.<br/> Thank you for investing with us';
				}

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
					$subject = $settings->siteTitle." Request Verdict";

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

			        $_SESSION['success'] = 'Status Updated Successfully and mail has been sent to the user';

			    } 
			    catch (Exception $e) {
			        $_SESSION['success'] = 'Status Updated Successfully, however mail could not be sent. Please manually notify user via mail.';
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

	if ($request_type == 1) {
		header('location: deposits.php');
	}else{
		header('location: withdrawals.php');
	}

?>