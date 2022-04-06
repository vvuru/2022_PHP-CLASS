<?php
    /*
        지금까지 배운 것 모두 활용하여
        출력: [1, 2, 3, 4, 5, 6, 7]
    */

    print "[";
    for($n=1; $n<8; $n++)
    {
        print "$n";

        if($n==7)
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