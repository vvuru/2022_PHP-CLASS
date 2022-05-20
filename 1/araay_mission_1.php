<?php
    // $arr=[4,9,10,22,100,45];

    // for($i=6;$i>0;$i--)
    // {
    //     print 
    // }

    // krsort($arr);
   
    // foreach($arr as $a)
    // {
    //     echo "$a <br>";
    // }

    // for($i=1 ; $i<count($arr) ; $i++)
    // {
    //     echo $arr[count($arr)-$i]."<br>";
    // }

    // -------------------------------------------- mission1

    $arr=array(); // 이 배열에 최대로 넣을 수 있는 값은 5개까지 / 0,1,2,3,4
    $val=rand(1,8);

    for($i=0;$i<5;$i++)
    {
        $val=rand(1,8);
        for($j=0;$j<count($arr);$j++)
        {
            if($j==$val)
            {
                $i--;
            }
            
        }
    }