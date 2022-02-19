<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$x = 10;  
$y = 6;
echo $x + $y;
echo "<br>";

$x = 20;  //assignment opearator 
$x += 100;

echo $x;
 echo "<br>";

$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal
echo "<br>";

$x = 10;  
echo $x++;//increment
 ?> 

</body>
</html>