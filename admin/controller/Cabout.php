<?php
require_once "model/Mabout.php";
$class = new about();

switch ($action){
    case "list":
        $about = $class->about_list();
        // var_dump($about);
        break;
    case "add":
        if($_POST){
            $data = $_POST['frm'];
            $file = $_FILES['img'];
            $array= explode(".",$file['name']);
            $newname ='ser.'. rand().".".end($array);
            $from = $file['tmp_name'];
            $to = "../public/uploader/$_GET[c]/".$newname;
            move_uploaded_file($from,$to);
            $to1 = "./public/uploader/$_GET[c]/".$newname;
            $about = $class->about_add($data,$to1);
        }
        break;
    case "delete":
        $id = $_GET["id"];
        $class->about_delete($id);?>
        <script><?php echo("location.href = 'index.php?c=about&a=list';");?></script><?php
        break;
    case "edit":
        $id = $_GET["id"];
        $showInfo=$class->about_showEdit($id);
        if($_POST){
            $data = $_POST['frm'];
            $class->about_edit($data,$id);?>
            <script><?php echo("location.href = 'index.php?c=about&a=list';");?></script><?php
           
        }
        break;
}
require_once "view/".$controller."/".$action.".php";

