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

function sel_user(&$param)
{
    $email=$param["email"];

    $sql="SELECT i_user,email,upw,nm,profile_img,intro FROM t_user WHERE email='$email'";
    $conn=get_conn();
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
    return mysqli_fetch_assoc($result);
}

function upd_profile_img(&$param)
{
    $sql="UPDATE t_user SET profile_img='{$param["profile_img"]}'
    WHERE i_user={$param["i_user"]}";
     $conn=get_conn();
     $result=mysqli_query($conn,$sql);
     mysqli_close($conn);
     return $result;
}