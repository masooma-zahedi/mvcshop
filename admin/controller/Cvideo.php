<?php
require_once "model/Mvideo.php";
$class = new video();

switch ($action){
    case "edit":
        // $id = $_GET["id"];
        $showInfo=$class->video_showEdit();
        if($_POST){
            $data = $_POST['frm'];
            $file = $_FILES['iframe'];
            $array= explode(".",$file['name']);
            $newname ='ser.'. rand().".".end($array);
            $from = $file['tmp_name'];
            $to = "../public/uploader/$_GET[c]/".$newname;
            move_uploaded_file($from,$to);
            $to1 = "./public/uploader/$_GET[c]/".$newname;
            $id = 1;
            $class->video_edit($data, $id,$to1);?>
            <script><?php //echo("location.href = 'index.php?c=index&a=index';");?></script><?php
           
        }
        break;
}
require_once "view/".$controller."/".$action.".php";

