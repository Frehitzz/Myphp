<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php" method="post">
    <!-- we put "[]" on the name to consider is as array -->
     <!-- put also a value if using a checkbox -->
        <input type="checkbox" name="colors[]" value="Red">Red<br>
        <input type="checkbox" name="colors[]" value="Orange">Orange<br>
        <input type="checkbox" name="colors[]" value="Yellow">Yellow<br>
        <input type="checkbox" name="colors[]" value="Green">Green<br>
        <input type="submit" name="button" value="Submit">
    </form>
</body>
</html>
<?php
    // $colors = $_POST["colors"]; // this now an automatic array

    if(isset($_POST["button"])){
        if(isset($_POST["colors"])){
            $colors = $_POST["colors"]; // ipasok to para hindi magka error
            foreach($colors as $color){ // for each to print all of the selected checkbbox
                echo "You select {$color}" . "<br>";
            }
        }else{
            echo "Please choose";
        }
        

    }
?>