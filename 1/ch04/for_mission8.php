<?php    
    /*
    만약에 start값이 2
    **
    **

    만약에 start값이 4
    ****
    ****
    ****
    ****
    */

    $star = rand(2, 10);
    print $star . "<br>";
    
    for($z=0; $z<$star; $z++)     {
        for($i=0; $i<$star; $i++)
        {
            print "*";
        }
        print "<br>";
    }    
?>