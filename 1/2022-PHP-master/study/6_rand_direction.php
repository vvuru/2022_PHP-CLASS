<?php
/* 
    6. 1부터 20까지의 숫자를 랜덤으로 출력되게
    했을 때, 홀수는 "Left" 짝수는 "Right"로 출력
    되게 하기
    */
$num = rand(1, 20);
print "숫자는 = $num <br>" . ($num % 2 === 1 ? "Left" : "Right");
