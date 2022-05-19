<?php
include_once "db.php";

function ins_user(&$param)
{
    $email=$param["email"];
    $upw=$param["upw"];
    $nm=$param["nm"];

    $conn=get_conn();
    $sql="INSERT INTO t_user (email,upw,nm) VALUES ('$email','$upw','$nm')";
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
    return $result;
}