<?php
// 가변 파라미터. 인자가 여러개 들어가면 배열로 들어간다
function sum(...$vals)
{
    $sum = 0;
    // foreach($vals as $val){$sum += $val;}
    for ($i = 0; $i < count($vals); $i++) {
        $sum += $vals[$i];
    }
    print "sum : $sum <br>";
}

sum(1, 2);          // sum : 3
sum(1, 2, 3);       // sum : 6
sum(1, 2, 3, 4);    // sum : 10
