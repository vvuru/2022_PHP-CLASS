<?php
    include_once "db.php";

    function ins_board($param)
    {
        $title=$param['title'];
        $ctnt=$param['ctnt'];
        $i_user=$param['i_user'];
        $created_at=$param['created_at'];
        $updated_at=$param['updated_at'];

        $conn=get_conn();
        $sql="INSERT INTO t_board (title,ctnt) VALUES ('$title','$ctnt')";
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;

    }