<?php
$score = rand(0, 120);
/*
        90점 이상 A(3점 이하, '-', 7점 이상은 +)
        => 93: A-, 95: A, 98 : A+
        80점 이상 B(3점 이하, '-', 7점 이상은 +)
        70점 이상 C(3점 이하, '-', 7점 이상은 +)
        60점 이상 D(3점 이하, '-', 7점 이상은 +)
        60점 미만 F(3점 이하, '-', 7점 이상은 +)
        0~100 점수가 아니면 "잘못된 값" 들 입력
    */

print "점수 : $score <br>";
/* if (100 >= $score && $score > 60 && $score % 10 > 6) {
    print "+";
}
if (100 > $score && $score > 60 && $score % 10 < 4) {
    print "-";
}
if (100 >= $score && $score >= 90) {
    print "A";
}
if (90 > $score && $score >= 80) {
    print "B";
}
if (80 > $score && $score >= 70) {
    print "C";
}
if (70 > $score && $score >= 60) {
    print "D";
}
if (60 > $score) {
    print "F";
}
if (100 < $score) {
    print "잘못된 값";
}
*/
// floor 내림 ceil 올림 round 반올림
if ($score > 100 || $score < 0) {
    print "잘못된 값";
} else {
    $sign = "F";
    $symbol = "";
    $val_1 = intval($score / 10);
    switch ($val_1) {
        case 10:
        case 9:
            $sign = "A";
            break;
        case 8:
            $sign = "B";
            break;
        case 7:
            $sign = "C";
            break;
        case 6:
            $sign = "D";
            break;
    }
    $val_2 = $score % 10;
    if ($score >= 60) {
        if ($score === 100 || $val_2 >= 7) {
            $symbol = "+";
        } else if ($val_2 <= 3) {
            $symbol = "-";
        }
    }
    print $sign . $symbol;
}
