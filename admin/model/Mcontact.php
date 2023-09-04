<?php 
require_once "../../public/config.php";
class contact{
    private $db; 
    public function __construct()
    {
        global $db;
        $this -> db = $db;
    }
    public function contact_list(){
        $sth = $this->db->query("SELECT * FROM contact_tbl");
        $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    public function contact_add($data){
        $this->db->query("INSERT INTO contact_tbl (name,email,title,massage) VALUES ('$data[name]','$data[email]','$data[title]','$data[massage]')");
    }

}