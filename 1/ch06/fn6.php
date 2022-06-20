<?php
   $star = rand(3,10) ;
   print "$star <br>";
   //print_star($star);
   //print_star_v2($star);
   print_star_triangle($star);
   // $star=3
   // ***

    function print_star_triangle($a)
    {
        for($i=1; $i<=$a; $i++)
        {
            for($j=1; $j<=$i; $j++)
            {
                print "*";
            }
            print "<br>";
        }
    }

    /*function print_star_v2($a)
    {
        for($i=0; $i<$a; $i++)
        {
            print_star($a)
            /*for($j=0; $j<$a; $j++)
            {
                print "*";
            }
            print "<br>";
        }
    } */

   /*function print_star($a)
   {
       for($i=0; $i<$a; $i++)
       {
           print "*";
       }
   } */

   
?>