<?php
class main{
    public $db;
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function menu_list(){
    }
}

$mas = new main();
$test = $mas->menu_list();