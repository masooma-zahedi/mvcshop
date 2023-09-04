<?php 
require_once "../model/Mcontact.php";
$class = new contact();
$action = $_GET['a'];
switch($action){
    case "add":
        if($_POST){
            $data = $_POST["frm"];
            // var_dump($data).die;
            $class->contact_add($data);
            header("location:../../contact.php");
        }
        break;
}

