<?php
session_start();
session_destroy(); // vs session_unset();
echo $_SESSION['var1'], "<br>";
echo $_SESSION['var2'], "<br>";
?>
<a href="confirm.php">Confirm</a>
