<!DOCTYPE html>
<html lang="en">
<?php include_once "application/views/template/head.php"; ?>
<body>
    <h1>디테일</h1>
    <div><button id="btnDel" data-i_board="<?=$this->data->i_board?>">삭제</button>
         <a href="mod?i_board=<?=$this->data->i_board?>"><button>수정</button></a>
    </div>
    <div>글번호: <?=$this->data->i_board?></div>
    <div>제목: <?=$this->data->title?></div>
    <div>내용: <?=$this->data->ctnt?></div>
    <div>글쓴이: <?=$this->data->nm?></div>
    <div>작성일시: <?=$this->data->created_at?></div>    
</body>
</html>