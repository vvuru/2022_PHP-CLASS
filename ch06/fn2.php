<?php
    $num = rand(1,10);

    print_odd_even($num);
    //숫자 10(는)은 짝수입니다
    //숫자 1(는)은 홀수입니다

    function print_odd_even($val)
    {
        /* if($val % 2 == 0)
        {print "숫자 " . $val . "(는)은 짝수입니다";}
        else
        {print "숫자 " . $val . "(는)은 홀수입니다";} */

        /* $odd_even = "홀";
        if($val % 2 === 0)
        {
            $odd_even = "짝";
        }
        print "${val}(는)은 ${odd_even}수입니다"; */

        $result = $val % 2 === 0 ? "짝" : "홀";
        print "숫자 ${val}(는)은 ${result}수입니다";



        
    }
?>