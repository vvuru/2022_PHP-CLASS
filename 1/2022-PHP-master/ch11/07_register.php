<?php
session_start();

$_SESSION['var1'] = "variable1";
$_SESSION['var2'] = "variable2";

//unset($_SESSION['var2']);

echo $_SESSION['var1'], "<br>";
echo $_SESSION['var2'], "<br>";
?>
<a href="08_session_destroy.php">destroy</a>