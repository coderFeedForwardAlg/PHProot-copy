<?php
include_once 'dbh.inc.php';
//include_once 'signInScript.php'

$day_time = $_POST['day_time'];
$day_year = $_POST['day_year'];
$how_long = $_POST['how_long'];
$quality = $_POST['quality'];
$kind = $_POST['kind'];
$reward_id = $_POST['reward_id'];
$Q_id = $_POST['Q_id'];
$user_id = $_POST['user_id'];

$sqlWork = "INSERT INTO workSesh(day_and_time ,day_of_year ,how_long_in_min ,quality ,kind_of_work ,rewardID ,QID ,userID) 
VALUES ('$day_time','$day_year', $how_long, $quality,'$kind',$reward_id,$Q_id,$user_id);"; 
mysqli_query($conn,$sqlWork);

header("Location: ../testPage.php?singup+sucses");


?>

