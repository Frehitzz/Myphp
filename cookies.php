<?php
    setcookie("Color", "Red", time() + 86400, "/");
    setcookie("Food", "ALimasag", time () + (86400 * 2), "/"); 
    setcookie("desert", "icecream", time() + (86400 * 3), "/");
    setcookie("Days", "Sunday", time() - 0); // this is how to delete a cookie

    // the 86400 is the seconds in 24 hour
    // when we multiply it on 2 it means 2 days 
    // and if multiply by 3 it means 3 days
?>