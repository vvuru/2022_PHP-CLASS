<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호변경</title>
    <style>
    .Title__top--name {
            font-size: 17px;
            font-weight: bold;
            color: #fff;
            background-color: #0aaaaa;
            text-align: center;
            line-height: 50px;
        }
    </style>
</head>
<body>
    <div class="Title">
        <div class="Title__top--name">비밀번호변경</div>
    </div>
    <form action="chg_pw_proc.php" method="post">
        <div>
            <a>현재 비밀번호</a>
            <input type="password" placeholder="현재 비밀번호를 입력하세요.">
        </div>
        <!--현재 비밀번호 : db에 현재 등록된 데이터와 일치하는지 확인-->
        <div>
            <a>새 비밀번호</a>
            <input type="password" placeholder="새 비밀번호를 입력하세요.">
        </div>
        <!--새 비밀번호 : 변경할 비밀번호 입력-->
        <div>
            <a>새 비밀번호 확인</a>
            <input type="password" placeholder="새 비밀번호를 재입력하세요.">
        </div>
        <!--새 비밀번호 확인 : 위에 입력한 데이터와 일치하는지 확인-->
        <div>
            <input type="submit" value="저장하기">
            <!--전부 일치할 시 동작해야함. 불일치 항목 js팝업? 혹은 하나라도 불일치시 팝업?-->
            <input type="button" value="취소하기" onClick="location.href='myprofile.php'">
            <!-- myprofile.php페이지로 이동 -->
        </div>
        <!--가운데 정렬-->
    </form>
</body>
</html>