<?php
require_once "model/Mprocat.php";
$class = new procat();

switch ($action){
    case "list":
        $procat = $class->procat_list();
        break;
    case "add":
        $promaincat = $class->promaincat_list();
        if($_POST){
            $data = $_POST['frm'];
            $procat = $class->procat_add($data);
        }
        break;
    // case "list":
    //     $procat = $class->procat_list();
    //     break;
}
require_once "view/".$controller."/".$action.".php";