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
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING; // case sensitive

echo "<br>";

define("GREETING", "Welcome to W3Schools.com!",true);
echo greeting; // case insensitive
?>
</body>
</html>