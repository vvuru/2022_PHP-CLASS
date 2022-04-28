<?php
$arr = [10, 33, 12, 8, 1, 89];

print_r($arr);
print "<br>";

// swapping을 하기 위해서는 임시 저장소가 필요하다
// 왜냐하면 변수 선언을 하면서 바꾸고 싶은값이 사라져버리기 때문
$temp = $arr[0];
$arr[0] = $arr[1];
$arr[1] = $temp;

print_r($arr);
print "<br>";
