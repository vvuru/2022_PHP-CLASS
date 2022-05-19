<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .gugu-box {
            display: flex;
        }

        .gugu {
            border: 1px solid #000;
            text-align: center;
            padding: 10px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <div class="gugu-box">
        <?php
        /*
    구구단 1~9단
    */
        for ($i = 2; $i < 10; $i++) {
            echo "<div class='gugu'>구구단 ${i}단 <br>";
            for ($z = 1; $z < 10; $z++) {
                print "$i * $z = " . $i * $z . "<br>";
            }
            print "---------------<br></div>";
        } ?>
    </div>
</body>

</html>