<?php

$color = array("red","yellow","orange","green","blue");

// echo $color;  - this will return error because in php yyou cannot print all unles ou pick one
echo $color[0] . "<br>"; // you need to chose what to output
echo $color[1] . "<br>";
echo $color[2] . "<br>";
echo $color[3] . "<br>";
echo $color[4] . "<br>";
echo "<br>";
echo "<hr>";
//---------------------------------------------------------------------------------------------
// instead of printing line by line the elements in array
// you can use foreach(){}
foreach($color as $color){ // here we just put the value of array into another variable
    echo $color . "<br>"; // and the new created variable have the array and we can echo it
}



?>