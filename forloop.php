<!-- <?php

// for ($i = 0;$i < 5;$i++){
//     echo "Hello world <br>";
// }

// for ($i = 2; $i < 10;$i+=2){
//     echo $i . "<br>";
// }

// for($i = 10;$i > 0;$i--){
//     echo $i . "<br>";
// }

// for ($i = 10; $i > 0;$i-=2){
//     echo $i . "<br>";
// }

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="forloop.php">
    <label>Enter a number to count to:</label>
    <input type="text" name="user">
    <input type="submit" value="submit">
    </form>
</body>
</html>

<?php

$user = $_POST["user"];

for($i = 1; $i <= $user; $i++){
    echo $i . "<br>";
}

?>