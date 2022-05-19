<?php
include_once 'db.php';

session_start();
$session_username = $_SESSION['username'];
if (is_null($session_username)) {
    header("location: login.php");
}
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$check_new_password = $_POST['check_new_password'];
if (!is_null($current_password)) {
    $conn = get_conn();
    $sql = "SELECT password FROM t_member WHERE username='$session_username'";
    $result = mysqli_query($conn, $sql);
    foreach ($result as $row) {
        $current_password_e = $row['password'];
    }
    if ($current_password == $current_password_e) {
        if ($new_password == $check_new_password) {
            $sql_change_password = "UPDATE t_member SET password='$new_password' WHERE username='$session_username'";
            mysqli_query($conn, $sql_change_password);
            mysqli_close($conn);
            header("location: change_password_ok.php");
        } else {
            $wp2 = 1;
        }
    } else {
        $wp1 = 1;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 변경</title>
</head>

<body>
    <h1>비밀번호 변경</h1>
    <form action="change_password.php" method="post">
        <div><input type="password" name="current_password" placeholder="현재 비밀번호" id=""></div>
        <div><input type="password" name="new_password" id="" placeholder="새 비밀번호"></div>
        <div><input type="password" name="check_new_password" placeholder="새 비밀번호 확인" id=""></div>
        <div><input type="submit" value="비밀번호 변경"></div>
        <?php
        if ($wp1 == 1) {
            print "<div>현재 비밀번호가 틀렸습니다.</div>";
        }
        if ($wp2 == 1) {
            print "<div>새 비밀번호가 일치하지 않습니다.</div>";
        }
        ?>
    </form>
</body>

</html>