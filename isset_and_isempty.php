<?php

// isset() = nirereturn niyang true the variable is declared and not null

$name = null; // null = walang laman
if(isset($name)){
    echo "the variable is declared";
}else{
    echo "the variable is empty"; // ito yung lalabas kase walang laman yung variable
}

echo "<br>";
echo "<hr>";

//------------------------------------------------------------------------------------

//empty() = it returns true if the variable is not declared, false, null, "";

$color = " ";
if(empty($color)){
    echo "the variable is empty";
}else{
    echo "the variable is declared";
}
echo "<br>";

echo "<hr>";

?>

<!-- MINI PROJECT -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action = "isset_and_isempty.php">
        <label>Username:</label>
        <input type="text" name="username"><br>
        <label>Password:</label>
        <input type="text" name="password"><br>
        <input type="submit" value="Submit" name="login">
    </form>
</body>
</html>

<?php

$username = $_POST["username"];
$password = $_POST["password"];
$login = $_POST["login"];

    if(isset($login)){
        if(empty($username)){
            echo "Please enter your username<br>";
        }else if(empty($password)){
            echo "Please enter your password<br>";
        }
        else{
            echo "Username: {$username}<br>";
            echo "Username: {$password}<br>";
        }
    }else{
        echo "Enter your password and username";
    }


?>