<?php
echo ' hello ';
$count = 7;
?>
<!DOCTYPE html>
<html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    <body>
        <h1> some text </h1>

        

<script>
text("test", 10,30);
let varialbe = 5; // "<?php echo $count; ?>";

let beginTime;
let c;
function setup() {
  beginTime = second() + minute() * 60 ; 
  //Fix me with window width window hight !!!!! 
  c = createCanvas(220, 60);
  c.position(500,500);
  
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
</body>
</html> 