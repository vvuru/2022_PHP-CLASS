<?php
    function get_conn()         
    {
        $url = "localhost";
        $port = "3306";
        $db_name = "board1";
        $username = "root";
        $password = "506greendg@";

        $dsn = "mysql:host=${url};port=${port};dbname=${db_name};charset=utf8";
        try 
        {
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
        } 
        catch(PDOException $e)
        {
            print $e;
        }
        return $pdo;
    }

    function ins_board($data)
    {
        $sql = "INSERT INTO t_board SET title = :title, ctnt = :ctnt";
        $pdo = get_conn();
        $stmt = $pdo->prepare($sql);        
        $result = $stmt->execute([
            "title" => $data["title"],
            "ctnt" => $data["ctnt"],
        ]);
        $pdo = null;
        return $result;
    }

    
    function sel_board_list()
    {        
        $sql = "SELECT i_board, title, create_at FROM t_board ORDER BY i_board DESC";
        $pdo = get_conn();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([]);
        $data = $stmt->fetchAll();
        $pdo = null;
        return $data;
    }

    function sel_board(&$i_board)
    {
        $sql = "SELECT i_board, title, ctnt, create_at FROM t_board WHERE i_board = ?";
        $pdo = get_conn();
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$i_board]);
        $data = $stmt->fetch();
        $pdo = null;
        return $data;
    }

    function upd_board(&$data)
    {
        $sql = "UPDATE t_board SET title = :title, ctnt = :ctnt WHERE i_board = :i_board";
        $pdo = get_conn();
        $stmt = $pdo->prepare($sql);        
        $result = $stmt->execute([
            "title" => $data["title"],
            "ctnt" => $data["ctnt"],
            "i_board" => $data["i_board"]
        ]);
        $pdo = null;
        return $result;
    }

    function del_board(&$i_board)
    {
        $sql = "DELETE FROM t_board WHERE i_board = :i_board";
        $pdo = get_conn();
        $stmt = $pdo->prepare($sql);        
        $result = $stmt->execute([            
            "i_board" => $i_board
        ]);
        $pdo = null;
        return $result;
    }

    