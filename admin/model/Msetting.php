<?php

class setting{
    private $db;
    public function __construct()
    {
        global $db;
        $this -> db = $db;
    }
    public function setting_list(){
        $sth = $this->db->query("SELECT * FROM setting_tbl");
        $rows = $sth->fetchAll();
        return $rows;
    }
    // public function setting_add($data,$to){
    //     $this->db->query("INSERT INTO setting_tbl (titleSite,descriptionSite,hero_img,email,phone,address,facebook,twitter,youtube,instagram) VALUES ('$data[titleSite]','$data[descriptionSite]','$to','$data[email]','$data[phone]','$data[address]','$data[facebook]','$data[twitter]','$data[youtube]','$data[instagram]')");
    // }
    // public function setting_delete($id){
    //     $this->db->query("DELETE FROM setting_tbl WHERE id='$id'");
    // }
    public function setting_showEdit($id){
        $results =$this->db->query("SELECT * FROM setting_tbl WHERE id= '$id'");
        $res = $results->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
    public function setting_edit($data,$id,$to){
        $this->db->query("UPDATE setting_tbl set titleSite='$data[titleSite]', descriptionSite='$data[descriptionSite]', hero_img='$to', email='$data[email]', phone='$data[phone]', address='$data[address]', facebook='$data[facebook]', twitter='$data[twitter]', youtube='$data[youtube]', instagram='$data[instagram]' WHERE id= '$id'");
    }



}

