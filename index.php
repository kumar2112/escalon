
<?php
require_once 'model/Category.php';
$categories=Category::getCategories();
//echo "<pre>";
//print_r($categories);
?>
<!DOCTYPE HTML>
<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>Escalon</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container-fluid">
              <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                       <form>
                          <div class="form-group">
                           <label for="txtFirstName">First Name</label>
                           <input type="text" class="form-control" id="txtFirstName" name="txtFirstName" aria-describedby="" placeholder="Enter First Name">
                          </div>
                          <div class="form-group">
                           <label for="txtLastName">Last Name</label>
                           <input type="text" class="form-control" id="txtLastName" name="txtLastName" placeholder="Enter Last Name">
                          </div>
                          <div class="form-group">
                           <label for="txtEmail">Email</label>
                           <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="Enter Email">
                          </div>
                          <div class="form-group">
                           <label for="txtPhone">Phone</label>
                           <input type="text" class="form-control" id="txtPhone" name="txtPhone" placeholder="Enter Phone">
                          </div>
                          <div class="form-group">
                           <label for="txtStreet">Street</label>
                           <input type="text" class="form-control" id="txtStreet" name="txtStreet" aria-describedby="" placeholder="Enter Street">
                          
                          </div>
                          <div class="form-group">
                           <label for="txtCity">City</label>
                           <input type="text" class="form-control" id="txtCity" name="txtCity" aria-describedby="" placeholder="Enter City">
                           
                          </div>
                          <div class="form-group">
                           <label for="txtZip">Zip</label>
                           <input type="text" class="form-control" id="txtZip" name="txtZip" aria-describedby="" placeholder="Enter Zip">
                           
                          </div>
                          <div class="form-group">
                             <label for="txtState">State</label>
                             <input type="email" class="form-control" id="txtState" name="txtState" aria-describedby="" placeholder="Enter State">
                             
                          </div>
                          <div class="form-group">
                            <label for="selCategory">Categories</label>
                            <select class="form-control" id="selCategory" name="selCategory">
                                  <?php foreach ($categories as $cat){ ?>
                                      <option value="<?php echo $cat->getId() ?>"><?php echo $cat->categoryName ?></option>
                                  <?php } ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Skills</label>
                            <div id="evaluate_skills">
                            </div>
                          </div>

                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
              </div>
        </div>
    </body>
</html>
<script>
    function evaluateSkills(cateId){
         $.ajax({
             url :'ajax/fill_Category.php',
             type : 'post',
             data :  '{cat_id:cateId}',
             success :function(response){
                  $("#evaluate_skills").html(response);
             }
         });
    }
</script>
