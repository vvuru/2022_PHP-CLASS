<?php
    /*
    90점 이상 A (3점 이하, '-', 7점 이상 or 100점 '+')
    => 93: A-, 95: A, 98: A+
    80점 이상 B (3점 이하, '-', 7점 이상 '+')
    70점 이상 C
    70점 미만 F
    0~100 점수가 아니면 "잘못된 값" 출력
    */
    $score= rand(0,120);
    print "점수 : $score <br>";
    if($score>=90 && $score<=100)
    {
        if($score<=90 + 3)
        {
            print "A-";
        }
        elseif($score>=90 + 7)
        {
            print "A+";
        }
        else
        {
            print "A";
        }
        
    }
    elseif($score>=80 && $score<=100)
    {
        if($score<=80 + 3)
        {
            print "B-";
        }
        elseif($score>=80 + 7)
        {
            print "B+";
        }
        else
        {
            print "B";
        }
    }
    elseif($score>=70 && $score<=100)
    {
        if($score<=70 + 3)
        {
            print "C-";
        }
        elseif($score>=70 + 7)
        {
            print "C+";
        }
        else{print "C";}
    }
    elseif($score>=60 && $score<=100)
    {
        if($score<=60 + 3)
        {
            print "D-";
        }
        elseif($score>=70 + 7)
        {
            print "D+";
        }
        else{print "D";}
    }
    elseif($score<60 && $score>=0)
    {
        print "F";
    }
    else
    {
        print "잘못된 값";
    }


?>