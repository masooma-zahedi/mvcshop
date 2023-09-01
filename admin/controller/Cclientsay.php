<?php 
require_once "model/Mclientsay.php";
$class = new clientsay();

switch($action){
    case "list" :
        $clientlist = $class->clientsay_list();
        break;
    case "add":
        if($_POST){
            $data = $_POST['frm'];
            $file = $_FILES;
            // var_dump($file['img']['name']).die;
            $array = explode(".",$file['img']['name']);
            $newName = "client.".rand().".".end($array);
            $from = $file['img']['tmp_name'];
            $to="../public/uploader/$_GET[c]/".$newName;
            move_uploaded_file($from,$to);
            $to1 = "./public/uploader/$_GET[c]/".$newName;
            $class->clientsay_add($data,$to1);
        }
        break;
        case "delete":
            $id = $_GET['id'];
            $class->clientsay_delete($id);?>
            <script><?php echo ("location.href='index.php?c=clientsay&a=list'");?></script><?php 
            break;
}

require_once "view/".$controller."/".$action.".php";