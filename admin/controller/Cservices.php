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
            // echo $file['name']."<br>";
            $array= explode(".",$file['name']);
            // var_dump($array);
            $newname ='ser.'. rand().".".end($array);
            // echo $newname;
            $from = $file['tmp_name'];
            // echo $from;
            $to = "../public/uploader/".$newname;
            // echo $to;
            move_uploaded_file($from,$to);

            $services = $class->services_add($data,$to);
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

