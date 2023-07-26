     <h1><i></i>Add student <small> Add new student</small></h1>
    <ol class="breadcrumb">
     <li><a href="index.php?page=dashboard" class="active">dashboard</a></li>
                        
      <li class="ml-2"><i></i>Add student</li>
     </ol>
   <?php 

require_once'./dbcon.php';



  if(isset($_POST['add-student'])){
  $name= $_POST['name'];
  $roll= $_POST['roll'];
  $class = $_POST['class'];
   $city= $_POST['city'];
  $pcontact = $_POST['pcontact']; 
     
      $query = "INSERT INTO `student_inf`(`name`, `Roll`, `class`,`city`, `pcontact`)VALUES('$name','$roll','$class','$city','$pcontact')";

        $resultyt = mysqli_query($link, $query);
      
     if($resultyt){
        $succes = "data insert success";
    }else{
        $error = "wrong";
    }
 }

 ?>       

 
<div class="row">

<?php  if (isset($success)){echo '<p class="alert alert-success col-sm-6">'.$succes.'</p>';}?>
 <?php if (isset($error)){echo '<p class="alert alert-danger col-sm-6">'.$error.'</p>';}?>
</div>

 
                      <div class="row">
                       <div class="col-sm-6">
                           <form action="" method="post" enctype="multipart/form-data">
                               <div class="form-group">
                                   <label for="name">student name</label>
                                   <input type="text" name="name" placeholder="student name" id="name" class="form-control" required="" >
                               </div>
                               <div class="form-group">
                                   <label for="roll">student roll</label>
                                   <input type="text" name="roll" placeholder="roll" id="roll" class="form-control" pattern="[0-9]{6}"  required=""  >
                               </div>
                               <div class="form-group">
                                   <label for="city">City</label>
                                   <input type="text" name="city" placeholder="city" id="city" class="form-control"   required="" >
                               </div>
                               <div class="form-group">
                                   <label for="name"> pcontact</label>
                                   <input type="text" name="pcontact" placeholder="01*********" id="pcontact" class="form-control" pattern="01[1|5|6|7|8|9][0-9]{8}"  required="" >
                               </div>
                               <div class="form-group">
                                   <label for="name">class</label>
                                  <select 
                                      class="form-control"
                                  name="class" id="class"  required="" >
                                      <option value="">select</option>
                                       <option value="">1st</option>
                                        <option value="">2nd</option>
                                         <option value="">3rd</option>
                                          <option value="">4th</option>
                                  </select>
                               </div>
                               <div class="form-group">
                                   <input type="submit" value="Add student" name="add-student" class="btn btn-primary float-right mb-2">
                               </div>
                           </form>
                       </div>
                   </div>