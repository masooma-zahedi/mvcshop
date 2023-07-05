<?php
class register{
    // public function __construct()
    // {
    //     global $db;
    //     $this->db=$db;
    // }
    public $db;
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }
}