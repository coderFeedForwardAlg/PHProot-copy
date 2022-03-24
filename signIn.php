
<?php
    include_once 'includes/dbh.inc.php';

?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styl.css">


<h2> what is you user name </h2>
<form action="includes/signInScript.php" method="POST">
    <input type= "text" name = "user_name_enterd" placeholder = "what is your name"> 
    <br>
</form> 
<h4> not signd up yet? sign up</h4>  
<a href="signUp.php">here</a>

<body>
</body>
</html>