<?php
    // $pass = "fritzpogi";
    // $hash = password_hash($pass, PASSWORD_DEFAULT);
    // echo "{$hash}";

    $password = "fritz123";

    if(password_verify("fritz12345", $password)){
        echo "You are logged in";
    }else{
        echo "Incorrect password";
    }


?>