<?php

    $data=file("./major.txt");
    
    // print_r($data);
    // print $data[0]."<br>";
    // print "-----------<br>";

    foreach($data as $line){
        $div = explode(" ", $line);
        print "name: {$div[0]}, major: {$div[1]} <br>";
    }