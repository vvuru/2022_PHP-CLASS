<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login_proc.php" method="post">
        <div><input type="text" name="uid" placeholder="ID"></div>
        <div><input type="password" name="upw" placeholder="PASSWORD"></div>
        <div><input type="submit" value="Login"></div>
    </form>
    <a href="join.php">SignUp</a>
</body>
</html>