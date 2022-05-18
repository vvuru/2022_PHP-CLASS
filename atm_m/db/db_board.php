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

    function ins_board(&$param)
    {
        $i_user=$param["i_user"];
        $question=$param["question"];
        $answer=$param["answer"];

        $sql="INSERT INTO t_board (i_user,question,answer) VALUES ('$i_user','$question','$answer')";

        $conn=get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
    }

    function del_question(&$param)
    {
        $question=$param["question"];

        $sql="DELETE FROM t_question WHERE question='$question'";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function del_board(&$param)
    {
        $i_user=$param["i_user"];
        $question=$param["question"];

        $sql="DELETE FROM t_board WHERE i_user=$i_user AND question='$question'";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_question(&$param)
    {
        $question=$param["question"];

        $sql="SELECT question,que_at FROM t_question WHERE question='$question'";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);        
        return mysqli_fetch_assoc($result);
    }

    function sel_question_list(&$param)
    {
        $start_idx=$param["start_idx"];
        $row_count=$param["row_count"];

        $sql="SELECT question,que_at FROM t_question LIMIT $start_idx,$row_count";
        $conn=get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_board_list(&$param){ // 다 뿌릴꺼니까 파라미터 필요없음 (외부로부터 값을 받지 않을것이다 = 혼자서 해결 가능)
        $sql =
        "   SELECT i_board, question, que_at
            FROM t_board A
            ORDER BY i_board
            DESC
        ";

        // i_user 무조건 익명

        // $sql =
        // "   SELECT A.i_board, A.title, B.nm, B.i_user, A.created_at, B.profile_img
        //     FROM t_board A
        //     INNER JOIN t_user B
        //     ON A.i_user=B.i_user
        //     ORDER BY i_board
        //     DESC
        // ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_paging_count(&$param)
    {
        $row_count=$param["row_count"];
        
        $sql="SELECT CEIL(COUNT(question)/$row_count) AS cnt FROM t_board";

        $conn=get_conn();
        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        $row=mysqli_fetch_assoc($result);
        return $row["cnt"];
    }