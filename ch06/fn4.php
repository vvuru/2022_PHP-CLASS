<?php
    $dan = rand(2,9);
    /* print_gugudan($dan); */
    print_gugudan_from_to(2,8);


    /* if dan=2
    2 x 1 = 2
    2 x 2 = 4 */

    /* function print_gugudan($val)
    {
        
            for($b=1; $b<=9; $b++)
            {
                print "$val x $b = " . ($val*$b) . "<br>";
            }
        
    } */

    function print_gugudan_from_to($a,$b)
    {
        for($i=$a; $i<=$b; $i++)
        {
            for($j=1; $j<=9; $j++)
            {
                print "$i x $j = " . ($i*$j) . "<br>";
            }
            if($i<$b)
            print "-----------<br>";
        }
    }
?>