<?php
include_once "db/db_board.php";

session_start();
$login_user = $_SESSION["login_user"];

$title = $_POST['title'];
$ctnt = $_POST["ctnt"];
$i_user = $login_user['i_user'];


print "title : $title <br>";
print "ctnt : $ctnt <br>";

// t_board에 insert 완료 후 list.php 로 이동.

$param = [
    "i_user" => $i_user,
    "title" => $title,
    "ctnt" => $ctnt
];

$result = ins_board($param);
if ($result) {
    header("location: list.php");
}
