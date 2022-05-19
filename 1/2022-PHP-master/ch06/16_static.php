<?php
function inc()
{
    // 함수 바깥에서 값을 수정하기 힘들다
    static $i = 1; //정적변수를 할당하면 전의 메모리를 기억한다
    print $i . "<br>";
    $i += 1;
}
for ($i = 0; $i < 10; $i++) {
    inc();
}

$z = 1;
function inc2()
{
    // 함수 바깥에서 값을 수정하기 힘들다
    global $z; //정적변수를 할당하면 전의 메모리를 기억한다
    print $z . "<br>";
    $z += 1;
}
