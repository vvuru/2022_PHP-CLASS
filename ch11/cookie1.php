<?php
    setcookie("country","korea");
    if(isset($_COOKIE['country']))
    {
        echo "Country: ".$_COOKIE['country']."<br>";
    }
?>
<a href="cookie2.php">Next page</a>