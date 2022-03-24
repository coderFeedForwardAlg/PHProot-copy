<?php
include_once 'dbh.inc.php';
// fix
$day = $_POST['day'];
$time_sleeping = $_POST['time_sleeping'];
$sleep_qual = $_POST['sleep_qual'];

$sqlSle = "INSERT INTO day(day_of_year, sleep_hours, sleep_quality)  
VALUES ('$day', $time_sleeping, $sleep_qual )"; 
mysqli_query($conn,$sqlSle);

header("Location: ../index.php?singup=sucses");


?>