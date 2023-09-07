<?php

class about{
    private $db;
    public function __construct()
    {
        global $db;
        $this -> db = $db;
    }
    public function about_showEdit(){
        $results =$this->db->query("SELECT * FROM about_tbl WHERE id= '1'");
        $res = $results->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
    public function about_edit($data,$to,$id){
        $this->db->query("UPDATE about_tbl set headsubject='$data[headsubject]', contentabout='$data[contentabout]', contentfeature='$data[contentfeature]', img = '$to' WHERE id='$id'");
    }
}

