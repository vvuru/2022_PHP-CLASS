<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* .gugu-box {
            display: flex;
            flex-direction: column;
        }

        .gugu {
            border: 1px solid #000;
            padding: 10px;
            margin: 5px;
        } */
    </style>
    <title>Document</title>
</head>

<body>
    <div class="gugu-box">
        <?php
        $space = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        for ($i = 1; $i < 10; $i++) {
            echo "<div class='gugu'>";
            for ($z = 2; $z < 10; $z++) {
                $result = $z * $i;
                if ($result < 10) {
                    print "&nbsp;";
                }
                print "$z * $i = ${result} $space";
            }
            print "<br></div>";
        }
        ?>
    </div>
</body>

</html>