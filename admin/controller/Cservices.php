<?php
require_once "model/Mservices.php";
$class = new services();

switch ($action){
    case "list":
        $services = $class->services_list();
        // var_dump($services);
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
            $services = $class->services_add($data,$to1);
        }
        break;
    case "delete":
        $id = $_GET["id"];
        $class->services_delete($id);?>
        <script><?php echo("location.href = 'index.php?c=services&a=list';");?></script><?php
        break;
    case "edit":
        $id = $_GET["id"];
        $showInfo=$class->services_showEdit($id);
        if($_POST){
            $data = $_POST['frm'];
            $class->services_edit($data,$id);?>
            <script><?php echo("location.href = 'index.php?c=services&a=list';");?></script><?php
           
        }
        break;
}
require_once "view/".$controller."/".$action.".php";

