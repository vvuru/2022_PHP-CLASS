<?php
session_start();
$session_username = $_SESSION['username'];
if (is_null($session_username)) {
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
</head>

<body>
    <h1><?= $session_username ?>로그인 하셨습니다.</h1>
    <div><a href="logout.php">로그아웃</a></div>
    <div><a href="change_password.php">비밀번호 변경</a></div>
</body>

</html>