<?php
$week = array("월", "화", "수", "목", "금", "토", "일");

$weekend = array($week[6], $week[0]);

print $weekend[0] . "," . $weekend[1];
print "<br>-------------<br>";
print $week[0] . "<br>";
print $week[3] . "<br>";

$week[3] = "Wed";
print $week[3] . "<br>";

$week[7] = "응?";
print $week[7] . "<br>";

$week[9] = "ㅁㅁ";
print $week[8] . "<br>";
print $week[9] . "<br>";
print $week[11] . "<br>";
print "test <br>";
print "$count(week) : " . count($week) . "<br>";

$test = array("A", "B");
print count($test) . "<br>";

// 직접 index를 주는 것은 위험하다.숫자 계산을 잘못하면 문제가 된다.
// $test[10] = "C";
// 배열에 마지막에 값 추가 array_push
array_push($test, "C", "D");

// $test만 치게 되면 변수로 인식하기 때문에 \를 앞에 추가해 준다.
print "count(\$test) : " . count($test) . "<br>";

print "test[2] :" . $test[2] . "<br>";
print "test[3] :" . $test[3] . "<br>";

print "<br>-------------<br>";
// 안졸은 문법이므로 type을 꼭 맞춰서 써주는게 좋다. ❌ 비추
$test2 = array(1, 3.44, "안녕");
print $test2[0];
print $test2[1];
print $test2[2];
