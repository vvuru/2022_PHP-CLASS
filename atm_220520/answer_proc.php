<?php
// answer.php에서 답변하기 클릭시 동작. db t_board 해당 row answer컬럼에 insert 됨.
// 동작 후 해당 row의 detail.php 페이지로 이동함

include_once "db/db_board.php";
session_start();

$question=$_POST["question"];
$answer=$_POST["answer"];

$login_user=$_SESSION["login_user"];
$i_user=$login_user["i_user"];

$param=
[
    "i_user"=>$i_user,
    "question"=>$question,
    "answer"=>$answer,
];

$result=ins_board($param);
if($result)
{
    header("location:main_1.php");
}

