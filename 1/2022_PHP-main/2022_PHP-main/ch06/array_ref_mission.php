<?php
    $arr = [10, 20, 30, 40, 50];
    $num = 5;
    plus_array($arr, $num);
    print "num : $num <br>";
    print_r($arr);

    function plus_array(&$arr, &$val)
    {
        $val = 6;
        foreach($arr as $k => $v)
        {
            $arr[$k] = $v + $val;
        }
    }
?>