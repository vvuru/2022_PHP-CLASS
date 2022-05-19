<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>과일검색</title>
</head>
<body>
    <!-- get 방식은 주소에 key와 value 값이 보여진다.

        post 방식은 주소에 key와 value 값이 안보여진다.
        ex) 로그인 페이지와 같은 보안이 필요한 방식
    -->
    <form name="fruit" action="./fruitdata.php" method="post">
        원하는 가격을 입력 하십시오 <br>
        가격 : <input type="text" name="low"><br>
        <input type="submit" value="찾기">
    </form>
</body>
</html>