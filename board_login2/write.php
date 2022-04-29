<?php
    session_start();
    $login_user=$_SESSION["login_user"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write</title>
</head>
<body>
    <h1>Write</h1>
    <form action="write_proc.php" method="post">
        <div><input type="text" name="title" placeholder="TITLE"></div>
        <div><textarea name="ctnt" placeholder="CONTENT"></textarea></div>
        <div>
            <input type="submit" value="Write">
            <input type="reset" value="Reset">
        </div>
    </form>
</body>
</html>