<?php
$servername = "localhost";

$username = "root";

$password = "";
$dbname = "lina_ajo";

$conne = new mysqli($servername, $username, $password, $dbname);

if ($conne->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conne->connect_error);
}
?>
