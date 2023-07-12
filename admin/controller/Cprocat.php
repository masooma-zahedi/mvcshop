<?php
require_once "model/Mprocat.php";
$class = new procat();

switch ($action){
    case "list":
        $procat = $class->procat_list();
        var_dump($procat);
        break;
    case "add":
        $promaincat = $class->promaincat_list();
        if($_POST){
            $data = $_POST['frm'];
            $procat = $class->procat_add($data);
        }
        break;
    case "delete":
        $id = $_GET["id"];
        $class->procat_delete($id);?>
        <script><?php echo("location.href = 'index.php?c=procat&a=list';");?></script><?php
        break;
    case "edit":
        $id = $_GET["id"];
        $showInfo=$class->procat_showEdit($id);
        $promaincat = $class->promaincat_list();
        if($_POST){
            $data = $_POST['frm'];
            $class->procat_edit($data,$id);?>
            <script><?php echo("location.href = 'index.php?c=procat&a=list';");?></script><?php
        }
        break;
}
require_once "view/".$controller."/".$action.".php";