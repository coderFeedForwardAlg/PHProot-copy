<?php
include_once 'dbh.inc.php';

$queue_id = $_POST['queue_id'];
$queue_name = $_POST['queue_name'];

$sqlQ = "INSERT INTO Q(Q, QID)  
VALUES ($queue_id, $queue_name);";
mysqli_query($conn,$sqlQ);

header("Location: ../index.php?singup=sucses");

?>