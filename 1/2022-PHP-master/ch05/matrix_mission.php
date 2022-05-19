<?php

/* */
$score = array(
    // 국, 영, 수
    array(100, 100, 100),   //영수
    array(90, 80, 70),      //순자
    array(55, 65, 75),      //영철
    array(90, 88, 55),       //철수
);
// 학생별 과목 총점과 평균

$names = array("영수", "순자", "영철", "철수");
$each_scores = array();
$avg_scores = array(0, 0, 0);
for ($i = 0; $i < count($score); $i++) {
    for ($z = 0; $z < count($score[$i]); $z++) {
        $each_scores[$i] += $score[$i][$z];
    };
};
print "학생별 총점 : <br>";
for ($i = 0; $i < count($names); $i++) {
    $avg = $each_scores[$i] / count($score[$i]);
    print "$names[$i] : $each_scores[$i] <br> 평균 : $avg";
}
// 평균을 넣어주는 for문
/*
for ($i = 0; $i < count($names); $i++) {
    $avg_scores[$i] = $each_scores[$i] / 3;
}
print "학생별 평균 : <br>";
for ($i = 0; $i < count($names); $i++) {
    print "$names[$i] : $avg_scores[$i] <br>";
}*/
