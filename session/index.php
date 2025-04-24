<?php
// SESSION = is a superglobalvariable used to store information on a user
//           to be used across multiple pages. A user is assigned a session-id
//           ex. login credentials
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is the login page</h1>
    <form action="index.php" method="post">
        <label>Username:</label>
        <input type="text" name="username"><br>
        <label>Password:</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log In">
    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){

        if(!empty($_POST["username"] && $_POST["password"])){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            header("Location: home.php");
        }else{
            echo "Please try again <br>";
        }

    }
?>