<?php
// 이름과 키를 표로 만들기
$array = array(
    "Hong" => 182.2,
    "Hwang" => 180.4,
    "Kim" => 176.3,
    "Park" => 174.1
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table tr th,
        table tr td {
            border: 1px solid #000;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>이름</th>
            <th>키</th>
        </tr>
        <?php
        foreach ($array as $key => $val) {
            print "<tr>";
            print "<td> $key </td>";
            print "<td> $val </td>";
            print "</tr>";
        }
        ?>
    </table>
</body>

</html>