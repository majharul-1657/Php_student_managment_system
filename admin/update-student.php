     <h1><i></i>Add student <small> update student</small></h1>
    <ol class="breadcrumb">
     <li><a href="index.php?page=dashboard" class="active">dashboard</a></li>
     <li><a href="index.php?page=all-student" class="active">All student</a></li>
              
      <li class="ml-2"><i></i>update student</li>
     </ol>


   <?php 

require_once'./dbcon.php';

$id = base64_decode($_GET['id']);
$db_data = mysqli_query($link, "SELECT * FROM `student_inf` WHERE `id` = '$id'");
$db_row = mysqli_fetch_assoc($db_data);
 

 
if(isset($_POST['update-student'])){
    $name= $_POST['name'];
    $roll= $_POST['roll'];
    $class = $_POST['class'];
     $city= $_POST['city'];
    $pcontact = $_POST['pcontact']; 
       
        $query = "UPDATE `student_inf` SET `name`='$name ',`roll`='$roll',`class`='$class',`city`='$city',`pcontact`='$pcontact' WHERE `id`='$id'";
  
          $resultyt = mysqli_query($link, $query);

          if($resultyt){
              header ('location: index.php?page=all-student');
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
                                   <input type="text" name="name" placeholder="student name" value=" <?= $db_row['name']?>" id="name" class="form-control" required="" >
                               </div>
                               <div class="form-group">
                                   <label for="roll">student roll</label>
                                   <input type="text" name="roll" placeholder="roll" id="roll" class="form-control" pattern="[0-9]{6}"  required=""  value=" <?= $db_row['roll']?>">
                               </div>
                               <div class="form-group">
                                   <label for="city">City</label>
                                   <input type="text" name="city" placeholder="city" id="city" class="form-control"   required="" value=" <?= $db_row['city']?>">
                               </div>
                               <div class="form-group">
                                   <label for="name"> pcontact</label>
                                   <input type="text" name="pcontact" placeholder="01*********" id="pcontact" class="form-control" pattern="01[1|5|6|7|8|9][0-9]{8}"  required="" value=" <?= $db_row['pcontact']?>">
                               </div>
                               <div class="form-group">
                                   <label for="name">class</label>
                                  <select 
                                      class="form-control"
                                  name="class" id="class"  required="" >
                                      <option value="">select</option>
                         <option  <?php echo $db_row['class'] == '1st' ? 'selected = ""':'';?> value="1st">1st</option>
                                        <option  <?php echo $db_row['class'] == '2nd ' ? 'selected = ""':'';?> value="2nd">2nd</option>
                                         <option  <?php echo $db_row['class'] =='3rd' ? 'selected = ""':'';?> value="3rd">3rd</option>
                                          <option  <?php echo $db_row['class'] == '4th' ? 'selected = ""':'';?> value="4th">4th</option>
                                          <option  <?php echo $db_row['class'] == '5th' ? 'selected = ""':'';?> value="5th">4th</option>

                                  </select>
                               </div>
                               <div class="form-group">
                                   <input type="submit" value="update student" name="update-student" class="btn btn-primary float-right mb-2">
                               </div>
                           </form>
                       </div>
                   </div>