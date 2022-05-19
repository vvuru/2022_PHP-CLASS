<?php
    //login.php에서 넘어오는 값을 적절한 변수에 담는다
    //변수의 값을 출력

    include_once "db/db_user.php";

    $uid=$_POST["uid"];
    $upw=$_POST["upw"];

    echo $uid."<br>";
    echo $upw."<br>";

    $param=[
        "uid"=>$uid
    ];
    $result=sel_user($param);
    if(empty($result))
    {
        echo "NO ID";
        die;
    }

    echo "i_user: ".$result["i_user"]."<br>";
    echo "upw: ".$result["upw"]."<br>";

    if($result["upw"] == $upw)
    {
        session_start();
        $_SESSION["login_user"]=$result;
        header("Location: list.php");
    }
    else
    {
        header("Location: login.php");
    }
        
    
    
   