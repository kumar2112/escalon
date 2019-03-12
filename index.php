
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
                           <label for="exampleInputEmail1">First Name</label>
                           <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                           <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                          <div class="form-group">
                           <label for="exampleInputPassword1">Last Name</label>
                           <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <div class="form-group">
                           <label for="exampleInputPassword1">Email</label>
                           <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <div class="form-group">
                           <label for="exampleInputPassword1">Phone</label>
                           <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <div class="form-group">
                           <label for="exampleInputEmail1">Street</label>
                           <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                           <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                          <div class="form-group">
                           <label for="exampleInputEmail1">City</label>
                           <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                           <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                          <div class="form-group">
                           <label for="exampleInputEmail1">Zip</label>
                           <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                           <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                          <div class="form-group">
                             <label for="exampleInputEmail1">State</label>
                             <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                             <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Categories</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                  <?php foreach ($categories as $cat){ ?>
                                      <option value="<?php echo $cat->getId() ?>"><?php echo $cat->categoryName ?></option>
                                  <?php } ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Skills</label>
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
             url :'ajax/fill_Category.php'
             type : 'post',
             success :function(response){
                  $("#evaluate_skills").html(response);
             }
         });
    }
</script>
