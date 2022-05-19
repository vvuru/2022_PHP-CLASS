<?php
setcookie("country", "korea");
if (isset($_COOKIE["country"])) {
    echo "Country : ", $_COOKIE['country'], "<br>";
}
?>
<a href="11_cookie2.php">Next Page</a>