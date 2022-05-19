<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>
<body>
    <h1>SignUp</h1>
    <a href="login.php">Login</a>
    <form action="join_proc.php" method="post">
        <div><input type="text" name="uid" placeholder="ID"></div>
        <div><input type="password" name="upw" placeholder="PASSWORD"></div>
        <div><input type="password" name="confirm_upw" placeholder="CONFIRM PASSWORD"></div>
        <div><input type="text" name="nm" placeholder="NAME"></div>
        <div>Gender = <label>FEMALE<input type="radio" name="gender" value="0" checked></label>
                    <label>MALE<input type="radio" name="gender" value="1"></label>
        </div>
        <div>
            <input type="submit" value="SignUp">
            <input type="reset" value="Reset">
        </div>
    </form>
</body>
</html>