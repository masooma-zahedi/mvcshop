<?php
// require_once "../public/config.php";
class procat{
    private $db;
    public function __construct()
    {
        global $db;
        $this -> db = $db;
    }

    public function procat_list(){
        $sth = $this->db->query("SELECT * FROM procat_tbl");
        $rows = $sth->fetchAll();
        return $rows;
    }
}

