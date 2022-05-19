<?php   
    include_once "db/db_board.php";

    session_start();
    $nm = "";

    $page = 1;
    if(isset($_GET["page"])) {       
        $page = intval($_GET["page"]);
    }     
    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
    }
    $row_count = 20;
    $param = [
        "row_count" => $row_count,
        "start_idx" => ($page - 1) * $row_count
    ];
    $paging_count = sel_paging_count($param);
    $list = sel_board_list($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>프로필설정</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/myprofile.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <div class="Title">
        <div class="Title__top--name">프로필설정</div>
    </div>
    <form action="myprofile_proc.php" method="post" enctype="multipart/form-data">
        <div class="Profile">
            <div class="Profile__img"><img src="img/profile/atm_basic.png"></div>
            <!--
                db t_user 해당 로우의 profile_img 컬럼 값 불러오기
                css 상하좌우 마진 줘서 가운데정렬, 이미지 사이즈 조정
            -->
            <div class="Profile__bt"><input type="file" name="img" accept="image/*"></div>
            <!--
                선택시 이미지 파일 불러와서 class="Profile__img"에 띄우기
                css 프로필사진 우측 하단에 겹쳐 띄우기, 버튼 스타일 없애기, 선택된 파일 없음 문구 없애기.
            -->
        </div>
        <div class="line">   
            <a class="tc__un">이메일</a>
            <a class="pr__un">회원이메일</a>
            <!--db t_user 해당 row의 email 값 불러오기-->
        </div>
        <div class="line">
            <a class="tc__un">주&nbsp;&nbsp;&nbsp;소</a>
            <a class="pr__un">http://asktm.kr/$i_user</a>
            <!--$i_user 부분에 db t_user 해당 row의 i_user 값 불러오기-->
        </div>
        <div class="line">   
            <a class="tc__ch">닉네임</a>
            <a class="pr__ch"><input type="text" value="회원 닉네임" placeholder="닉네임을 작성해주세요."></a>
            <!--디폴트 value값 db t_user 해당 row의 nm 값, 수정가능. 하단 저장버튼 클릭시 입력되어있는 값으로 db 해당 row 값 수정됨.-->
            <!-- css 모바일 크기로 볼 시 줄 밀림, 위치고정 후 줄바뀜시 해당 위치에서 세로길이 늘어나게끔 -->
        </div>
        <div class="line"> 
            <a class="tc__ch">소&nbsp;&nbsp;&nbsp;개</a>
            <a class="pr__ch"><input type="text" value="" placeholder="소개글을 작성해주세요."></a>
            <!--디폴트 value값 db t_user 해당 row의 intro 값, 수정가능. 하단 저장버튼 클릭시 입력되어있는 값으로 db 해당 row 값 수정됨.-->
        </div>
        <div class="line__pi">개인정보</div>
        <div class="line">  
            <a class="tc__ch">비밀번호 변경</a>
            <a class="pr__bt"><input type="button" src="img/go.png" onClick="location.href='chg_pw.php'"></a>
            <!--css 인풋 타입 이미지로 변경시 myprofile_proc 실행됨, 백그라운드 이미지로 이미지 우측정렬 구현 필요-->
        </div>
        <div class="line">  
            <a class="tc__ch">회원탈퇴</a>
            <a class="pr__bt"><input type="button" src="img/go.png" onClick="location.href='delete_login.php'"></a>
        </div>
        <div class="save__bt"><input type="submit" value="저장하기"></div>
        <!-- css 모바일 크기로 볼 시 버튼 푸터랑 겹침, 띄워주기 -->
    </form>
    <footer class="a_footer">
        <div class="a_footer_answer"><a href="main_1.php"><img src="img/answer.png" class="a_footer_answer_img"></a></div>
        <div class="a_footer_profile"><a href="myprofile.php"><img src="img/profile.png" class="a_footer_profile_img"></a></div>
        <div class="a_footer_notice"><a href="new_noti.php"><img src="img/notice.png" class="a_footer_notice_img"></a></div>
    </footer>
    </div>
</body>
</html>