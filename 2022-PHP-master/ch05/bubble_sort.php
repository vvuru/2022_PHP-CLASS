<?php
// 버블배열
$arr = [10, 33, 12, 8, 1, 89, 2];
//array의 첫번째 값이 2번째 값보다 크면 2번째로
for ($i = count($arr) - 1; $i > 0; $i--) {
    for ($z = 0; $z < $i; $z++) {
        if ($arr[$z] > $arr[$z + 1]) {
            $temp = $arr[$z];
            $arr[$z] = $arr[$z + 1];
            $arr[$z + 1] = $temp;
        };
    }
}
print "<br><br>";
print_r($arr);

// for($i=0;$i<count($arr);$i++)
// {
//     for($z=count($arr)-1;$i<$z;$z--)
//     {
//         if($arr[$i] > $arr[$z])
//     {
//     $temp = $arr[$i];
//     $arr[$i] = $arr[$z];
//     $arr[$z] = $temp;
// }print_r($arr);

// $ct = count($arr);
// for ($i = 1; $i < $ct; $i++) {
//     for ($j = 0; $j < $ct; $j++) {
//         if ($arr[$j] > $arr[$i]) {
//             $temp = $arr[$i];
//             $arr[$i] = $arr[$j];
//             $arr[$j] = $temp;
//         };
//     }
// }
// print_r($arr);
