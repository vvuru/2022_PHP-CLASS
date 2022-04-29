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
                        <tr>
                            <td><?=$item["i_board"]?></td>
                            <td><a href="detail.php?i_board=<?=$item["i_board"]?>"><?=$item["title"]?></a></td>
                            <td><?=$item["nm"]?></td>
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

