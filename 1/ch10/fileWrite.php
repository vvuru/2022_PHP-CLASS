<?php

    $filep=fopen("../RomeoNew.txt","r+");

    if(!$filep){
        die("파일을 열 수 없습니다.");
    }
    print "파일을 열었습니다.<br>";

    fputs($filep,"\nROMEO: ?!"); // \n(for unix) vs \r\n(for window)

    fclose($filep);