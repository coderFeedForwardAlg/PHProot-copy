<?php
include_once 'dbh.inc.php';

$rewardIN = $_POST['rewardIN'];
$rewardID_IN = $_POST['rewardID_IN'];

$sqlREW = "INSERT INTO reward(reward, rewardID)  
VALUES ('$rewardIN ', $rewardID_IN)"; 
mysqli_query($conn,$sqlREW);

header("Location: ../index.php?singup+sucses");


?>