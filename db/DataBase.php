<?php
include_once './config.php';
class DataBase {
     public $con;

     public function __construct(){
       try {
          $this->con = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME,DBUSER,DBPWD);
          $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          //echo "database connection succefully";
        }catch(PDOException $e){
           echo $e->getMessage();
        }
     }
}
?>
