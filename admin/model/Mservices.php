<?php
// die("model is on");


class services{
    private $db;
    public function __construct()
    {
        global $db;
        $this -> db = $db;
    }
    public function services_list(){
        $sth = $this->db->query("SELECT * FROM services_tbl");
        $rows = $sth->fetchAll();
        return $rows;
    }

    // public function services_sub($chid){
    //     $sth = $this->db->query("SELECT * FROM services_tbl WHERE id= '$chid'");
    // }
    // // working on this*******************************************************************
    public function services_add($data,$to){
        $this->db->query("INSERT INTO services_tbl (title,description,link,img) VALUES ('$data[title]','$data[description]','$data[link]','$to')");
    }
    // public function services_list(){
    //     $results = $this->db->query("SELECT * FROM services_tbl");
    //     return $results;
    // }
    // public function promaincat_list_showmenu(){
    //     $results = $this->db->query("SELECT * FROM services_tbl WHERE chid ='0'");
    //     $rows = $results->fetchAll();
    //     return $rows;
    // }
    public function services_delete($id){
        $this->db->query("DELETE FROM services_tbl WHERE id='$id'");
    }
    public function services_showEdit($id){
        $results =$this->db->query("SELECT * FROM services_tbl WHERE id= '$id'");
        $res = $results->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
    // public function services_showcat($chid){
    //     $sth = $this->db->query("SELECT * FROM services_tbl WHERE id='$chid'");
    //     $row = $sth->fetch(PDO::FETCH_ASSOC);
    //     return $row;
    // }
    public function services_edit($data,$id){
        $this->db->query("UPDATE services_tbl set title='$data[title]', description='$data[description]', link='$data[link]' WHERE id= '$id'");
    }



}

