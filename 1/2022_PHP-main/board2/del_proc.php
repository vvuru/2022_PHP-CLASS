<?php
    include_once "db.php";

    $i_board = $_GET['i_board'];
    $result = del_board($i_board);
    header("Location: list.php");
?>