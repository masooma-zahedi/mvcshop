<?php

class about{
    private $db;
    public function __construct()
    {
        global $db;
        $this -> db = $db;
    }
    public function about_list(){
        $sth = $this->db->query("SELECT * FROM about_tbl");
        $rows = $sth->fetchAll();
        return $rows;
    }

    public function about_add($data,$to){
        $this->db->query("INSERT INTO about_tbl (headsubject,contentabout,contentfeature,img) VALUES ('$data[headersubject]','$data[contentabout]','$data[contentfeature]','$to')");
    }
    public function about_delete($id){
        $this->db->query("DELETE FROM about_tbl WHERE id='$id'");
    }
    public function about_showEdit($id){
        $results =$this->db->query("SELECT * FROM about_tbl WHERE id= '$id'");
        $res = $results->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
    public function about_edit($data,$id){
        $this->db->query("UPDATE about_tbl set title='$data[title]', description='$data[description]', link='$data[link]' WHERE id= '$id'");
    }



}

