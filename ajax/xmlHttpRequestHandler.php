<?php 
   require_once 'Model/Skills.php';
   $category_id=$_POST['cat_id'];
   $skills=Skills::getSkillByCategory($category_id);
   
   $html='<div class='row'>';
   $i=0;
   foreach($skills as $skill){
        
        $html.='<div class="col-md-3">';
        $html.='<label>'.$skill['name'].'</label>';
        $html.='<input type="range" name="points" min="1" max="5" name="evalauate_range[]" id="evalauate_range_'.$i.'" >';
        $html.='<div/>';
   }
   $html.='<div/>';

   echo $html;
?>
