<?php
$scores = array(
    // 국, 영, 수
    array(100, 100, 100),   //영수
    array(90, 80, 70),      //순자
    array(55, 65, 75),      //영철
    array(90, 88, 55),       //철수
);
/*
$subject = array("국어", "영어", "수학");
$subject_scores = array(0, 0, 0);
$subject_avg = array(0, 0, 0);
for ($i = 0; $i < count($scores); $i++) {
    for ($z = 0; $z < count($scores); $z++) {
        $subject_scores[$z] += $scores[$z][$i];
    }
}

for ($i = 0; $i < count($subject); $i++) {
    $subject_avg[$i] = $subject_scores[$i] / count($scores);
}
for ($i = 0; $i < count($subject_avg); $i++) {
    print "$subject[$i]<br> 합계 : $subject_scores[$i] , 평균 : $subject_avg[$i] <br>";
}
*/

$cls_names = array("국어", "영어", "수학");
$cls_sums = array();
for ($i = 0; $i < count($scores); $i++) {
    for ($z = 0; $z < count($scores[$i]); $z++) {
        $cls_sums[$z] += $scores[$i][$z];
    }
}
for ($i = 0; $i < count($cls_names); $i++) {
    $sum = $cls_sums[$i];
    $avg = $sum / count($scores);
    print $cls_names[$i] . "<br>";
    print "합계 : $sum, 평균: $avg<br>";
    print "<br>";
}
