<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9abf43b298.js" crossorigin="anonymous"></script>
    <title>ATM 익명질문</title>
    <style>
        .tab_menu{position:relative;}
        .tab_menu .list{overflow:hidden;}
        .tab_menu .list li{float:left; margin-right:14px;}
        .tab_menu .list .btn{font-size:13px;}
        .tab_menu .list .cont{display:none; position:absolute; background:#555; color:#fff; text-align:center; width:250px; height:100px; line-height:100px;}
        .tab_menu .list li.is_on .btn{font-weight:bold; color:green;}
        .tab_menu .list li.is_on .cont{display:block;}
    </style>
</head>
<body>
    <div id="container">
        <header>
            <div>
                <?php
                    $session_img=$_SESSION["login_user"]["profile_img"];
                    $profile_img=$session_img==null 
                    ? "basic.jpg" 
                    : $_SESSION["login_user"]["i_user"]."/".$session_img;
                ?>
                <div class="circular__img wh40">
                    <img src="/atm/img/profile/<?=$profile_img?>">
                </div>
                <?=isset($_SESSION["login_user"]) ? "<div>".$nm."</div><br>".$intro : "익명"?>
                <?php if(isset($_SESSION["login_user"])) { ?>
                    <a href="logout.php">로그아웃</a>
                <?php } else { ?>
                    <a href="join.php">회원가입</a>
                    <a href="login.php">로그인</a>
                <?php } ?>
            </div>
        </header>
        <main>
            <div class="main1">
                <div>
                    <?= "https://asktm.kr/$i_user" ?>
                    <a href="#"><img src="https://asked.kr/img/fb_share.png" class="shareimgfir"></a>
                    <a href="#"><img src="https://asked.kr/img/tw_share.png" class="shareimg"></a>
                    <a href="#"><img src="https://asked.kr/img/kt_share.png" class="shareimg"></a>
                    <a href="#"><img src="https://asked.kr/img/url_share.png" class="shareimg"></a>
                </div>          
                <form action="write_proc.php" method="post">    
                    <div>
                        <textarea name="question" placeholder="질문을 입력해주세요."></textarea>
                        <input type="submit" value="질문하기">
                    </div>
                </form>
            </div>
            <div class="main2">
                <div class="tab_menu">
                    <ul class="list">
                        <li class="is_on">
                            <a href="#tab1" class="btn">답변완료</a> 
                            <div id="tab1" class="cont">Tab Content1</div>
                        </li>
                        <li>
                            <a href="#tab2" class="btn">새질문</a> 
                            <div id="tab2" class="cont">Tab Content2</div>
                        </li>
                     </ul>
                 </div>
            </div>
        </main>
        <footer>
            <a href="main.php"><i class="fa-solid fa-house"></i><br>내질문함<br></a>
            <a href="myprofile.php"><i class="fa-solid fa-user"></i><br>프로필설정<br></a>
            <a href="new_noti.php"><i class="fa-solid fa-bell"></i><br>알림<br></a>
        </footer>
    </div>
    <script>
        const tabList = document.querySelectorAll('.tab_menu .list li');
        
        for(var i = 0; i < tabList.length; i++){
        tabList[i].querySelector('.btn').addEventListener('click', function(e){
            e.preventDefault();
            for(var j = 0; j < tabList.length; j++){
            tabList[j].classList.remove('is_on');
            }
            this.parentNode.classList.add('is_on');
        });
        }
  </script>
</body>
</html>