<?php
    /*
    2 x 1 = 2
    2 x 2 = 5
    ... 
    2 x 9 = 18
    ----------
    3 x 1 = 3
    3 x 2 = 6
    ...
    3 x 9 = 27
    ----------
    ...
    9 x 9 = 81
    */

    for($i=2; $i<10; $i++)
    {
        if($i > 2) { print "-----------<br>"; }
        for($z=1; $z<10; $z++)
        {
            $result = $i * $z;
            print "$i x $z = $result <br>";
        }   
    }

?>