<?php
    $mon = rand(0, 15);
    $season = get_season($mon);

    if($season) { print "${mon}월은 ${season}입니다"; }
    else { print "${mon}월은 잘못된 값"; }

    function get_season($mon)
    {
        $result = "";
        switch($mon)
        {
            case 1: 
            case 2: 
            case 12:
                $result = "겨울";
                break;
            case 3:
            case 4:
            case 5:
                $result = "봄";
                break;
            case 6:
            case 7:
            case 8: 
                $result = "여름";
                break;
            case 9:
            case 10:
            case 11:
                $result = "가을";
                break;
        }
        return $result;
    }
    //3~5 : 봄
    //6~8 : 여름
    //9~11 : 가을
    //12, 1, 2 : 겨울
    //나머지 값은 : 빈칸 
?>