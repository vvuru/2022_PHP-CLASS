<?php
$snum = 10;
$enum = 5;
print_num_from_to($snum, $enum);
print "<br>-------------<br>";
print_num_from_to2($snum, $enum);
function print_num_from_to($snum, $enum)
{
    print "[";
    if ($snum > $enum) {
        for ($i = $snum; $i >= $enum; $i--) {
            print $i;
            if ($i > $enum) {
                print ", ";
            }
        }
        print "]";
        return;
    }
    for ($i = $snum; $i <= $enum; $i++) {
        if ($i > $snum) {
            print ", ";
        }
        print $i;
    }
    print "]";
}
// 삼항연산자 사용
function print_num_from_to2($snum, $enum)
{
    print "[";
    for ($i = $snum; $snum < $enum ? $i <= $enum : $i >= $enum; $snum < $enum  ? $i++ : $i--) {
        if ($i != $snum) {
            print ", ";
        }
        print $i;
    }
    print "]";
}
