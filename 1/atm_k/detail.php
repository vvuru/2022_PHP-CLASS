<?php
        include_once "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상세보기</title>
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
        <div class="Title__top--name">상세보기</div>
    </div>
    <div>
        <a>질문자 프사/</a>
        <!-- 익명일 시 기본프사, 로그인 후 프로필 공개 질문시 해당 회원 프사 띄워야하나 보류기능이므로 기본프사 이미지 삽입 -->
        <a>질문내용·/</a>
        <!-- db t_board 테이블의 해당 row question 컬럼 데이터 가져오기 -->
        <a>질문 작성시간</a>
        <!-- db t_board 테이블의 해당 row que_at 컬럼 SNS 방식?으로 띄우기 -->
    </div>
    <!-- css 상하 가운데정렬하고 좌우 간격줘서 좌측정렬 -->
    <label>
        <div>
            <a>답변자 프사/</a>
            <!-- t_board 테이블과 t_user테이블 i_user 값으로 묶어줘서 t_user 테이블의 해당 row profile_img 컬럼 값 가져오기 -->
            <!-- css 간격줘서 좌측에 -->
            <a>답변자 닉네임/</a>
            <!-- t_board 테이블과 t_user테이블 i_user 값으로 묶어줘서 t_user 테이블의 해당 row nm 컬럼 값 가져오기 -->
            <!-- css 프사 공간만큼 띄우고 좌상단 -->
            <a>답변 작성시간</a>
            <!-- db t_board 테이블의 해당 row ans_at 컬럼 SNS 방식?으로 띄우기 -->
            <!-- css 닉네임과 같은 간격 띄우고 좌 하단 -->
        </div>
        <div>답변내용</div>
        <!-- db t_board 테이블의 해당 row answer 컬럼 데이터 가져오기 -->
        <!-- css 프사공간만큼 띄우고 간격줘서 좌측정렬 -->
    </label>
    <div>
        <a href="answer_mod.php"><button>수정하기</button></a>
        <!-- answer_mod.php로 이동 -->
        <!-- css 테두리 라운딩, 글씨 흰색 -->
        <a href="del.php"><button>삭제하기</button></a>
        <!-- del.php 작동전 js로 삭제할건지? 팝업창. 확인 후 바로 삭제되도록. -->
        <button id="backBt" onclick="history.back()">돌아가기</button>
        <!-- 직전 페이지로 이동 -->
    </div>
    <!-- css 가운데 정렬 -->
</body>
</html>