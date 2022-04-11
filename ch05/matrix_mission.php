<?php

    $scores = array(
        //국, 영, 수
        array(100, 100, 100),   //영수
        array(90, 80, 70),      //순자
        array(55, 65, 75),      //영철
        array(90, 88, 55),
    );

    $names = array("영수", "순자", "영철", "옥순");
    $each_sum = array();    

    for($i=0; $i<count($scores); $i++)
    {
        for($z=0; $z<count($scores[$i]); $z++)
        {
            $each_sum[$i] += $scores[$i][$z];
        }
    }
  
    for($i=0; $i<count($names); $i++)
    {
        print $names[$i] . " : " . $each_sum[$i] . "<br>";
    }
?>