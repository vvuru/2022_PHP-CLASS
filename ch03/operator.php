<?php
    $num = 26;
    // 10는(은) 짝수입니다. 11은 홀수입니다.
    $result = $num % 2;
    if($result === 0 )
    {
        print "$num 는(은) 짝수입니다";
    }
    else
    {
        print "$num 는(은) 홀수입니다";
    }
?>