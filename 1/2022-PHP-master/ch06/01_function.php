<?php
// 객체 안에 함수가 있으면 method[메소드]라고 부른다.
// 객체 안이 아니라면 function(함수)라고 부른다.
// 함수 function


$result = sum(10, 20);

print "sum : $result <br>";
print "sum : " . sum(30, 40) . "<br>";

$r = minus(35, 12);
minus(10, 2); //함수를 호출할 때 입력하는 값은 아규먼트(인자)라고 부른다.

print "r : " . $r . "<br>";

// 선언부
function sum($n1, $n2) //$n1, $n2 = 파라미터(매개변수)라고 부름
{
    // 구현부 return 오른쪽에 있는값을 데리고 들어간다
    return $n1 + $n2;
}

// 보이드 함수 외롭게 써야한다.
function minus($n1, $n2)
{
    print "minus : " . ($n1 - $n2) . "<br>";
    // return; 입력하지 않아도 자동으로 들어간다.
}
