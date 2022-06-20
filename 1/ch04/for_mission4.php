<?php
    /*
        지금까지 배운 것 모두 활용하여
        출력: [1, 2, 3, 4, 5, 6, 7]
    */
    $end_val = 12;
    echo "[";
    for($i=1; $i<$end_val; $i++)
    {
        print $i;
        if($i < $end_val-1) { print ", "; }
    }
    echo "]";
    echo "<br>";
    echo "[";
    for($i=1; $i<$end_val; $i++)
    {
        if($i > 1) { print ", "; }
        print $i;
    }
    echo "]";
?>