<?php
include_once "db.php";

function ins_question(&$param)
{
    $question=$param["question"];
    
    $sql="INSERT INTO t_question (question) VALUES ('$question')";

    $conn=get_conn();
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
    return $result;
}

function ins_answer(&$param)
{
    
}