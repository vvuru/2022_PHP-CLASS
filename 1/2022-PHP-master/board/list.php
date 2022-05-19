<?php
include_once "db.php";
// CRUD 에서 READ만 배열로 넘어오고 나머지는 INT로 들어온다.
$conn = get_conn();
// 필요한 정보만 가져와야 쓸데없는 데이터 낭비가 없다.
$sql = "SELECT i_board, title, create_at FROM t_board ORDER BY i_board DESC";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
</head>

<body>
    <h1>리스트</h1>
    <a href="write.php">
        <button>글쓰기</button>
    </a>
    <table>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성일시</th>
        </tr>
        <?php
        // row에 배열로 들어간다.
        while ($row = mysqli_fetch_assoc($result)) {
            $i_board = $row['i_board'];
            $title = $row['title'];
            $create_at = $row['create_at'];
            print "<tr>";
            print "<td>${i_board}</td>";
            // php파일을 여러개를 만들순 없으니ㅣ
            print "<td><a href='detail.php?i_board=${i_board}'>${title}</a></td>";
            print "<td>${create_at}</td>";
            print "</tr>";
        }
        ?>
    </table>
</body>

</html>