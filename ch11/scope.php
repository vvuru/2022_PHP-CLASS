<?php
    function A ()
    {
        global $n; // 전역변수와 같은 공간 사용
        $n="A";
        $m="A";
        print "$n,$m<br>";
    }

    $n="M";
    $m="M";

    print "$n,$m<br>";
    A();
    print "$n,$m<br>";
