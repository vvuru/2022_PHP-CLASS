<?php
$snum = 4;
$enum = 10;
print_num_from_to($snum, $enum);

// [4,5,6,7,8,9,10] 이렇게 출력하게 해주세요.
// 만약 enum값이 더 작으면 "종료값이 더 작을 수 없습니다." 가 출력

// function print_num_from_to($snum, $enum)
// {
//     if ($snum <= $enum) {
//         // $array = [];
//         $result = 0;
//         $count = $enum - $snum + 1;
//         print "[";
//         for ($i = 0; $i < $count; $i++) {
//             // $array[$i] = $snum + $i;
//             $result = $snum + $i;
//             if ($result > $snum) {
//                 print ", ";
//             }
//             print "${result}";
//         }
//         print "]";
//         // print_r($array);
//     } else {
//         print "종료값이 더 작을 수 없습니다.";
//     };
// }

function print_num_from_to($snum, $enum)
{
    if ($snum > $enum) {
        print "종료값이 더 작을 수 없습니다.";
        return;
    }
    print "[";
    for ($i = $snum; $i <= $enum; $i++) {
        if ($i > $snum) {
            print ", ";
        }
        print $i;
    }
    print "]";
}
