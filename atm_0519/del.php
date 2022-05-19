<?php
//detail.php의 삭제버튼 클릭시 데이터베이스에서 t_board 해당 row 삭제

    include_once "db/db_board.php";

    session_start();
    $login_user = $_SESSION["login_user"];
    $i_board = $_GET["i_board"];
    $i_user = $login_user["i_user"];
    $param = [
        "i_board" => $i_board,
        "i_user" => $i_user,
    ];

    $result = del_board($param);
    if($result) {
        Header("Location: main.php");
    }
