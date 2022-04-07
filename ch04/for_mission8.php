<?php
    $star = rand(1,10);

    /*
    만약에 star값이 2면

    **
    **

    이렇게

    */

    print "$star : <br>";

    for($a=0; $a<$star; $a++)
    {
        print "<br>";
       for($b=0; $b<$star; $b++)
       {
        print "*";
       }
    }
?>