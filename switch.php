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
$favcolor = "red";

switch ($favcolor) {
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "red":
    echo "Your favorite color is red"; // will execute the statement that is equal to the variable declared in this case red
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
</body>
</html>