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
    public function procat_showEdit($id){
        $results =$this->db->query("SELECT * FROM procat_tbl WHERE id= '$id'");
        $res = $results->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
    public function procat_showcat($chid){
        // if($chid== "0"){

        // }
        $sth = $this->db->query("SELECT * FROM procat_tbl WHERE id='$chid'");
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    public function procat_edit($data,$id){
        $this->db->query("UPDATE procat_tbl set title='$data[title]', chid ='$data[chid]' WHERE id= '$id'");
    }



}

