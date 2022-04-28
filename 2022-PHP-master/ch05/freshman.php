<?php
// 순서가 없는 시퀀스 배열
$freshman = array(
    "David" => "Computer",
    "Alice" => "Math",
    "Elsa" => "Physics",
    "Bob" => "Music",
    "Chris" => "electronics"
);

print_r($freshman);
print "<br><br>";
print $freshman["David"] . "<br>";
print $freshman["Alice"] . "<br>";
print $freshman["Elsa"] . "<br>";
print $freshman["Bob"] . "<br>";
print $freshman["Chris"] . "<br>";

$freshman["Bob"] = "Dance";
print "<br><br>";
print $freshman["Bob"] . "<br>";

$freshman["Frank"] = "History";
print $freshman["Frank"] . "<br>";

// 별로 좋진 않다 0을 문자열로 인식해서 넣어주기 때문
$freshman[0] = "안녕";
print "<br><br>";
print_r($freshman);
