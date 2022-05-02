<?php
include_once "db.php";

function ins_user(&$param)
{
    $uid=$param["uid"];
    $upw=$param["upw"];
    $nm=$param["nm"];
    $gender=$param["gender"];

    $sql="INSERT INTO t_user4 (uid,upw,nm,gender) VALUES ('$uid','$upw','$nm','$gender')";
    $conn=get_conn();
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
    return $result;
}