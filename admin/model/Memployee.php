<?php

class employee{
    private $db;
    public function __construct()
    {
        global $db;
        $this -> db = $db;
    }
    public function employee_list(){
        $sth = $this->db->query("SELECT * FROM employee_tbl");
        $rows = $sth->fetchAll();
        return $rows;
    }

    public function employee_add($data,$to){
        $this->db->query("INSERT INTO employee_tbl (name,title,facebook,instagram,twitter,img) VALUES ('$data[name]','$data[title]','$data[facebook]','$data[instagram]','$data[twitter]','$to')");
    }
    public function employee_delete($id){
        $this->db->query("DELETE FROM employee_tbl WHERE id='$id'");
    }
    public function employee_showEdit($id){
        $results =$this->db->query("SELECT * FROM employee_tbl WHERE id= '$id'");
        $res = $results->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
    // public function employee_showcat($chid){
    //     $sth = $this->db->query("SELECT * FROM employee_tbl WHERE id='$chid'");
    //     $row = $sth->fetch(PDO::FETCH_ASSOC);
    //     return $row;
    // }
    public function employee_edit($data,$id,$to){
        $this->db->query("UPDATE employee_tbl set name='$data[name]', title='$data[title]', img='$to', facebook='$data[facebook]',instagram='$data[instagram]',twitter='$data[twitter]' WHERE id= '$id'");
    }



}

