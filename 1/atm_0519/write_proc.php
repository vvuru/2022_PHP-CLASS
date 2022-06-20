<?php
include_once "db/db_board.php";

session_start();
$question = $_POST["question"];

$login_user = $_SESSION["login_user"]; // 로그인 pk값
$i_user = $login_user["i_user"]; // 글쓴이 pk값

$param = [
    "i_user" => $i_user, // Q 왜받아오지? 어디쓰려고?
    "question" => $question,
];

$result=ins_question($param);
if($result)
{
    echo "성공적으로 등록되었습니다";
}

/*$result = ins_board($param); // 배열로 묶어서 보내줌. 결과는 1넘어옴(true)
if($result) { // 1 넘어왔으니(true) 주소값이동
    Header("Location: main_1.php");
}*/
//t_board에 insert 완료 후 main_1.php로 이동.


/*
$conn = new mysqli("localhost","root","506greendg@","comments");
$count=0;
if(!empty($_POST['add'])) {
	$question = mysqli_real_escape_string($conn,$_POST["question"]);
	$sql = "INSERT INTO comments (question) VALUES('" . $question . "')";
	mysqli_query($conn, $sql);
}
$sql2="SELECT * FROM comments WHERE status = 0";
$result=mysqli_query($conn, $sql2);
$count=mysqli_num_rows($result); */