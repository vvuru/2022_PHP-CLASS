<?php
/*
    
    */
$array = array(100, 200, 300, 400, 500);
foreach ($array as $val) {
    print $val . "<br>";
}
print "--------------------<br>";

foreach ($array as $key => $val) {
    print "[${key}] : " . $val . "<br>";
}
print "--------------------<br>";

$basket = array(
    "Apple" => "Red",
    "Peach" => "Pink",
    "Banana" => "Yellow",
);
//  변수명은 아무거나해도 상관 없다 $a => %b 위치만 잘쓰면 된다.
foreach ($basket as $key => $val) {
    print "[${key}] : " . $val . "<br>";
}
print "--------------------<br>";
