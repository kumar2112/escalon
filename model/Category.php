<?php
require_once 'Model.php';
Class Category extends Model{
    protected $id;
    public $categoryName;
    public function getId(){
        return $this->id;
    }
    public static function getCategories($id=null){
      $m=new Model();
      $categoreis=array();
      try {
          if($id===null){
               $sql="SELECT * FROM pj_categories";
               $stmt=$m->db->con->query($sql);
               $stmt->execute();
          }else{
             $sql="SELECT * FROM pj_categories WHERE id=".$id;
             $stmt=$m->db->con->query($sql);
             $stmt->execute();
          }
          $results=$stmt->fetchAll();
          foreach ($results as $row){
               $category=new Category();
               $category->id=$row['id'];
               $category->categoryName=$row['name'];
               $categoreis[]=$category;
          }
      }catch(PDOException $e){
            echo $e->getMessage();
      }

      return $categoreis;
    }
}

 ?>
