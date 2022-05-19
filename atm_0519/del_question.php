<?php
//detail.php의 삭제버튼 클릭시 데이터베이스에서 t_board 해당 row 삭제
include_once "db/db_board.php";

$question=$_GET["question"];
$param=
[
    "question"=>$question,
];

$result=del_question($param);
if($result)
{
    header("location:main_1.php");
}