<?php
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
    public function procat_add($data){
        $this->db->query("INSERT INTO procat_tbl (title,chid) VALUES ('$data[title]','$data[chid]')");

    }
    public function promaincat_list(){
        $results = $this->db->query("SELECT * FROM procat_tbl WHERE chid ='0'");
        return $results;
    }
}

