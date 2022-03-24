<?php
    include_once 'includes/dbh.inc.php';
    // http://localhost/PHProot/index.php
    
  

?>


<!DOCTYPE html>
<!-- 
    TODO:
    make timer that records how long you work
    https://www.w3schools.com/howto/howto_js_countdown.asp

    https://www.wikihow.com/Pass-Variables-from-Javascript-to-PHP
    (use method 2 )

-->
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
                        <a class="nav-link" href="pics.php"> about the creater  </a>
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



<h1> hello, this is a test page</h1> 


</body>

<?php
    echo 'you got this!';
    echo ("<br>");
    echo ("<br>");
    echo ("<br>");
    $sql = "SELECT * FROM worksesh WHERE how_long_in_min = 50;"; 
    $res = mysqli_query($conn,$sql);
    $resCheck = mysqli_num_rows($res);
    if($resCheck > 0){
        while($row = mysqli_fetch_assoc($res)){
            echo $row['how_long_in_min'];
            $count = $row['how_long_in_min'];;
            echo ("<br>");
            
        }
    }
    echo ("<br>");
    echo ("<br>");
    
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js"></script>

<script>

let varialbe = "<?php echo $count; ?>";

let beginTime;
let c;
function setup() {
  
  beginTime = second() + minute() * 60 ; 
  //Fix me with window width window hight !!!!! 
  createCanvas(220, 60);
  //c.position(500,500);
  
}



function draw() {
  
  background(200);
  textSize(32);
  let newTime = second() + minute() * 60 ; // may break at end of hour 
  let dif = newTime - beginTime; 
  let timeRem = varialbe - dif; 
  fill(255,0,0);
  if(timeRem <= 0){
    text("you are done!", 10, 30);
  }else{
    text(timeRem, 10, 30);
  }
}

let res = 5;

</script>
</html>

<?php
   echo "<script>document.writeln(res);</script>";
?>


