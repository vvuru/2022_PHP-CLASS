<?php
    session_start();
    $_SESSION['var1']="v1";
    $_SESSION['var2']="v2"; 
    //세션에 한번 들어가면 주석처리해도 그대로 실행됨

    // unset($_SESSION['var2']);
    // session_destroy();

    echo $_SESSION['var1'], "<br>";
    echo $_SESSION['var2'], "<br>";
?>
<a href="session_destroy.php">destroy</a>
    