<?php
include_once 'db.php';
$i_board = $_GET['i_board'];

$conn = get_conn();
// where 절에 pk가 들어가 있기 때문에 select문에 1개또는 0개만 들어온다.
$sql = "SELECT * FROM t_board WHERE i_board=$i_board";

$result = mysqli_query($conn, $sql);
mysqli_close($conn);
if ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $created_at = $row['created_at'];
    $mod_at = $row['mod_at'];
    $ctnt = $row['ctnt'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글내용</title>
</head>

<body>
    <h1>글내용</h1>
    <a href="list.php"><button>리스트</button></a>
    <a href="mod.php?i_board=<?= $i_board ?>"><button>수정</button></a>
    <a href="del_proc.php?i_board=<?= $i_board ?>"><button>삭제</button></a>
    <div>제목 : <?= $title ?></div>
    <div>작성일시 : <?= $created_at ?></div>
    <?php
    if ($mod_at !== $created_at) {
        print "<div>수정일시 : $mod_at</div>";
    }
    ?>
    <div>내용 : <?= $ctnt ?></div>
</body>

</html>