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
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); // Outputs 1
echo "<br>";

$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // Outputs 4
echo "<br>";

$str = "Visit Microsoft on microsoft.com!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools on w3schools.com!"
echo "<br>";

$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";// looking for all instances of banana
echo preg_match($pattern, $str); // Outputs 1
?>
</body>
</html>