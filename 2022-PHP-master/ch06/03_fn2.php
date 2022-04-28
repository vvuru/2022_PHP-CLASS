<?php
$num = rand(1, 10);

print_odd_even($num);

function print_odd_even($num1)
{
    $result = $num1 % 2 === 0 ? "짝" : "홀";
    print "숫자 ${num1}(는)은 ${result}수 입니다.";
}
