<?php

/*
        지금까지 배운 것 모두 활용하여
        출력 : [1, 2, 3, 4, 5, 6. 7]
    
 */
$end_val = 8;
print "[";
for ($i = 1; $i < $end_val; $i++) {
    if ($i === $end_val) {
        print $i . "]";
    } else {
        print $i . ",";
    }
}
echo "<br> ==================== <br>";

// 매직넘버 (변수명에서 무슨 역할을 하는지 써주는게 좋다)

echo "[";
for ($i = 1; $i <= $end_val; $i++) {
    echo $i;
    if ($i < $end_val) {
        echo ",";
    }
}
echo "]";

echo "<br> ==================== <br>";


$end_val = 8;
echo "[";
for ($i = 1; $i <= $end_val; $i++) {
    if ($i > 1) {
        echo ",";
    }
    echo $i;
}
echo "]";
