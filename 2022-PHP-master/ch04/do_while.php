<?php
// while 조건식을 확인 후 내용 실행
//  do-while 내용먼저 실행 후 조건식을 확인
print "---시작---<br>";
do {
    $r_val = rand(1, 10);
    print "r_val : $r_val <br>";
} while ($r_val != 10);
print "---끝---<br>";
