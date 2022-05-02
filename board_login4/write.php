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
        <div><input type="text" name="title" placeholder="title"></div>
        <div><textarea name="ctnt" placeholder="content"></textarea></div>
        <div>
            <input type="submit" value="write">
            <input type="reset" value="reset">
        </div>
    </form>
</body>
</html>