<?php 
require_once "model/MheroSlider.php";
$class = new heroSlider();

switch($action){
    case "list" :
        $clientlist = $class->heroSlider_list();
        break;
    case "add":
        if($_POST){
            $data = $_POST['frm'];
            $file = $_FILES;
            $array = explode(".",$file['img']['name']);
            $newName = "slider.".rand().".".end($array);
            $from = $file['img']['tmp_name'];
            $to="../public/uploader/$_GET[c]/".$newName;
            move_uploaded_file($from,$to);
            $to1 = "./public/uploader/$_GET[c]/".$newName;
            $class->heroSlider_add($data,$to1);
        }
        break;
        case "delete":
            $id = $_GET['id'];
            $class->heroSlider_delete($id);?>
            <script><?php echo ("location.href='index.php?c=heroSlider&a=list'");?></script><?php 
            break;
}

require_once "view/".$controller."/".$action.".php";