<?php
    $num = 10;
    $odd_even = "홀";

    // 기본값이 홀인데 만약 짝수면 홀을 짝으로 변환
    if ($num % 2 === 0 ) {
        $odd_even = "짝";
    }
    print "${num}은(는) ${odd_even}수입니다.";
?>