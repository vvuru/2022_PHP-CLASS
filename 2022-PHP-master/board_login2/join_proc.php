<?php
include_once 'db/db_user.php';

$uid = $_POST['uid'];
$upw = $_POST['upw'];
$confirm_upw = $_POST['confirm_upw'];
$nm = $_POST['nm'];
$gender = $_POST['gender'];

$param = [
    "uid" => $uid,
    "upw" => $upw,
    "nm" => $nm,
    "gender" => $gender
];
$result = user_join($param);

print "result : $result <br>";
print "아이디 : $uid <br>";
print "비밀번호 : $upw <br>";
print "비밀번호 확인 : $confirm_upw <br>";
print "이름 : $nm <br>";
print "성별 : $gender <br>";
