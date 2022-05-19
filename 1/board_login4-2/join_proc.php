<?php
include_once "db_user.php";

$uid=$_POST["uid"];
$upw=$_POST["upw"];
$nm=$_POST["nm"];
$gender=$_POST["gender"];

$param=
[
    "uid"=>$uid,
    "upw"=>$upw,
    "nm"=>$nm,
    "gender"=>$gender,
];

$result=ins_user($param);
if($result)
{
    header("location:login.php");
}

