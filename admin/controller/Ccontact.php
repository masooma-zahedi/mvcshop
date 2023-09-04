<?php 
$action = $_GET['a'];
switch($action){
    case "add":
        require_once "../model/Mcontact.php";
        $class = new contact();
        
        if($_POST){
            $data = $_POST["frm"];
            // var_dump($data).die;
            $class->contact_add($data);
            header("location:../../contact.php");
        }
        break;
        case "list":
            require_once "model/Mcontact.php";
            $class = new contact();
            $contactlist =$class->contact_list();
        break;
        case "delete":
            require_once "model/Mcontact.php";
            $class = new contact();
            $id = $_GET['id'];
            $class->contact_delete($id);?>
            <script><?php echo("location.href = 'index.php?c=contact&a=list';");?></script><?php
        break;

}

require_once "view/".$controller."/".$action.".php";
