<?php
/* 
    5. 1부터 100까지 숫자 중에 홀수와 짝수 각각 
    나열하기 
*/
print "홀수 <br>";
for ($i = 0; $i < 100; $i++) {
    if ($i % 2 === 1) {
        print $i . " ";
    }
}
print "<br><br> 짝수 <br>";
for ($i = 0; $i < 100; $i++) {
    if ($i % 2 === 0) {
        print $i . " ";
    }
}
