<?php
/*
        합계: ?
        평균: ?
    */
$score_arr = array(100, 90, 33, 87, 65);

$sum = 0;

for ($i = 0; $i < count($score_arr); $i++) {
    $sum += $score_arr[$i];
}
$avg = $sum / count($score_arr);
print "합계 : " . $sum;
print "평균 : " . $avg;
