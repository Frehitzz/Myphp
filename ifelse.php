<!-- <?php
    // $age = 140;

    // if($age >=130){
    //     echo "DAMN! you're way too old";
    // }
    // else if($age >=18){
    //     echo "you can enter this site";
    // }else if($age <= 0){
    //     echo "thats not a valid age";
    // }
    // else{
    //     echo "sorry this site is for 18+ only";
    // }
?> -->

<?php

$hours =88;
$rate = 90;
$kinsenas = NULL;

if($hours){
    $kinsenas =  $hours * $rate;
    echo "You're salary this cut off is: {$kinsenas}";
}

?>