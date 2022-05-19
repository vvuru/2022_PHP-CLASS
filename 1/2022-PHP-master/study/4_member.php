<?php
/*
    4. 오늘의 짝꿍은?
    어떤 방법으로든 새로고침 할 때마다
    우리 스터디멤버 9명 중 2명의 이름이 화면에
    뜰 수 있도록
    단, 같은 이름이 중복으로 뜨면 안됨
    ex) 이승재 이승재 No!!
    */
$study_mem = array("김재훈", "남그린", "박은지", "신혜미", "윤정인", "이경식", "이승재", "최우원", "허영롱");

// -1은 배열 때문에 들어감
// $count_num = count($study_mem) - 1;

$member_num1 = rand(0, 8);
$member_num2 = rand(0, 8);

print "오늘의 짝꿍은? <br>";
if ($member_num1 !== $member_num2) {
    print "$study_mem[$member_num1], $study_mem[$member_num2]";
} else {
    print "도플갱어는 짝궁이 될 수 없어용~~ ❌❌";
}


$name = array("사람1", "사람2", "사람3", "사람4", "사람5", "사람6", "사람7", "사람8", "사람9");

//while문 무한반복
while ($name_1 == $name_2) {
    $name_1 = rand(0, 8); // name_1에 0 부터 8 까지 랜덤
    $name_2 = rand(0, 8); // name_2에 0 부터 8 까지 랜덤
}
print $name[$name_1] . " " . $name[$name_2];
