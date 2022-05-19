<?php
    if(isset($name)) {
        print "name is ok!!";
    }

    $name = "HongGilDong";
    if(isset($name)) {
        print "name is great!! <br>";
        print isset($name);
    }
    print $name . "<br>";

    unset($name);
    print $name . "<br>";

    print "The End";
?>