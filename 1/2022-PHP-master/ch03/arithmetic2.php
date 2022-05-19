<?php
    // 증감 연산자
    $n1 = 10;

    $n1++;
    print "$n1 <br>";

    ++$n1;
    print "$n1 <br>";

    print "!-------------<br>";


    $n2 = 10;
    // 읽기 먼저 (대입을 하고 난 후 증가)
    $sum = 10 + $n2++;
    print "$sum <br>";
    print "$n2 <br>";
    // 쓰기 먼저 (대입을 하기 전 증가)
    $sum = 10 + ++$n2;
    print "$sum <br>";
    print "$n2 <br>";

    print "!!-------------<br>";

    $n3 = 10;
    $n3 = $n3 + 1; // $n3++
    print "$n3 <br>";

    print "!!!-------------<br>";
    $n4 = 10;
    $n4 += 2; // $n4 = $n4 + 2;의 축약형
    print "$n4 <br>";
    
    print "!!!!-------------<br>";
    $oprd1 = '10';
    $oprd2 = 10;

    // 값이 맞아야한다 타입은 상관없다. 
    $result = $oprd1 == $oprd2;
    print "$oprd1 == $oprd2 : $result <br>";

    // 값도 맞아야하고 타입도 맞아야 한다.
    $result = $oprd1 === $oprd2;
    print "$oprd1 === $oprd2 : $result <br>";

    $result = $oprd1 != $oprd2;
    print "$oprd1 != $oprd2 : $result <br>";

    $result = $oprd1 > $oprd2;
    print "$oprd1 > $oprd2 : $result <br>";
