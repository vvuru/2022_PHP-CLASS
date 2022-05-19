<?php
if (isset($name)) { // 변수값 설정 x
    print " name is ok!!";
}

$name = "HongGilDong"; // 변수값 설정 o 이제 뜸!
if (isset($name)) {
    print " name is great!!";
    print isset($name);
}
print $name . "<br>";

unset($name); // 변수해제
print $name . "<br>"; // 아무것도 안찍힘

print "The End";

$fruit = array(
    "Apple" => "Red",
    "Pear" => array("Brown", "Yellow"),
    "Peach" => "Pink",
    "Tomato" => array("Red", "Green"),
);
