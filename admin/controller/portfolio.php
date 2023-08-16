<?php
require_once "model/Mportfolio.php";
$class = new portfolio();

switch ($action){
    case "list":
        $portfolio = $class->portfolio_list();
        // var_dump($portfolio);
        break;
    case "add":
        if($_POST){
            $data = $_POST['frm'];
            $file = $_FILES['img'];
            $array= explode(".",$file['name']);
            $newname ='ser.'. rand().".".end($array);
            $from = $file['tmp_name'];
            $to = "../public/uploader/portfolio/".$newname;
            move_uploaded_file($from,$to);
            $to1 = "./public/uploader/portfolio/".$newname;
            $portfolio = $class->portfolio_add($data,$to1);
        }
        break;
    case "delete":
        $id = $_GET["id"];
        $class->portfolio_delete($id);?>
        <script><?php echo("location.href = 'index.php?c=portfolio&a=list';");?></script><?php
        break;
    case "edit":
        $id = $_GET["id"];
        $showInfo=$class->portfolio_showEdit($id);
        if($_POST){
            $data = $_POST['frm'];
            $class->portfolio_edit($data,$id);?>
            <script><?php echo("location.href = 'index.php?c=portfolio&a=list';");?></script><?php
           
        }
        break;
}
require_once "view/".$controller."/".$action.".php";

