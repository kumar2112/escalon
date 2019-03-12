<?php
require_once 'Model.php';
require_once 'Category.php';

Class Skills extends Model {
     protected $id;
     public $skill_name;
     public $category;

     public static function getSkillByCategory($category_id){
         $m=new Model();
         $skills=array();
         try {
            $sql="SELECT * FROM pj_categories_skills as skills left join pj_categories as cat on skills.category_id=cat.id WHERE skills.category_id=".$category_id;
            $stmt=$m->db->con->query($sql);
            $stmt->execute();
            $results=$stmt->fetchAll();
            foreach ($results as $row){
                  $skill=new Skills();
                  $skill->id=$row['id'];
                  $skill->skill_name=$row['name'];
                  $cat=new Category();
                  $cat->id=$row['id'];
                  $cat->categoryName=$row['name'];
                  $skill->category=$cat;
                  $skills[]=$skill;
            }
         }catch(PDOException $e){
               echo $e->getMessage();
         }
         return $skills;
     }
     
     public function getCategory(){
          return $this->category;
     }
}

 ?>
