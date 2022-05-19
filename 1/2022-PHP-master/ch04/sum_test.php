<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $num = $_POST['num'];
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="num" value="<?php echo $num; ?>">
        <input type="submit" value="입력">
    </form>
    <div>
        1부터 입력한 값을 더한 값은
        <?php
        for ($i = 0; $i <= $num; $i++) {
            $sum += $i;
        }
        print $sum;
        ?>
        입니다.
    </div>
    <div>
        <form method="" action="">
            <input type="number" name="num" id="num">
            <input type="submit" value="입력">
        </form>
    </div>
    <div>
        <div class="answer">

        </div>
    </div>
    <script>
        const num = Document.querySelector("#num").value;
    </script>
</body>

</html>