<?php 
// require_once "public/include/config.php";

require_once "view/layout/header.php";

            $controller = @$_GET["c"]?$_GET["c"]:'index';
        if(file_exists("controller/C".$controller.".php")){
            require_once "controller/C".$controller.".php";
        }
        
require_once "view/layout/footer.php";