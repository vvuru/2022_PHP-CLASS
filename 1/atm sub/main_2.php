<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main2</title>
    <style>
        .tab_menu{position:relative;}
        .tab_menu .list{overflow-y:auto; overflow-x:hidden;}
        .tab_menu .list li{float:left; margin-right:14px;}
        .tab_menu .list .btn{font-size:50px;}
        .tab_menu .list .cont{display:none; position:fixed; background:#eee; color:#666666; }
        .tab_menu .list li.is_on .btn{font-weight:bold; background-color:#0aaaaa; color:#fff;}
        .tab_menu .list li.is_on .cont{display:block;}

        ul{list-style:none;}

        body{margin:0;}
        table{width:100vw; height:100vh;}
    </style>
</head>
<body>
<div class="main2">
                <div class="tab_menu">
                    <ul class="list">
                        <li class="is_on">
                            <a href="#tab1" class="btn">답변완료 5</a>
                            <a href="detail.php"> 
                                <div id="tab1" class="cont">
                                    <table>
                                        
                                            <td><img src="/atm/img/profile/atm_basic.png"width="50px"; height="50px";>안녕하세요?<br></td>
                                            <td><img src="/atm/img/profile/atm_basic.png"width="50px"; height="50px";>홍길동<br> 10시간전<br> 안녕하세요 답변입니다</td>;
                                            <td><a href="del.php"><img src="img/del.png" width="50px"; height="50px";></a></td>
                                       
                                    </table>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#tab2" class="btn">새질문 10</a> 
                            <a href="answer.php">
                                <div id="tab2" class="cont">
                                    <table>
                                        
                                            <td><img src="/atm/img/profile/atm_basic.png"width="50px"; height="50px";></td>
                                            <td>안녕하세요?</td>;
                                            <td>10시간전</td>
                                            <td><a href="del.php"><img src="img/del.png" width="50px"; height="50px";></a></td>
                                        
                                    </table>
                                </div>
                            </a>
                        </li>
                     </ul>
                 </div>
            </div>
        </main>
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