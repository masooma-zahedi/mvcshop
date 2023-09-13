<?php

class bestOfer{
    private $db;
    public function __construct()
    {
        global $db;
        $this -> db = $db;
    }
    public function bestOfer_list(){
        $sth = $this->db->query("SELECT * FROM bestOfer_tbl");
        $rows = $sth->fetchAll();
        return $rows;
    }

    // public function bestOfer_sub($chid){
    //     $sth = $this->db->query("SELECT * FROM bestOfer_tbl WHERE id= '$chid'");
    // }
    // // working on this*******************************************************************
    public function bestOfer_add($data,$to){
        $this->db->query("INSERT INTO bestOfer_tbl (title,oferBefore,oferAfter,img) VALUES ('$data[title]','$data[oferBefore]','$data[oferAfter]','$to')");
    }
    public function bestOfer_delete($id){
        $this->db->query("DELETE FROM bestOfer_tbl WHERE id='$id'");
    }
    public function bestOfer_showEdit($id){
        $results =$this->db->query("SELECT * FROM bestOfer_tbl WHERE id= '$id'");
        $res = $results->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
    public function bestOfer_edit($data,$to,$id){
        $this->db->query("UPDATE bestOfer_tbl set title='$data[title]', oferBefore='$data[oferBefore]',oferAfter='$data[oferAfter]', img='$to' WHERE id= '$id'");
    }



}

