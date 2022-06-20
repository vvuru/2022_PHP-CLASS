<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>Profile image display</div>
    <form action="profile_proc.php" method="post" enctype="multipart/form-data">
        <div><label>image: <input type="file" name="img" accept="image/*"></label></div>
        <div><input type="submit" value="image upload"></div>
    </form>
</body>
</html>