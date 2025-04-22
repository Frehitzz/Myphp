<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radiobutt.php" method="post">
        <input type="radio" value="Visa" name="radios">
        Visa<br>
        <input type="radio" value="PayMaya" name="radios">
        PayMaya<br>
        <input type="radio" value="Gcash" name="radios">
        Gcash<br>
        <input type="submit" value="Confirm" name="Confirm">
    </form>
</body>
</html>
<?php

if(isset($_POST["Confirm"])){
  if(isset($_POST["radios"])){
    $payment = $_POST["radios"];
    echo "You choose {$payment}";
  }else{
    echo "Please choose above";
  }
}

?>