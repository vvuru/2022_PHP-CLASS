<?php
print "--- break --- <br>";
// 중간에 for 문을 멈추고 싶을때 사용
for ($i = 0; $i < 20; $i++) {
    if ($i == 12) {
        break;
    }
    print $i . "<br>";
}
print "--- continue --- <br>";
for ($i = 0; $i < 20; $i++) {
    // continue는 밑에 것을 실행시키지 않고 넘어감
    if ($i == 12) {
        continue;
    }
    print $i . "<br>";
}
