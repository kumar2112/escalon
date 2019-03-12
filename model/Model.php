<?php
require_once 'db/DataBase.php';
Class Model  {
     public $db;
     public function __construct(){
         $this->db=new DataBase();
     }
}
?>
