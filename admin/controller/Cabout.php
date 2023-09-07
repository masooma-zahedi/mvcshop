<?php
require_once "model/Mabout.php";
$class = new about();

switch ($action){
    case "edit":
        // $id = $_GET["id"];
        $showInfo=$class->about_showEdit();
        if($_POST){
            $data = $_POST['frm'];
            $file = $_FILES['img'];
            $array= explode(".",$file['name']);
            $newname ='ser.'. rand().".".end($array);
            $from = $file['tmp_name'];
            $to = "../public/uploader/$_GET[c]/".$newname;
            move_uploaded_file($from,$to);
            $to1 = "./public/uploader/$_GET[c]/".$newname;
            $id = 1;
            $class->about_edit($data,$to1, $id);?>
            <script><?php //echo("location.href = 'index.php?c=index&a=index';");?></script><?php
           
        }
        break;
}
require_once "view/".$controller."/".$action.".php";

