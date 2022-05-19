<?php
    include "db.php";

    // 수정 완료 후 detail.php 로 이동
    $i_board = $_POST["i_board"];
    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    $data = [
        "i_board" => $i_board,
        "title" => $title,
        "ctnt" => $ctnt
    ];

    $result = upd_board($data);

    header("Location: detail.php?i_board=${i_board}");
?>