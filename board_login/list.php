<?php
    session_start();
    if(isset($_SESSION["login_user"]))
    {
        $login_user=$_SESSION["login_user"];
        $nm=$login_user["nm"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <title>List</title>
</head>
<body>
<div id="container">
    <header>
    <?=isset($_SESSION["login_user"]) ? $nm . "! WELCOME~" : "" ?>
        <div>
            <a href="list.php">List</a>
            <a href="write.php">Write</a>
            <?=isset($_SESSION["login_user"]) ? "<a href='logout.php'>Logout</a>" : "<a href='login.php'>Login</a>" ?>        
        </div>
    </header>  
    <main>
    <h1>List</h1>
    </main>
</div>
</body>
</html>
