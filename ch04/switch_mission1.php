<?php
    // 범위 지정이 안된다는 가정하에 switch 미션

    $mon = rand(1,12);

    switch($mon)
    {
        case 12: 
            print "${mon}월은 겨울";
            break;
        
        case 11: case 10: case 9:
            print "${mon}월은 가을";
            break;

        case 8: case 7: case 6:
            print "${mon}월은 여름";
            break;

        case 5: case 4: case 3:
            print "${mon}월은 봄";
            break;

        case 2: case 1:
            print "${mon}월은 겨울";
            break;
        
        default:
            print "계절없음";
            break; // 안써도됨

         
    }
?>