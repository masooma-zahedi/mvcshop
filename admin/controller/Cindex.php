<?php
require_once "model/Mprocat.php";
$class = new procat;

$procat = $class->procat_list();
require_once "view/procat/list.php";
