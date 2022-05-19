<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join</title>
</head>
<body>
    <h1>Join</h1>
    <a href="login.php">Login</a>    
    <form action="join_proc.php" method="post">
        <div><input type="text" name="uid" placeholder="id"></div>
        <div><input type="password" name="upw" placeholder="password"></div>
        <div><input type="password" name="confirm_upw" placeholder="confirm_password"></div>
        <div><input type="text" name="nm" placeholder="name"></div>
        <div>gender: <label>female</label><input type="radio" name="gender" value="0" checked></label>
                     <label>male</label><input type="radio" name="gender" value="1"></label>
        </div>
        <div>
            <input type="submit" value="submit">
            <input type="reset" value="reset">
        </div>
    </form>
</body>
</html>