<?php
   /*
    2 x 1 = 2	 3 x 1 = 3   .... 9 x 1 = 9
    2 x 2 = 4    3 x 2 = 6   .... 9 x 2 = 18
    ....
    2 x 9 = 18   3 x 9 = 27  .... 9 x 9 = 81
*/

    for($i=1; $i<10; $i++)
    {
        for($z=2; $z<10; $z++)
        {
            $result = $z * $i;
            print "${z}x${i}=${result} ";
        }
        echo "<br>";
    }
?>