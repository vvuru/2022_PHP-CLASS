<?php
    // 범위 지정이 안된다는 가정하에 switch 미션
    // switch 문으로 해결
    // $mon 값이 3~5 사이면 "봄" 출력
    // $mon 값이 6~8 사이면 "여름" 출력
    // $mon 값이 9~11 사이면 "가을" 출력
    // $mon 값이 12, 1, 2 사이면 "겨울" 출력
    // 상관없는 값이면 계절없음

    // 1 ~ 15 랜덤 값이 들어간다.
    $mon = rand(1,15);
    switch($mon) {
        case 12: case 2: case 1:
            print "${mon}월은 겨울.";
            break;
        case 11: case 10: case 9:
            print "${mon}월은 가을.";
            break;
        case 8: case 7: case 6:
            print "${mon}월은 여름.";
            break;
        case 5: case 4: case 3:
            print "${mon}월은 봄.";
            break;
            default: print"${mon}월은 계절 없음";
    }
