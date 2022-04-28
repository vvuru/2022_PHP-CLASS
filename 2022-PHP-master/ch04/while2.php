<?php
print "-- 시작 -- <br>";
// while(true) 무한반복 중간에 break로 빠져나옴
while (true) {
    $r_val = rand(1, 10);
    if ($r_val == 10) {
        break;
    }
    print "r_val : $r_val <br>";
}
print "-- 끝 -- <br>";
