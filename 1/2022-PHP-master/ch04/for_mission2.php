<?php
$dan = rand(2, 9);

echo "구구단 ${dan}단<br>";
for ($i = 1; $i < 10; $i++) {
    echo "$dan * $i = " . $dan * $i . "<br>";
}
