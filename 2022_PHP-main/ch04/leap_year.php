<?php
    $year = 1200;

    print "${year}년은 ";
    if($year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0)   ) 
    {
        print "윤년입니다.";
    } 
    else 
    {
        print "윤년이 아닙니다.";
    }

?>