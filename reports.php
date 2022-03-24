<?php
    include_once 'includes/dbh.inc.php';

?>




<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">

    </script>
    <link rel="stylesheet" href="styl.css">
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">max's website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="reports.php">reports</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="pics.php"> pictures  </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ER.php"> ER diagram  </a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="signIn.php"> log out   </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>




<?php





echo 'here is the average time spent studying vs productivity';
echo ("<br>");
$sql = "SELECT * FROM time_vs_quality;"; // this uses a veiw 
$res = mysqli_query($conn,$sql);
$resCheck = mysqli_num_rows($res);
if($resCheck > 0){
    while($row = mysqli_fetch_assoc($res)){
        echo $row['avgTime'];
        echo (",  ");
        echo $row['avgQUality'];
        echo ("<br>");
        
    }
}
echo ("<br>");
echo ("<br>");
echo ("<br>");
echo ("<br>");




echo 'GIVE ME ALL THE DATA !!!!!!';
echo ("<br>");
$sqlA = "SELECT * FROM workSesh INNER JOIN day ON workSesh.day_of_year = day.day_of_year INNER JOIN Q ON workSesh.QID = Q.QID INNER JOIN reward ON workSesh.rewardID = reward.rewardID INNER JOIN users ON workSesh.userID = users.userID;"; // this uses a veiw 
$resA = mysqli_query($conn,$sqlA);
$resCheckA = mysqli_num_rows($resA);
if($resCheckA > 0){
    while($rowA = mysqli_fetch_assoc($resA)){
            // this eraly needs to be cleand up !!!!! 
            // maybe get rid of the loop and rust print the res  
        echo $rowA['day_and_time'];
        echo (",  ");
        echo $rowA['day_of_year'];
        echo (",  ");
        echo $rowA['how_long_in_min'];
        echo (",  ");
        echo $rowA['quality'];
        echo (",  ");
        echo $rowA['kind_of_work'];
        echo (",  ");
        echo $rowA['reward'];
        echo (",  ");
        echo $rowA['Q'];
        echo (",  ");
        echo $rowA['name'];
        echo (",  ");
        echo $rowA['biography'];
        echo (",  ");
        echo $rowA['sleep_hours'];
        echo (",  ");
        echo $rowA['sleep_quality'];
        echo (",  ");
        echo $rowA['sleep_quality'];
        echo (",  ");
        echo ("<br>");

        
        
    }
}

echo ("<br>");
echo ("<br>");
echo ("<br>");
echo ("<br>");

echo 'here is the optimal sleep data ';
echo ("<br>");
$sqlB = "SELECT * FROM optimal_sleep_for_productivaty;"; // this uses a veiw 
$resB = mysqli_query($conn,$sqlB);
$resCheckB = mysqli_num_rows($res);
if($resCheckB > 0){
    while($rowB = mysqli_fetch_assoc($resB)){
        echo $rowB['totalEvectivaty'];
        echo (",  ");
        echo $rowB['sleep_hours'];
        echo ("<br>");
        
    }
}



?>

<?php 

echo ("<br>");
echo ("<br>");
echo ("<br>");
echo ("<br>");

echo 'here is the total evectivaty  ';
echo ("<br>");
$sql = "SELECT * FROM total_evectivity ORDER BY total_evectivity;"; // this uses a veiw 
$res = mysqli_query($conn,$sql);
$resCheck = mysqli_num_rows($res);
if($resCheck > 0){
    while($row = mysqli_fetch_assoc($res)){
        echo $row['total_evectivity'];
        
        echo ("<br>");
        
    }
}

/*
echo 'here is the total time working';
echo ("<br>");
$sqlC = "SELECT SUM(how_long_in_min) FROM workSesh GROUP BY userID;"; // this uses a veiw 
$resC = mysqli_query($conn,$sqlC);
$resCheckC = mysqli_num_rows($res);
if($resCheckC > 0){
    while($rowC = mysqli_fetch_assoc($resC)){
        echo $resC;
        
        echo ("<br>");
        
    }
}
*/

echo ("<br>");
echo ("<br>");
echo ("<br>");
echo ("<br>");
echo ("<br>");
echo ("<br>");
echo ("<br>");
echo ("<br>");
?>

</body>
</html>
