<?php
    include_once "db/db_board.php";

    session_start();
    $login_user = $_SESSION["login_user"];

    $list = sel_board_list($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
            padding: 0; margin: 0;
        }
        html {
            background-color: #eee;
        }
        .Title__top--name {
            font-size: 17px;
            font-weight: bold;
            color: #fff;
            background-color: #0aaaaa;
            text-align: center;
            line-height: 50px;
        }
        .Title {
            background-color: #fafafa;
            width: 100%;
            height: 50px;
            margin: 0;
            /* position: fixed; */
            z-index: 10;
        }
        
        .noti_list_img {
            max-width: 50px;
            max-height: 50px;
        }
        .container .noti_list table
        {
            color: #666666;
            width: 100%;
        }
        .container .noti_list tr {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            padding: 10px;
            margin: 5px;
        }
        .container .noti_list td {
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="Title">
            <div class="Title__top--name">알림</div>
        </div>
        <div class="noti_list">
          <!-- 리스트 뿌리기 -->
          <table>
              <tbody>
              <?php foreach($list as $item) { ?> <!-- 배열 as 값 -->
                  <tr style="cursor:pointer;" onclick="location.href='detail.php?i_board=<?=$item['i_board']?>'">
                    <td>
                      <img src="img/profile/atm_basic.png" class="noti_list_img">&nbsp;익명에게
                      "<?php
                            $subject = $item["question"];
                            $str = mb_strimwidth($item["question"],0,13,"...","utf-8");
                            echo $str;
                        ?>" 질문을 받았습니다. <br>
                        &nbsp;1시간전
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
          </table>
        </div>
        <footer class="a_footer">
            <div class="a_footer_answer"><a href="main_1.php"><img src="img/answer.png" class="a_footer_answer_img"></a></div>
            <div class="a_footer_profile"><a href="myprofile.php"><img src="img/profile.png" class="a_footer_profile_img"></a></div>
            <div class="a_footer_notice"><a href="new_noti.php"><img src="img/notice.png" class="a_footer_notice_img"></a></div>
        </footer>
    </div>
</body>
</html>