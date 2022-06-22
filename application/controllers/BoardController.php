<?php
namespace application\controllers;

use application\models\BoardModel;

class BoardController extends Controller {
    public function list() {
        $model = new BoardModel();
        //$this->list = $model->selBoardList();
        $this->addAttribute("title", "리스트");
        $this->addAttribute("list", $model->selBoardList());
        $this->addAttribute("js", ["board/list"]);

        return "board/list.php"; //view 파일명!!
    }

    public function detail() {
        $i_board = $_GET["i_board"];
        $model = new BoardModel();        
        $param = ["i_board" => $i_board];
        $this->addAttribute("data", $model->selBoard($param));
        $this->addAttribute("js", ["board/detail"]);
        return "board/detail.php";       
    }

    public function del() {
        $i_board = $_GET["i_board"];
        $model = new BoardModel();        
        $param = ["i_board" => $i_board];
        $model->delBoard($param);        
        return "redirect:/board/list";
    }

    public function mod() {
        $i_board = $_GET["i_board"];
        $model = new BoardModel();        
        $param = ["i_board" => $i_board];
        $this->addAttribute("data", $model->selBoard($param));
        $this->addAttribute("title", "수정");
        $this->addAttribute(_HEADER, $this->getView("template/header.php"));
        $this->addAttribute(_MAIN, $this->getView("board/mod.php"));
        $this->addAttribute(_FOOTER, $this->getView("template/footer.php"));
        return "template/t1.php";
    }
}
?>

