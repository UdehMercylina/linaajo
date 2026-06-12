<?php
	include 'includes/session.php';

	if(isset($_POST['suspend'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{

			$now = date('Y-m-d g:i A');

			$stmt = $conn->prepare("UPDATE users SET status=:status WHERE id=:id");
			$stmt->execute(['status'=>2, 'id'=>$id]);
			$_SESSION['success'] = 'User suspended successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Select user to suspend first';
	}

	header('location: users.php');
?>