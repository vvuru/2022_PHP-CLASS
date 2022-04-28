<?php
$mon = rand(0, 15);

$season = get_season($mon);

if ($season) {
    print "${mon}월 ${season}입니다.";
} else {
    print "${mon}월은 잘못된 값";
}

// 3 ~ 5 : 봄
// 6 ~ 8 : 봄
// 9 ~ 11 : 봄
// 12 ,1,2 : 봄
// 나머지 값은 : 빈칸
function get_season($mon)
{
    switch ($mon) {
        case 12:
        case 2:
        case 1:
            // return 하면 이후 구현부는 상관없이 바로 값을 리턴
            return "겨울 ⛄";
        case 11:
        case 10:
        case 9:
            return "가을 🍂";
        case 8:
        case 7:
        case 6:
            return "여름 🔥";
        case 5:
        case 4:
        case 3:
            return "봄 🌼";
        default:
            return "";
    }
}
/*
function get_season($mon)
{
    if ($mon < 1 || $mon > 12) {
        return "";
    }
    if ($mon < 3 || $mon === 12) {
        return "겨울 ⛄";
    }
    if ($mon < 6) {
        return "봄 🌼";
    }
    if ($mon < 9) {
        return "여름 🔥";
    }
    return "가을 🍂";
};
*/
