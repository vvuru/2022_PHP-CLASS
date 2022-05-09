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
    <p>간편하게 회원가입을 해보세요.<br> 친구들에게 익명으로 질문을 받을 수 있어요!</p>
    <form action="join_proc.php" method="post">
        <div><input type="text" name="nm" placeholder="이름">
             <input type="text" name="email" placeholder="이메일">
        </div>   
        <div><input type="text" name="uid" placeholder="아이디"></div>
        <div><input type="password" name="upw" placeholder="비밀번호"></div>
        <div>
            <input type="submit" value="회원가입">
            <input type="reset" value="Reset">
        </div>  
    </form>
    <div>계정이 있다면 <a href="login.php">로그인</a>하세요</div>
</body>
</html>