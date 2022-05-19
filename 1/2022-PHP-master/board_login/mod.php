<?php
include_once 'db/db_board.php';
session_start();
$i_board = $_GET['i_board'];
$login_user = $_SESSION['login_user'];
$i_user = $login_user['i_user'];

$param = [
    "i_board" => $i_board,
    "i_user" => $i_user
];

$result = sel_board($param);
if ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $ctnt = $row['ctnt'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글 수정</title>
</head>

<body>
    <form action="mod_proc.php" method="post">
        <input type="hidden" name="i_board" value="<?= $i_board ?>">
        <div><input type="text" name="title" value="<?= $title ?>" id=""></div>
        <div><textarea name="ctnt" id="" cols="30" rows="10"><?= $ctnt ?></textarea></div>
        <div>
            <input type="submit" value="글수정">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>

</html>