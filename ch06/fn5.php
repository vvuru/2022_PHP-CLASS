<?php
    $snum = 4;
    $enum = 10;
    print_num_from_to($snum,$enum);

    // [4,5,6,7,8,9,10] 이렇게 출력
    // 만약 enum값이 더 작다면 "종료값이 더 작을 수 없습니다."

    function print_num_from_to($a,$b)
    {
        if($a>$b)
            {
                print "종료값이 더 작을 수 없습니다.";
                return;
            }
        
            print "[";
        for($i=$a; $i<=$b; $i++)
        {
            
            if($i>$a) { print ",";}
            print $i;
            //if($i<$b) { print ",";}
        }
        print "]";
        
        
    }
?>