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
echo strlen("Hello world!"); //returns strings length
echo "<br>";
echo $_SERVER["PHP_SELF"];
echo "<br>";
echo str_word_count("Hello world!"); // counts the number of words in a string
?>
</body>
</html>