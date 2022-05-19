<?php
include_once 'db.php';

function ins_board(&$param)
{
    $title = $param["title"];
    $ctnt = $param["ctnt"];
    $i_user = $param["i_user"];

    $conn = get_conn();
    $sql = "INSERT INTO t_board (title, ctnt, i_user) values ('$title','$ctnt', '$i_user')";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function sel_board(&$param)
{

    $i_board = $param['i_board'];

    $conn = get_conn();
    $sql = "SELECT A.ctnt, A.title, A.created_at, A.updated_at, B.nm, B.i_user
    FROM t_board A 
    INNER JOIN t_user B 
    ON A.i_user = B.i_user
    WHERE A.i_board=$i_board";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function sel_paging_count(&$param)
{
    $row_count = $param['row_count'];
    $sql = "SELECT CEIL( COUNT(i_board) / $row_count) as cnt FROM t_board
    ";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    $row = mysqli_fetch_assoc($result);
    return $row['cnt'];
}
function sel_board_list(&$param)
{
    $start_idx = $param['start_idx'];
    $row_count = $param['row_count'];

    $conn = get_conn();
    $sql =
        "SELECT A.i_board, A.title, A.created_at, B.nm
        FROM t_board A 
        INNER JOIN t_user B 
        ON A.i_user = B.i_user 
        ORDER BY i_board DESC
        LIMIT $start_idx, $row_count";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
function upd_board(&$param)
{
    $i_board = $param['i_board'];
    $i_user = $param['i_user'];
    $title = $param['title'];
    $ctnt = $param['ctnt'];

    $conn = get_conn();
    $sql =
        "UPDATE t_board A
        SET title='${title}', ctnt='${ctnt}',updated_at=now() 
        WHERE i_board=$i_board AND i_user = $i_user";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    return $result;
};

function del_board(&$param)
{
    $i_board = $param['i_board'];
    $i_user = $param['i_user'];

    $conn = get_conn();
    $sql =
        "DELETE FROM t_board 
            WHERE i_board=$i_board 
            AND i_user = $i_user";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    return $result;
}
