<?php
    /*
        지금까지 배운 것 모두 활용하여
        출력: [1, 2, 3, 4, 5, 6, 7]
    */

    $end_val = 12;
    print "[";
    for($n=1; $n<=$end_val; $n++)
    {
        print "$n";

        if($n==$end_val)
        {
            print"";
        }
        else
        {
            print", ";
        }
    }
    print "]";
?>