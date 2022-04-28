<?php
setcookie("country", "한국");
echo "Country : " . $_COOKIE['country'], "<br>";

$_COOKIE['country'] = "UK";
echo "Country : " . $_COOKIE['country'], "<br>";

// // 서버쪽에서 쿠키값 삭제
// unset($_COOKIE['country']);
// // 브라우저에 남아있는 쿠키값 삭제
// setcookie("country");

echo "Country : " . $_COOKIE['country'], "<br>";
