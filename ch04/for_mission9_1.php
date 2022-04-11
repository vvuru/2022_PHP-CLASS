<?php
    // Good!! 
    $star = rand(3, 10);
    print "star : $star <br>";

    $sum = "";
    for ($z=1; $z<=$star; $z++)
    {
        $sum = $sum . "@";
        print "{$sum}<br>";
    }
?>