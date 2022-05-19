<?php
    $num = rand(1, 10);

    print_odd_even($num);

    //숫자 10(는)은 짝수입니다.

    //숫자 1(는)은 홀수입니다.

    function print_odd_even($num)
    {
        $result = $num % 2 === 0 ? "짝" : "홀";
        print "숫자 ${num}(는)은 ${result}수입니다.";
        return;
    }
?>