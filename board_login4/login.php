<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asked 익명질문</title>
</head>
<body>
    <h1>asked</h1>
    <p>친구들에게 익명으로 질문을 받을 수 있습니다.<br> 작성한 사람은 비밀! 익명입니다.</p>
    <form action="login_proc.php" method="post">
        <div><input type="text" name="uid" placeholder="아이디"></div>
        <div><input type="password" name="upw" placeholder="비밀번호"></div>
        <div><input type="submit" value="로그인"></div>
    </form>
    <a href="join.php">회원가입</a>
</body>
</html>