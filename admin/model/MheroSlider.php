<?php
class heroSlider{
    private $db; 
    public function __construct()
    {
        global $db;
        $this -> db = $db;
    }
    public function heroSlider_list(){
        $sth = $this->db->query("SELECT * FROM heroSlider_tbl");
        $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    public function heroSlider_add($data,$to){
        $this->db->query("INSERT INTO heroSlider_tbl (title,description,img) VALUES ('$data[title]','$data[description]','$to')");
    }
    public function heroSlider_delete($id){
        $this->db->query("DELETE FROM heroSlider_tbl WHERE id='$id'");
        
    }
}