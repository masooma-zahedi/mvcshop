<?php
require_once "model/Mservices.php";
$class = new services();

switch ($action){
    case "list":
        $services = $class->services_list();
        // var_dump($services);
        break;
    case "add":
        // $promaincat = $class->services_list();
        if($_POST){
            $data = $_POST['frm'];
            $services = $class->services_add($data);
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

