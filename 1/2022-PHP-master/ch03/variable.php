<?php
//single-line comment
/*
    multi-line comment
*/

$age = 21; // -은 대입연산자 . . 은 문자열 변환 합치기 문자열 변환
print "<div>" . $age . "</div>";

$name;
print "<div>" . $name . "</div>";

$name = "홍길동";
print "<div>" . $name . "</div>";

$name = "장보고";
print "<div>" . $name . "</div>";

$name = 10;
print "<div>" . $name . "</div>";

// 변수명 네이밍 규칙
/*
    1. 대소문자 영어, 숫자, 특수기호 _ (언더바) 로 이루어져야함
    2. 숫자가 맨 앞에 오면 X
    3. 문자 사이에 빈칸 X
    */

$a1b = 12;
print $a1b;

$_124 = "ㅁㅁㅁㅁㅁㅁㅁㅁ";
print $_124;
