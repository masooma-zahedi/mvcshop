<?php
require_once "model/Memployee.php";
$class = new employee();

switch ($action){
    case "list":
        $employee = $class->employee_list();
        // var_dump($employee);
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
            $employee = $class->employee_add($data,$to1);
        }
        break;
    case "delete":
        $id = $_GET["id"];
        $class->employee_delete($id);?>
        <script><?php echo("location.href = 'index.php?c=employee&a=list';");?></script><?php
        break;
    case "edit":
        $id = $_GET["id"];
        $showInfo=$class->employee_showEdit($id);
        if($_POST){
            $data = $_POST['frm'];
            $file = $_FILES['img'];
            $array= explode(".",$file['name']);
            $newname ='ser.'. rand().".".end($array);
            $from = $file['tmp_name'];
            $to = "../public/uploader/$_GET[c]/".$newname;
            move_uploaded_file($from,$to);
            $to1 = "./public/uploader/$_GET[c]/".$newname;
            $class->employee_edit($data,$id,$to1);?>
            <script><?php echo("location.href = 'index.php?c=employee&a=list';");?></script><?php
           
        }
        break;
}
require_once "view/".$controller."/".$action.".php";

