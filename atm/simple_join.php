<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM 익명질문</title>
</head>
<body>
    <h1>ATM</h1>
    <h3>ask to me</h3>
    <p>간편하게 회원가입을 해보세요. <br>
       친구들에게 익명으로 질문을 받을 수 있어요!</p>
    <form action="simple_join_proc.php" method="post">
        <div><input type="email" name="email" placeholder="이메일"></div>
        <div><input type="password" name="upw" placeholder="비밀번호"></div>
        <div><input type="submit" value="회원가입"></div>
    </form>
    <p>계정이 있다면 <a href="login.php">로그인</a> 하세요</p>
</body>
</html>