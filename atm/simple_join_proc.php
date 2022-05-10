<?php
include_once "db_user.php";

$email=$_POST["email"];
$upw=$_POST["upw"];
$nm=$_POST["nm"];

$param=
[
    "email"=>$email,
    "upw"=>$upw,
    "nm"=>$nm
];

$result=ins_user($param);
header("location:login.php");