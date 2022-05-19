<?php
include_once 'db.php';

$user_id = $_POST['user_id'];
$user_password = $_POST['user_password'];
if (!is_null($user_id)) {
    $conn = get_conn();
    $sql = "SELECT user_password FROM t_naver WHERE user_id='$user_id'";
    $result = mysqli_query($conn, $sql);
    foreach ($result as $row) {
        $user_password_e = $row['user_password'];
    }
    if (is_null($user_password_e)) {
        $wu = 1;
    } else {
        if ($user_password == $user_password_e) {
            session_start();
            $_SESSION['user_id'] = $user_id;
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
    <script src="https://kit.fontawesome.com/8eb4f0837a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">
    <title>로그인</title>
</head>

<body>
    <div class="main">
        <div class="main-logo">
            <h2>
                <a href="#">NAVER</a>
            </h2>
        </div>
        <div class="main-login">
            <div class="main-login__link">
                <a href="#">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <h3>ID 로그인</h3>
                </a>
            </div>
            <div class="main-login__box">
                <form action="login.php" method="post">
                    <input class="login-input" type="text" name="user_id" id="" placeholder="아이디">
                    <input class="login-input" type="password" placeholder="비밀번호" name="user_password" id="">
                    <?php
                    if ($wu == 1) {
                        print "<div class='red'>존재하지 않는 아이디입니다.</div>";
                    }
                    if ($wp == 1) {
                        print "<div class='red'>비밀번호가 틀렸습니다.</div>";
                    }
                    ?>
                    <input type="submit" value="로그인">
                </form>
            </div>
        </div>
        <div class="sign_box">
            <div>
                <a href="#">비밀번호 찾기</a>
            </div>
            <div>
                <a href="#">아이디 찾기</a>
            </div>

            <div>
                <a href="sign_up.php">회원가입</a>
            </div>
        </div>
    </div>
</body>

</html>