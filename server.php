<?php
    // $_SERVER = Shows nearly everything you need to know about
    // the current web environment

    // foreach($_SERVER as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label>Username:</label>
        <input type="text" name="username">
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
