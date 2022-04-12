<?php

    $scores = array(
            //국, 영, 수
        array(100, 100, 100),   //영수
        array(90, 80, 70),      //순자
        array(55, 65, 75),      //영철
        array(90, 88, 55),      //
    );

    $names = array("영수", "순자", "영철", "옥순");
    
    $each_sum = array();    
    for($i=0; $i<count($scores); $i++) //0~3
    {
        for($z=0; $z<count($scores[$i]); $z++) //0~2
        {
            $each_sum[$i] += $scores[$i][$z];
        }
    }
  
    for($i=0; $i<count($names); $i++)
    {
        $avg =  $each_sum[$i] / count($scores[$i]);
        print $names[$i] . " - sum: " . $each_sum[$i] . " avg: $avg <br>";
    }
?>