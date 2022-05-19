<?php
/* 
    3. 1에서 50까지 의 숫자 중 3의 배수의 합과 5
    의배수의 합을 구하고 그 합들을 모두 더한 값 
    구하기 
    */
$three_sum = 0;
$five_sum = 0;
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 === 0) {
        $three_sum += $i;
    }
    if ($i % 5 === 0) {
        $five_sum += $i;
    }
}
print "3의 배수 합 = $three_sum, 5의 배수 합 = $five_sum <br>";
print "3의 배수와 5의 배수 의 총합 = " . $three_sum + $five_sum;
