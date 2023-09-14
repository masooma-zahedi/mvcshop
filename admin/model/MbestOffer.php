<?php

class bestOffer{
    private $db;
    public function __construct()
    {
        global $db;
        $this -> db = $db;
    }
    public function bestOffer_list(){
        $sth = $this->db->query("SELECT * FROM bestOfer_tbl");
        $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function bestOffer_add($data,$to){
        $this->db->query("INSERT INTO bestOfer_tbl (title,offerBefore,offerAfter,img) VALUES ('$data[title]','$data[offerBefore]','$data[offerAfter]','$to')");
    }
    public function bestOffer_delete($id){
        $this->db->query("DELETE FROM bestOfer_tbl WHERE id='$id'");
    }
    public function bestOffer_showEdit($id){
        $results =$this->db->query("SELECT * FROM bestOfer_tbl WHERE id= '$id'");
        $res = $results->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
    public function bestOffer_edit($data,$to,$id){
        $this->db->query("UPDATE bestOfer_tbl set title='$data[title]', offerBefore='$data[offerBefore]',offerAfter='$data[offerAfter]', img='$to' WHERE id= '$id'");
    }



}

