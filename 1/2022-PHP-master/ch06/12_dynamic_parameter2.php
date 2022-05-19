<?php
/*
    func_num_args() : 인자수 리턴
    func_get_arg() : 인자값 가져올 때 사용
    func_get_args() : 인자배열로 받음 !가변인자 ... 과 같은 뜻이나 가변인자... 은 php 5.6이상의 버전에서만 사용가능
*/
function print_sum()
{
    print "func_num_args() : " . func_num_args()  . "<br>";
    print "func_get_arg(0) : " . func_get_arg(0) . "<br>";
    print "func_get_arg(1) : " . func_get_arg(1) . "<br>";
    print "---<br>";
}

//print_sum(10, 20);
//print_sum(9, 10, 11);
function sum()
{
    print "count : " . count(func_get_args()) . "<br>";
    $sum = 0;
    foreach (func_get_args() as $val) {
        $sum += $val;
    }
    return $sum;
}
print "sum : " . sum(1, 2) . "<br>";
print "썸 : " . sum(1, 2, 10, 11, 12, 13, 14) . "<br>";
