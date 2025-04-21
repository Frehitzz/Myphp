<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //GLOBAL SCOPE
    // $name = "Fritz";

    // // function Myname(){
    // //     echo "the variable is outside of the function: $name";
    // // }
    // // Myname();

    // echo"<br><br>the value of variable name is: $name";


    // // LOCAL SCOPE
    // echo"<h1>Local Scope</h1>";

    // function Mysurname(){
    //     $surname = "degamo";

    //     echo"the value of variable surname is: $surname";
    // }

    // Mysurname();


    $x = 10;
    $y = 20;

    function Mynum(){
        global $x, $y;

        $y = $x + $y;
        echo $y;
    }
    Mynum();

    ?>

</body>
</html>