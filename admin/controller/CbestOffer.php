<?php
require_once "model/MbestOffer.php";
$class = new bestOffer();

switch ($action){
    case "list":
        $bestOffer = $class->bestOffer_list();
        // var_dump($bestOffer);
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
            $bestOffer = $class->bestOffer_add($data,$to1);
        }
        break;
    case "delete":
        $id = $_GET["id"];
        $class->bestOffer_delete($id);?>
        <script><?php echo("location.href = 'index.php?c=bestOffer&a=list';");?></script><?php
        break;
    case "edit":
        $id = $_GET["id"];
        $showInfo=$class->bestOffer_showEdit($id);
        if($_POST){
            $data = $_POST['frm'];
            if(strlen($_FILES['img']['name']) > 0){
                $file = $_FILES['img'];
            $array = explode(".", $file['name']);
            $newname = 'ofer.' . rand() . "." . end($array);
            $from = $file['tmp_name'];
            $to = "../public/uploader/$_GET[c]/" . $newname;
            move_uploaded_file($from, $to);
            $to1 = "./public/uploader/$_GET[c]/" . $newname;
            }else{
                $to1 = $showInfo['img'];
            }
            $class->bestOffer_edit($data,$to1,$id);
            ?>
            <script>
                <?php echo("location.href = 'index.php?c=bestOffer&a=list'");?>
            </script><?php
           
        }
        break;
}
require_once "view/".$controller."/".$action.".php";

