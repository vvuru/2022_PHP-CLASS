<?php
    // for문을 활용하셔서 1~100을 더한 값을 구하시오.
    // 더한 값을 출력하세요.

    for($i=1; $i<=100; $i++)
    {
        $sum = 0;
        //$sum = $sum + $i;
        $sum += $i;
    }
    print $sum;
?>