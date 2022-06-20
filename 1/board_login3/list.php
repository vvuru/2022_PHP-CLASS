<?php
    include_once "db_board.php";
    session_start();

    $nm="";
    $page=$_GET["page"];
    if(!$page) {
        $page=1;
    } else {
        $page=intval($page);
    }
    print "page: ".$page;
    
    if(isset($_SESSION["login_user"])) {
        $login_user=$_SESSION["login_user"];
        $nm=$login_user["nm"];
    }
    $row_count=20;
    $param=[
        "row_count"=>$row_count,
        "start_idx"=>($page-1)*$row_count
    ];
    $paging_count=sel_paging_count($param);
    $list=sel_board_list($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    <div id="container">
        <header>
            <?=isset($_SESSION["login_user"]) ? "<div>".$nm."~ Welcome!!</div>" : ""?>
            <div>
                <a href="list.php">List</a>
                <?php if(isset($_SESSION["login_user"])) { ?>
                    <a href="write.php">Write</a>
                    <a href="logout.php">Logout</a>
                    <a href="profile.php">
                        프로필
                        <?php
                            $session_img = $_SESSION["login_user"]["profile_img"];
                            $profile_img = $session_img == null ? "basic.jpg" : $_SESSION["login_user"]["i_user"] . "/" .$session_img; 
                        ?>
                        <div class="circular__img wh40">
                            <img src="/board_login3/img/profile/<?=$profile_img?>" width="50">
                        </div>
                    </a>
                <?php } else { ?>
                    <a href="login.php">Login</a>
                <?php } ?>
            </div>
        </header>
        <main>
            <h1>List</h1>
            <table>
                <thead>
                    <tr>
                        <th>Number</th>
                        <th>Title</th>
                        <th>Writer</th>
                        <th>Created_at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($list as $item) { ?>
                        <?php
                        $row_profile_img=$item["profile_img"] == null ? "basic.jpg" : $item["i_user"]."/".$item["profile_img"];
                        ?>
                        <tr>
                            <td><?=$item["i_board"]?></td>
                            <td><a href="detail.php?i_board=<?=$item["i_board"]?>"><?=$item["title"]?></a></td>
                            <td>
                                <?=$item["nm"]?>
                                <div class="circular__img wh40">
                                    <img src="/board_login3/img/profile/<?=$row_profile_img?>" width="50">
                                </div>
                            </td>
                            <td><?=$item["created_at"]?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div>
                <?php for($i=1; $i<=$paging_count; $i++) { ?>
                    <span class="<?=$i===$page ? "pageSelected" : ""?>">
                        <a href="list.php?page=<?=$i?>"><?=$i?></a>
                    </span>  
                <?php } ?>
            </div>
        </main>
    </div>
</body>
</html>

