<?php

class video{
    private $db;
    public function __construct()
    {
        global $db;
        $this -> db = $db;
    }
    public function video_showEdit(){
        $results =$this->db->query("SELECT * FROM video_tbl WHERE id= '1'");
        $res = $results->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
    public function video_edit($data,$id,$to){
        $this->db->query("UPDATE video_tbl set iframe='$to', description='$data[description]' WHERE id='$id'");
    }
}

