<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validate.php" method="post">
        <label>Email:</label>
        <input type="text" name="email"><br>
        <input type="submit"name="button">
    </form>
<?php
   if(isset($_POST["button"])){
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if(empty($email)){
        echo "please check your email";
    }else{
        echo "Your email is: {$email}";
    }

   }
?>
</body>
</html>
