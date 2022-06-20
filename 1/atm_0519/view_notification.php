<?php
$conn = new mysqli("localhost","root","506greendg@","comments");

$sql="UPDATE comments SET status=1 WHERE status=0";	
$result=mysqli_query($conn, $sql);

$sql="select * from comments ORDER BY i_board DESC limit 20";
$result=mysqli_query($conn, $sql);

$response='';
while($row=mysqli_fetch_array($result)) {
	$response = $response . "<div class='notification-item'>" .
	"<div class='notification-comment'>" . $row["question"]  . "</div>" .
	"</div>";
}
if(!empty($response)) {
	print $response;
}


?>