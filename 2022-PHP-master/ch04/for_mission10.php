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

        table tr td {
            padding: 5px 20px;
            border: 1px solid #000;
        }
    </style>
</head>

<body>
    <?php
    $val = rand(3, 10);
    print "val : $val <br>";

    /* 3이면 테이블 만들고 안에 숫자 채워주기 */
    ?>
    <table>
        <?php
        $num = 1;
        for ($i = 0; $i < $val; $i++) {
            print "<tr>";
            for ($z = 1; $z <= $val; $z++) {
                print "<td>" . $num++ . "</td>";
                // print "<td>" . $z + $val * $i . "</td>";
            }
            print "</tr>";
        }
        ?>
    </table>
</body>

</html>