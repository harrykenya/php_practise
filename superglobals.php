<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php</title>
</head>
<body>
  
  <?php
echo "My first PHP script!";
echo "<br>";
echo $_SERVER["PHP_SELF"];
echo "<br>";
echo $_SERVER["SERVER_SOFTWARE"];
echo "<br>";
echo $_SERVER["REMOTE_ADDR"];
echo "<br>";
echo $_SERVER["GATEWAY_INTERFACE"];
echo "<br>";
echo $_SERVER["SERVER_PROTOCOL"];
echo "<br>";
echo $_SERVER["SERVER_NAME"];
echo "<br>";
echo $_SERVER["GATEWAY_INTERFACE"];
echo "<br>";
echo $_SERVER["QUERY_STRING"];
echo "<br>";
echo $_SERVER["REQUEST_TIME"];
echo "<br>";
echo $_SERVER["HTTPS"];
echo "<br>";
echo $_SERVER["SERVER_PORT"];
echo "<br>";
echo $_SERVER["SCRIPT_NAME"];
echo "<br>";
echo $_SERVER["SCRIPT_URI"];
echo "<br>";
echo $_SERVER["SERVER_ADDR"];
?>

</body>
</html>