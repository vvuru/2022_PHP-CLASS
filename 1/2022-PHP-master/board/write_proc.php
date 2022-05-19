<?php
include_once("db.php");


$title = $_POST["title"];
$ctnt = $_POST["ctnt"];

print "title : $title <br>";
print "ctnt : $ctnt <br>";

$conn = get_conn();
$sql =
    " 
        INSERT INTO t_board 
        (title, ctnt)
        VALUES
        ('${title}', '${ctnt}')
    ";
// 쿼리 실행
$result = mysqli_query($conn, $sql);
mysqli_close($conn); //연결 닫는거 !!!
// 영향을 미친 레코드 수
print "result : $result <br>";
// 주소값 이동
header("Location: list.php"); // /를 붙이는 순간 기본주소값 빼고 초기화 시켜줌 풀 주소값을 적어줘야 함
// die(); //중간에 사용하면 이후 php실행을 없앨때 사용
