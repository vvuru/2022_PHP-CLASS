<?php

    function print_sum(...$vals)
    {
        /*
        for($i=0; $i<count($vals); $i++)
        {
            $val = $vals[$i];
            $sum += $val;
            //$sum += $vals[$i];
        }
        */
        /*
        foreach($vals as $val)
        {
            $sum += $val;
        }
        */
        print "sum : " . array_sum($vals) . "<br>";
    }

    print_sum(1, 2);       // sum: 3
    print_sum(1, 2, 3);    // sum: 6
    print_sum(1, 2, 3, 4); // sum: 10

    
?>