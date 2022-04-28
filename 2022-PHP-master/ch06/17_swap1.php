<?php
function swap_val($n1, $n2)
{
    $temp = $n1;
    $n1 = $n2;
    $n2 = $temp;
}

// &를 붙이면 call by reference 전달방식
function swap_ref(&$n1, &$n2)
{
    $temp = $n1;
    $n1 = $n2;
    $n2 = $temp;
}

$a = 10;
$b = 30;

print "a: $a, b: $b <br>";
swap_val($a, $b); //함수를 실행할때는 값을 !복사!하여 함수를 실행하기 때문에 함수에 있는 값은 서로 다른 저장공간이다
print "a: $a, b: $b <br>";
print "-----<br>";
print "a: $a, b: $b <br>";
swap_ref($a, $b);
print "a: $a, b: $b <br>";
print "-----<br>";
