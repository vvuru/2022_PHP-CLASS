<?php
    include_once "db.php";

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    print "title : $title <br>";
    print "ctnt : $ctnt <br>";
    
    $data = [
        "title" => $title, 
        "ctnt" => $ctnt
    ];
    $result = ins_board($data);

    print "result : $result <br>";
    header("Location: list.php");
?>