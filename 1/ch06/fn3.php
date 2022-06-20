<?php
    $start_num = 5;
    $end_num = 100;

    $result = sum_from_to($start_num, $end_num);

    print "$start_num ~ $end_num 을(를) 모두 더한 값은 $result <br>";

    function sum_from_to($a,$b)
    {
        $sum = 0;
        for($i=$a; $i<=$b; $i++)
        {
            
            $sum += $i;
        }
        return $sum;
        
    }
?>