<?php
    $snum = 5;
    $enum = 9;
    print_num_from_to($snum, $enum);

    function print_num_from_to($snum, $enum) 
    {
        if($enum < $snum)
        {
            print "<div>종료값이 더 작을 수 없습니다.</div>";
            return;
        } 
        
        print "[";
        for($i=$snum; $i<=$enum; $i++)
        {
            if($i > $snum) 
            {
                print ", ";
            }
            print $i;
        }
        print "]";
    
    }

    // [4, 5, 6, 7, 8, 9, 10] 이렇게 출력하게 해주세요.
    // 만약 enum값이 더 작으면 "종료값이 더 작을 수 없습니다."가 
    // 출력되게 해주세요.
?>