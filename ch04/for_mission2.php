<?php
    $dan=rand(2,9);
    echo "${dan}단 <br>";
    

    for($a=1;$a<=9;$a++)
    {
        $result = $dan * $a;
        print "$dan x $a = $result <br>";
        // echo "$dan x $a = " . ($dan * $i) . "<br>";
    }
// 1부터 100까지의 합
    $sum=0;

    for($i=1; $i<101; $i++)
    {
        $sum= $sum + $i;
    }

    print $sum;
?>