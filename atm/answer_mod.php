<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>수정하기</title>
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
        <div class="Title__top--name">수정하기</div>
    </div>
    <form action="answer_mod_proc.php" method="post">
        <div>
            <a>질문자 프사/</a>
            <!-- 익명일 시 기본프사, 로그인 후 프로필 공개 질문시 해당 회원 프사 띄워야하나 보류기능이므로 기본프사 이미지 삽입 -->
            <a>질문내용·/</a>
            <!-- db t_board 테이블의 해당 row question 컬럼 데이터 가져오기 -->
            <a>질문 작성시간</a>
            <!-- db t_board 테이블의 해당 row que_at 컬럼 SNS 방식?으로 띄우기 -->
        </div>
        <!-- css 상하 가운데정렬하고 좌우 간격줘서 좌측정렬 -->
        <!-- 이 부분 detail.php와 코드 동일함 -->
        <div>
        <div>
            <textarea name="" placeholder="성희롱 및 욕설은 처벌대상입니다. 최대 1000자까지 작성 가능합니다.">기존 답변내용</textarea>
            <!-- db t_board 테이블의 해당 row answer 컬럼 데이터 가져오기 -->
        </div>
        <div>
            <input type="submit" value="수정하기">
            <!-- answer_mod_proc.php 실행됨 -->
            <input type="button" value="취소하기" onClick="location.href='detail.php'">
            <!-- detail.php 페이지로 돌아감 -->
        </div>
    </form>
</body>
</html>