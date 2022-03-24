<?php
include_once 'dbh.inc.php';

$user_name = $_POST['user_name'];
$user_id = $_POST['user_id'];
$bio = $_POST['bio'];


$sqlU = "INSERT INTO users( name, biography)  
VALUES ('$user_name', '$bio');";
mysqli_query($conn,$sqlU);

header("Location: ../signIn.php?singup=sucses");

?>