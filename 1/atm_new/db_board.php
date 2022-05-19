<?php
    include_once "db.php";

    function ins_board($param){ // write_proc.php 에 있는 $param에 접근
        $i_user = $param["i_user"]; // 변수명이 똑같아서 똑같은 값 갖고있는 아니라는것 인지 Q
        $question = $param["question"];

        $sql =
        "   INSERT INTO t_board (i_user, question)
            VALUES ($i_user, '${question}')
        "; // 정수형 '' 안붙임
        
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_board_list1(&$param){ // 다 뿌릴꺼니까 파라미터 필요없음 (외부로부터 값을 받지 않을것이다 = 혼자서 해결 가능)
        $i_user = $param["i_user"];
        
        $sql =
        "   SELECT A.question, A.answer, A.ans_at, B.profile_img, B.nm
            FROM t_board A
            INNER JOIN t_user B
            ON A.i_user=B.i_user
            WHERE answer IS not NULL AND B.i_user = $i_user
            ORDER BY i_board
            DESC
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_board_list2(&$param){ // 다 뿌릴꺼니까 파라미터 필요없음 (외부로부터 값을 받지 않을것이다 = 혼자서 해결 가능)
        $i_user = $param["i_user"];
        
        $sql =
        "   SELECT A.question
            FROM t_board A
            INNER JOIN t_user B
            ON A.i_user=B.i_user
            WHERE answer IS NULL AND B.i_user = 1
            ORDER BY i_board
            DESC;
        ";
        
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }






    function del_board(&$param){
        $i_board = $param["i_board"];
        $i_user = $param["i_user"];

        $sql =
        "   DELETE FROM t_board
            WHERE i_board = $i_board
            AND i_user = $i_user
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }