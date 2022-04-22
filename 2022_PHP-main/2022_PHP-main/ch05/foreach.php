<?php
    $array = array(100, 200, 300, 400, 500);

    foreach($array as $val)
    {
        print $val . "<br>";
    }
    print "---------------- <br>";

    foreach($array as $aa => $dd)
    {
        print $aa .  " : " . $dd . "<br>";
    }
    print "---------------- <br>";
?>