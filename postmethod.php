<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="postmethod.php">
        <label>Name:</label>
        <input type="text" name="username">
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php

$user = $_POST["username"];

echo "<h1>{$user}</h1>";

?>