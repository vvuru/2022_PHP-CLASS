<?php
$low = $_POST['low'];
$fruit = array(
    "사과" => 10,
    "배" => 20,
    "복숭아" => 30,
    "수박" => 40,
    "감" => 50,
);
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
    <?php
    print "         가격이" . $low . "원 이하인 과일의 목록입니다.";
    ?>
    <!-- print 안에 (") 를 사       용하고 싶다면 \로 감싸줘야 한다.-->
    <table border="1">
        <tr>
            <th>이름</th>
            <th>가격</th>
            < /tr>

                <?php
                /* php for each 문
                value만 가져오는 경우 : foreach($array as $value)
                key와 value를 가져오는 경우 : foreach($array as $key => value)
    */
                foreach ($fruit as $name => $price) {
                    if ($price <= $low) {
                        print "<tr><td>" . $name . "</td><td>" . $price . "</td></tr>";
                    }
                }
                ?>
    </table>
</body>

</html>