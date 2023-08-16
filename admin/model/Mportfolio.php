<?php

class portfolio{
    private $db;
    public function __construct()
    {
        global $db;
        $this -> db = $db;
    }
    public function portfolio_list(){
        $sth = $this->db->query("SELECT * FROM portfolio_tbl");
        $rows = $sth->fetchAll();
        return $rows;
    }

    public function portfolio_add($data,$to){
        $this->db->query("INSERT INTO portfolio_tbl (title,description,link,img) VALUES ('$data[title]','$data[description]','$data[link]','$to')");
    }
    public function portfolio_delete($id){
        $this->db->query("DELETE FROM portfolio_tbl WHERE id='$id'");
    }
    public function portfolio_showEdit($id){
        $results =$this->db->query("SELECT * FROM portfolio_tbl WHERE id= '$id'");
        $res = $results->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
    public function portfolio_edit($data,$id){
        $this->db->query("UPDATE portfolio_tbl set title='$data[title]', description='$data[description]', link='$data[link]' WHERE id= '$id'");
    }



}

