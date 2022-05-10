<?php
$name="홍길동"; //문자열 %string
$age=22; //%데시멀(?) 정수값 / %04=0022
$height=177.32; // %float(실수) / $.1 소수점 첫째(1)자리까지 나타내라
$blood_type='o'; // "",'' in php 모두 문자열

// printf vs sprintf
printf("제 이름은 %s입니다. 나이는 %04d세이고, 키는 %.2fcm입니다. 혈액형은 %s입니다. <br>",$name,$age,$height,$blood_type);

$a=sprintf("제 이름은 %s입니다. 나이는 %04d세이고, 키는 %.2fcm입니다. 혈액형은 %s입니다.",$name,$age,$height,$blood_type);
print $a;

