<?php

//exam6.txt 읽어서 전부 대문자로 변경 후 exam6_capital.txt에 저장

//1번 방법
$data=file("exam6.txt");

$filep=fopen("./exam6_capital.txt","w");
foreach($data as $line){
    fputs($filep,strtoupper($line));
}

fclose($filep);

//2번 방법
$filep=fopen("./exam6.txt","r");
$newfilep=fopen("./exam6_capital.txt","w");

while($line=fgets($filep)){
    fputs($newfilep,strtoupper($line));
}

fclose($filep);
fclose($newfilep);
