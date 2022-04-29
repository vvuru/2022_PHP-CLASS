<?php
    include_once "db_board.php";
    session_start();
    if(isset($_SESSION["login_user"])){
        $login_user=$_SESSION["login_user"];
    }
    $i_board=$_GET["i_board"];
    $param=[
        "i_board"=>$i_board,
    ];
    $item=sel_board($param);
    $next_board=sel_next_board($param);
    $prev_board=sel_prev_board($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$item["title"]?></title>
</head>
<body>
    <div><a href="list.php">List</a></div>
    <div>
        <?php if($next_board!==0) { ?> 
            <a href="detail.php?i_board=<?=$next_board?>"><button>Next</button></a>
        <?php } ?>

        <?php if($prev_board!==0) { ?> 
            <a href="detail.php?i_board=<?=$prev_board?>"><button>Previous</button></a>
        <?php } ?>
    </div>
    <?php if(isset($_SESSION["login_user"]) && $login_user["i_user"]===$item["i_user"]) { ?>
        <div>
            <a href="mod.php?i_board=<?=$i_board?>"><button>Modify</button></a>
            <button onclick="isDel();">Delete</button>
        </div>
    <?php } ?>
    <div>Title: <?=$item["title"]?></div>
    <div>Writer: <?=$item["nm"]?></div>
    <div>Created_at: <?=$item["created_at"]?></div>
    <div><?=$item["ctnt"]?></div>
    <script>
        function isDel() {
            console.log('isDel Launched!');
            if(confirm('Really?')) {
                location.href = "del.php?i_board=<?=$i_board?>";
            }
        }
    </script>
</body>
</html>