
<?php
    include_once 'includes/dbh.inc.php';
    // http://localhost/PHProot/index.php
    
    $count = 5;

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





<h4 class="text-center">New work session </h4>
<h5 class="text-center">Time to get stuff done <h5>

<form action="includes/worksesh.php" method="POST" class="text-center"> 
    <input type="text" name="day_time" placeholder ="the day and time">
    <br>
    <input type="text" name="day_year" placeholder ="day of the year">
    <br>
    <input type="number" name="how_long" placeholder ="how long in minutes ">
    <br>
    <input type="text" name="quality" placeholder ="quality ">
    <br>
    <input type="text" name="kind" placeholder ="kind of work">
    <br>
    <input type="number" name="reward_id" placeholder ="reward id">
    <br>
    <input type="number" name="Q_id" placeholder ="queue id">
    <br>
    <input type="number" name="user_id" placeholder ="user id">
    <br>
    <button type="submit" name="submit"> enter the data! </button>
    <br>
</form> 


<h4>It's a new day</h4>
<form action="includes/newDay.php" method="POST">
    <input type= "text" name = "day" placeholder = "the day of the year"> 
    <br>
    <input type= "number" name = "time_sleeping" placeholder = "how much sleep did you get"> 
    <br>
    <input type= "number" name = "sleep_qual" placeholder = "how well did you sleep"> 
    <br>
    <button type = "submit" name = "submit"> enter new day record </button>

</form> 


<h4> add a new reward here</h4> 
<form action="includes/newRew.inc.php" method="POST">
    <input type= "text" name = "rewardIN" placeholder = "the reward"> 
    <br>
    <input type= "number" name = "rewardID_IN" placeholder = "the id"> 
    <br>
    <button type = "submit" name = "submit"> enter new reward </button>

</form> 

<!--
<h3> add a new queue </h3>
<form action="inclueds/newQ.php" method="POST"> 
    <input type="text" name= "queue_id" placeholder=" queue id">
    <br>
    <input type="text" naem = "queue_name" placeholder="the name of the queue">
    <br> 
    <button type="submit" name=submit> make the queue </button> 
</form>
-->





</body>


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


