<?php
include_once 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];
if (!is_null($username)) {
    $conn = get_conn();
    $sql = "SELECT password FROM t_member WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    foreach ($result as $row) {
        $password_e = $row['password'];
    }
    if (is_null($password_e)) {
        $wu = 1;
    } else {
        if ($password == $password_e) {
            session_start();
            $_SESSION['username'] = $username;
            header("location: login_ok.php");
        } else {
            $wp = 1;
        }
    }
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
    <form action="login.php" method="post">
        <div><input type="text" name="username" placeholder="사용자이름" id=""></div>
        <div><input type="password" name="password" placeholder="비밀번호" id=""></div>
        <input type="submit" value="로그인">
        <?php
        if ($wu == 1) {
            print "<div>사용자이름이 존재하지 않습니다.</div>";
        }
        if ($wp == 1) {
            print "<div>비밀번호가 틀렸습니다.</div>";
        }
        ?>
    </form>
</body>

</html>