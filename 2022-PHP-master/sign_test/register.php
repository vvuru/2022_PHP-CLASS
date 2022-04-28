<?php
include_once 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];
$check_password = $_POST['check_password'];
if (!is_null($username)) {
    $conn = get_conn();
    $sql = "SELECT username FROM t_member WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    foreach ($result as $row) {
        $username_e = $row['username'];
    }
    if ($username == $username_e) {
        $wu = 1;
    } else if ($password != $check_password) {
        $wp = 1;
    } else {
        $sql_add_user = "INSERT INTO t_member (username,password) VALUES ('$username','$password')";
        mysqli_query($conn, $sql_add_user);
        mysqli_close($conn);
        header("location: register_ok.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>

<body>
    <h1>회원 가입</h1>
    <form action="register.php" method="post">
        <div><input type="text" name="username" placeholder="사용자 이름" id=""></div>
        <div><input type="password" name="password" placeholder="비밀번호" id=""></div>
        <div><input type="password" name="check_password" placeholder="비밀번호 확인" id=""></div>
        <div><input type="submit" value="회원 가입"></div>
        <?php
        if ($wu == 1) {
            print "<div>사용자이름이 중복되었습니다.</div>";
        }
        if ($wp == 1) {
            print "<div>비밀번호가 일치하지 않습니다.</div>";
        }
        ?>
    </form>
</body>

</html>