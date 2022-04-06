<?php
    /* 2 x 1 = 2
        2 x 2 = 4
        2 x 9 = 18
        ----------
         */
    
    
         
    for($a=2; $a<10; $a++)
    {
        if(2<$a) { print "-----------<br>";}
        for($b=1; $b<10; $b++)
        {
            $result= $a * $b;
            print "$a x $b = $result <br>";
        }
        
    }
?>