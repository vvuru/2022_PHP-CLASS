<?php
    $star = rand(3,10);

    /*
    만약에 star값이 3이면
    *
    **
    ***

    */

   
        for($a=1; $a<$star; $a++)
        {
            for($c=1; $c<$star; $c++)
            {
                print "*";
            }
            print " <br>"
        }
        
    
?>