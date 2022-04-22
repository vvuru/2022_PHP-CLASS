<?php
    setcookie("country","KR");
    echo "Country: ".$_COOKIE['country']."<br>";

    $_COOKIE['country']="UK";
    echo "Country: ".$_COOKIE['country']."<br>";

    // unset($_COOKIE['country']);
    // echo "Country: ".$_COOKIE['country']."<br>";
    setcookie("country","UK");
    // change browser country
    echo "Country: ".$_COOKIE['country']."<br>";

    unset($_COOKIE['country']);
    setcookie("country");
    
    echo "Country: ".$_COOKIE['country']."<br>";

