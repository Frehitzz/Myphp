<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize.php" method="post">
    <label>UserName:</label>
    <input type="text" name="username"><br>
    <label>Age:</label>
    <input type="text" name="age"><br>
    <label>Email:</label>
    <input type="text" name="email"><br>
    <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
<?php


// if this is what you do other user can put malicious text like this one
// <script>alert("This is a virus")</script>
// when it put into the input field there will be alert in the top that pop up

// if(isset($_POST["submit"])){
//     $username = $_POST["username"];
//     echo "hi you are {$username}";
// }

// to avoid that thisi what will you do

if(isset($_POST["submit"])){
// Ang ginagawa nito is inaoutput niya yung mismong code na "<script>alert("This is a virus")</script>"
// at wala ng ma papop up
    $username = filter_input(INPUT_POST, "username",FILTER_SANITIZE_SPECIAL_CHARS);

// di niya pinapansin yung mga letters only numbers lang binabasa niya
// kapag nilagay mo sa age is "aasf25dsds" ang magiging output ay "25"
    $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);

// di niya pinapansin yung mga di kasamang character
// kapag nilagay mo is "("fritzharlydegamo@gmail.com")<><>"
// ang lalabas lang ay "fritzharlydegamo@gmail.com"
// inignore niya yung ibang character
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    echo $username ."<br>";
    echo $age ."<br>";
    echo $email ."<br>";



}

?>