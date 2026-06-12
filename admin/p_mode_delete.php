<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM payment_mode WHERE mode_id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'payment mode deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select payment mode to delete first';
	}

	header('location: paymentmethods.php');
	
?>