<?php
function plus_array(&$arr, $val)
{
    for ($i = 0; $i < count($arr); $i++) {
        $arr[$i] += $val;
    }
    // foreach ($arr as $k => $v) {
    //     $arr[$k] = $v + $val;
    // }
}


$arr = [10, 20, 30, 40, 50];
plus_array($arr, 10);
print_r($arr);
