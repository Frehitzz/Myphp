<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "Mydatabase";
    $conn = "";

    // $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    // kapag  naka off yung server mo maylalabas na pangit na mga message
    // kaya gamitin ang try and catch para ma edit mo yung lalabas na error
    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }catch(mysqli_sql_exception){
        echo "Server Maintenance please try again"; // kapag di nakaconnect sa server eto ang lalabas
    }

    if($conn){
        echo "you are connected";
    }

?>