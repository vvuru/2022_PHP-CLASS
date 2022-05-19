<?php
include_once "db/db_board.php";

$question=$_POST["question"];

$param=
[
    "question"=>$question
];

$result=ins_question($param);
if($result)
{
    echo "성공적으로 등록되었습니다";
}