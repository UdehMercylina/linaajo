<?php
	include 'includes/session.php';
	include 'includes/slugify.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$details = $_POST['details'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE payment_mode SET name=:name, details=:details WHERE mode_id=:id");
			$stmt->execute(['name'=>$name, 'details'=>$details, 'id'=>$id]);
			$_SESSION['success'] = 'payment mode updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up edit payment mode form first';
	}

	header('location: paymentmethods.php');

?>