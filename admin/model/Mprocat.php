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
    public function procat_sub($chid){
        $sth = $this->db->query("SELECT * FROM procat_tbl WHERE id= '$chid'");
    }
    public function procat_add($data){
        $this->db->query("INSERT INTO procat_tbl (title,chid) VALUES ('$data[title]','$data[chid]')");

    }
    public function promaincat_list(){
        $results = $this->db->query("SELECT * FROM procat_tbl WHERE chid ='0'");
        return $results;
    }
    public function procat_delete($id){
        $this->db->query("DELETE FROM procat_tbl WHERE id='$id'");
    }
}

