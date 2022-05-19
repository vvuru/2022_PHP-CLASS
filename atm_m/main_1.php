<?php
    include_once "db/db_board.php";

    session_start();
    $login_user = $_SESSION["login_user"];

    // $list = sel_board_list($param);

    $row_count=4;
    $page=$_GET["page"];
    if(!$page)
    {
      $page=1;
    }
    else
    {
      $page=intval($page);
    }
    $param=
    [
      "row_count"=>$row_count,
      "start_idx"=>($page-1)*$row_count
    ];
    $list_2=sel_question_list($param);

    $paging_count=sel_paging_count($param);

    $quesion=$_GET["question"];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main_1.css">
  <title> <?=$login_user["i_user"]?> - ATM 자유로운 질문답변!</title>
</head>

<body>
  <div class="container">
    <header>
      <div class="a_header">
        <div class="a_header_1">
          <div class="a_header_profile">
            <?php
              $session_img=$_SESSION["login_user"]["profile_img"];
              $profile_img= $session_img==null ? "atm_basic.png" : $_SESSION["login_user"]["i_user"]."/".$session_img;
            ?>
            <img src="img/profile/<?=$profile_img?>" class="profile">
            <div class="profile_nm"><?=$login_user["nm"]?></div>
            <div class="profile_intro"><?=$login_user["intro"]?></div>
          </div>
          <nav class="a_header_menu">
          <?php if(isset($_SESSION["login_user"])) { ?>
            <a href="logout.php">로그아웃</a>
          <?php } else { ?>
            <a href="login.php">로그인</a>
            <a href="join.php">회원가입</a>
          <?php } ?>   
          </nav>
        </div>
      </div>
    </header>
    <main>
      <div class="a_main">
        <div class="a_main_write">
          <div class="a_main_write_1">
            <span class="a_main_write_1_url">localhost/atm_m/main_1.php?i_user=<?= isset($login_user["i_user"]) ? $login_user["i_user"] : "" ?></span>
            <span class="abc">
              <a href="#"><img src="img/fb_share.png" class="shareimg"></a>
              <a href="#"><img src="img/tw_share.png" class="shareimg"></a>
              <a href="#"><img src="img/kt_share.png" class="shareimg"></a>
              <a href="#"><img src="img/url_share.png" class="shareimg"></a>
            </span>
          </div>
          <div class="a_main_write_2">
            <form action="write_proc.php" method="post">
              <div class="a_main_write_2_txt"><textarea name="question" placeholder="질문을 입력해주세요."></textarea></div>
              <div class="a_main_write_2_button">
                  <input type="submit" value="질문하기">
                  <input type="reset" value="초기화">
              </div>
            </form>
          </div>
        </div>
        <div class="main_list">
          <!-- 리스트 뿌리기 -->
          <div class="tabs">
            <input id="all" type="radio" name="tab_item" checked>
            <label class="tab_item" for="all">답변완료</label>
            <input id="programming" type="radio" name="tab_item">
            <label class="tab_item" for="programming">새질문</label>

            <div class="tab_content" id="all_content">
              <div class="tab_content_asked">
                <?php foreach($list as $item) { ?>
                <div class="tab_content_question">
                  <a href="detail.php">
                  <img src="img/profile/atm_basic.png" class="main_list_img">
                  <?=$item["question"]?>
                  </a>
                </div>
                <div>
                  <div><?=$item["profile_img"]?></div>
                  <div><?=$item["nm"]?></div>
                  <div><?=$item["ans_at"]?></div>
                  <div><?=$item["answer"]?></div>
                  <?php } ?>
                </div>
              </div>
            </div> <!--tab_content-->
            <div class="tab_content" id="programming_content">
            <a href="answer.php?question=<?=$item_2["question"]?>">  
            <table>
                <?php foreach($list_2 as $item_2) { ?>
                  <tr>
                    <td><img src="img/profile/atm_basic.png" class="main_list_img"></td>
                    <td><?=$item_2["question"]?></td>
                    <td><?=$item_2["que_at"]?></td>
                    <td><?php if(isset($_SESSION["login_user"])) { ?>
                      <button onclick="isDel();"><img src="img/del.png"></button>
                    <?php } ?></td>
                  </tr>
                </a>
                <?php } ?>
              </table>
              <div>
                <?php for($i=1; $i<=$paging_count; $i++) { ?>
                    <span class="<?=$i===$page ? "pageSelected" : ""?>">
                        <a href="main_1.php?page=<?=$i?>"><?=$i?></a>
                    </span>  
                <?php } ?>
            </div>
            </div>
          </div> <!--tabs-->
        </div> <!--main_list-->
      </div> <!--a_main-->
    </main>
    <footer>
      <div class="a_footer">
        <div class="a_footer_answer"><a href="main_1.php"><img src="img/answer.png" class="a_footer_answer_img"></a></div>
        <div class="a_footer_profile"><a href="myprofile.php"><img src="img/profile.png" class="a_footer_profile_img"></a></div>
        <div class="a_footer_notice"><a href="new_noti.php"><img src="img/notice.png" class="a_footer_notice_img"></a></div>
        <?php if(!isset($_SESSION["login_user"])) { ?>
        <div class="a_footer_login">로그인 후 사용 가능합니다.</div>
        <?php } ?>
      </div>
    </footer>
  </div>
  <script>
        function isDel() {
            console.log('isDel Launched!');
            if(confirm('삭제하시겠습니까?')) {
                location.href = "del_question.php?question=<?=$question?>";
            }
        }
    </script>
</body>
</html>