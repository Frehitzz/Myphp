<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Welcome to HomePage</h2>
    <?php
  session_start();

  echo "Username: ". $_SESSION["username"] . "<br>";
  echo "Password: ". $_SESSION["password"];

    if(isset($_POST["logout"])){
        session_destroy();

        header("Location: index.php");
    }
?>
    <form action="index.php" method="post">
        <input type="submit" name="logout" value="Log Out">
    </form>
</body>
</html>
