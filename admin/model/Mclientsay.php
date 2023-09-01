<?php
class clientsay{
    private $db; 
    public function __construct()
    {
        global $db;
        $this -> db = $db;
    }
    public function clientsay_list(){
        $sth = $this->db->query("SELECT * FROM clientsay_tbl");
        $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    public function clientsay_add($data,$to){
        $this->db->query("INSERT INTO clientsay_tbl (name,description,img) VALUES ('$data[name]','$data[description]','$to')");
    }
    public function clientsay_delete($id){
        $this->db->query("DELETE FROM clientsay_tbl WHERE id='$id'");
        
    }
}