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
$x = 1;
 
while($x <= 5) {
  echo "The number is: $x <br>"; //outputs numbers 1 2 3 4 5
  $x++;
} 
echo "<br>";

$x = 1;
do {
  echo "The number is: $x <br>";// do while loop
  $x++;
} while ($x <= 5);
echo "<br>";

for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";//for loop
}
echo "<br>";

$colors = array("red", "green", "blue", "yellow"); //outputs the colors inside array
foreach ($colors as $value) {
  echo "$value <br>";
}
echo "<br>";

for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>"; //breaks the count when it reaches 4
}
?>  
</body>
</html>