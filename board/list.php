<?php
    include_once "db.php";

    $conn = get_conn();
    $sql = "SELECT i_board, title, create_at FROM t_board ORDER BY i_board DESC";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>리스트</h1>
    <table>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성일시</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result))
            {
                $i_board = $row['i_board'];
                $title = $row['title'];
                $create_at = $row['create_at'];
                print "<tr>";
                print "<td>${i_board}</td>";
                print "<td>${title}</td>";
                print "<td>${create_at}</td>";
                print "</tr>";
            }
            mysqli_close{$conn};
        ?>
    </table>
</body>
</html>