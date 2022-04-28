<?php
session_start();
$session_user_id = $_SESSION['user_id'];
if (is_null($session_user_id)) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= $session_user_id ?>로그인 하였습니다.</h1>
    <div><a href="logout.php">로그아웃</a></div>
</body>

</html>