<?php
function make_ten()
{
    global $i; //전역변수 선언시 바로 초기화가 안됨
    $i = $i + 10; //지역변수
}

$i = 0; // 전역변수 지역변수와 전역변수는 다른메모리를 사용하는 다른 수이다.

make_ten();
print "i : $i <br>";
