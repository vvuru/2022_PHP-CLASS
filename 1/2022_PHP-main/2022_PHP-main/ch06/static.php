<?php
    function inc()
    {
        static $i = 1;
        print $i++ . "<br>";
    }

    $z = 1;
    function inc2()
    {
        global $z;
        print $z . "<br>";
        $z += 1;
    }

    for($i=0; $i<10; $i++)
    {
        inc();
    }
?>