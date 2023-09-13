<?php
require_once "model/Msetting.php";
$class = new setting();

switch ($action) {
    case "list":
        $setting = $class->setting_list();
        // var_dump($setting);
        break;
    // case "add":
    //     if ($_POST) {
    //         $data = $_POST['frm'];
    //         $file = $_FILES['img'];
    //         $array = explode(".", $file['name']);
    //         $newname = 'ser.' . rand() . "." . end($array);
    //         $from = $file['tmp_name'];
    //         $to = "../public/uploader/$_GET[c]/" . $newname;
    //         move_uploaded_file($from, $to);
    //         $to1 = "./public/uploader/$_GET[c]/" . $newname;
    //         $setting = $class->setting_add($data, $to1);
    //     }
    //     break;
    // case "delete":
    //     $id = $_GET["id"];
    //     $class->setting_delete($id); ?>
    //     <script>
    //         <?php //echo ("location.href = 'index.php?c=setting&a=list';"); ?>
    //     </script><?php
    //                 break;
        case "edit":
            $id = $_GET["id"];
            $showInfo = $class->setting_showEdit($id);
            if ($_POST) {
                $data = $_POST['frm'];
                // var_dump($data);die;
                if(strlen($_FILES['img']['name']) > 0){
                    $file = $_FILES['img'];
                $array = explode(".", $file['name']);
                $newname = 'set.' . rand() . "." . end($array);
                $from = $file['tmp_name'];
                $to = "../public/uploader/$_GET[c]/" . $newname;
                move_uploaded_file($from, $to);
                $to1 = "./public/uploader/$_GET[c]/" . $newname;
                }else{
                    $to1 = $showInfo['hero_img'];
                    // echo $to;
                }
                
                $class->setting_edit($data,$id,$to1); 
                ?>
            <script>
                 <?php echo ("location.href = 'index.php?c=setting&a=list'"); ?>
            </script><?php
            }

                    break;
            }
            require_once "view/" . $controller . "/" . $action . ".php";
