<?php
include_once "db/db_board.php";

session_start();
$i_board = $_GET["i_board"];

if (isset($_SESSION['login_user'])) {
    $login_user = $_SESSION['login_user'];
    $i_user = $login_user['i_user'];
}

$param = [
    "i_board" => $i_board,
    "i_user" => $i_user
];

$item = del_board($param);

if ($item) {
    header("location: list.php");
}
