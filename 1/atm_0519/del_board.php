<?php
//detail.php의 삭제버튼 클릭시 데이터베이스에서 t_board 해당 row 삭제
include_once "db_board.php";
session_start();

$login_user=$_SESSION["login_user"];
$question=$_GET["question"];
$i_user=$login_user["i_user"];
$param=
[
    "question"=>$question,
    "i_user"=>$i_user,
];

$result=del_board($param);
if($result)
{
    header("location:main_1.php");
}