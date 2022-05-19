<?php
// for문은 내가 몇 번 반복할지 정하는거다!!!
//      A       B       C
for ($i = 0; $i < 10; $i++) {
    print "$i <br>";
}
print "끝@!! <br>";
// A: 초기화 공간
// B: 반복 비교문
// C: 증감식

// A > B > 내용 > C
//   > B > 내용 > C
//   > B > 내용 > C
//... B가 false가 될 때까지
$even = 0;
for ($i = 0; $i <= 100; $i++) {

    if ($even % 2 === 0) {
        print "$even <br>";
    }
    $even += 1;
}
