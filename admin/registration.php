<?php 
require_once'./dbcon.php';
 session_start();
if(isset($_POST['registration'])){
    
    $name =     $_POST['name'];
    $Email =    $_POST['Email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conform_password = $_POST['conform_password'];
    
//     $photo = explode('.',$_FILES['photo']['name']);
//    $photo = end($photo);
//     $photo_name = $username.'.'.$photo;
    
     
    
    
    $input_error = array();

    if(empty($name)){
        $input_error['name'] = "the name filed is required";
    }
    
    
    if(empty($Email)){
        $input_error['Email'] = "the name filed is required";
    }
    
    if(empty($password)){
        $input_error['password'] = "the name filed is required";
    }
    
    
    if(empty($username)){
        $input_error['username'] = "the name filed is required";
    }
    
    
    
    if(empty($conform_password)){
        $input_error['conform_password'] = "the name filed is required";
    }
    
     if(count($input_error)== 0){
 
         $emal_chack = mysqli_query($link, "SELECT * FROM `users` WHERE `email` = '$Email';");
 
         if(mysqli_num_rows($emal_chack)== 0){
             
             $username_chack = mysqli_query($link, "SELECT * FROM `users` WHERE `username` = '$username';");

            if(mysqli_num_rows($username_chack) == 0){
                if (strlen($password) > 4){
                    
                   if ($password == $conform_password){
                      
//                       $password = md5($password);
                       
                       $query = "INSERT INTO `users`(`name`, `email`, `username`, `password`, `status`) VALUES  ('$name','$Email','$username','$password','inactive')";
                       
                       $result = mysqli_query($link,$query);
                       
                       if ($result){
                           $_SESSION['data_insert_success'] = "data insert success";
                       }else{
                           echo 'no';
                       }
                       
                       
                    }else{
                       $password_not_match = "conform password not match";
                   } 
                    
                 }else{
                    $password_l = "more than 4 characters";
                }
                
                
                if(strlen($username) > 4){
                 }else{
                  $username_l = "username more than 4 characters";
                }
             
                echo '';
                
            }else{
                $username_error = "this username exits";
            }

             
      }else{
           $Email_error = "email is not mach";         
  }
     
      
     } 
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
        <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
   <div class="container">
       <div class="  ml-5">
       <h1>user registration</h1>
       <?php if(isset($_SESSION['data_insert_success'])){echo '<div class = " alertalert-success">'.$_SESSION['data_insert_success'].' </div>';}?>
     
 
       <hr/>
       <div class="row">
           <div class="col-sm-4">
               <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                   <div>
                       <div class="form-group">
                           <label for="" class="control-label">name</label>
                           <input class="form-control" type="text" name="name" value="<?php if(isset($name)){echo $name;}?>" placeholder="Enter your name" id="name">
                       </div>
                       
                   </div>
                   <label class="error">
                           
                           <?php  if(isset($input_error['name'])){echo $input_error['name'];}?>
                    
                       </label>
                    <div>
                       <div class="form-group">
                           <label for="" class="control-label">Email</label>
                           <input class="form-control" type="text" name="Email" value="<?php if(isset($Email)){echo $Email;}?>" placeholder="Enter your mail" id="Email">
                       </div>
                   </div>
                    <label class="error">
                           
                           <?php  if(isset($input_error['Email'])){echo $input_error['Email'];}?>
                    
                       </label>
                       <label class="error">
                           
                           <?php  if(isset($Email_error)){echo $Email_error;}?>
                    
                       </label>
                    <div>
                       <div class="form-group">
                           <label for="" class="control-label">username</label>
                           <input class="form-control" value="<?php if(isset($username)){echo $username;}?>" type="text" name="username" placeholder="Enter your usernamde" id="usernamde">
                       </div>
                   </div>
                   
                   <label class="error">
                    <?php  if(isset($input_error['username'])){echo $input_error['username'];}?>
                        </label>
                    
                   
<!--
                   <label class="error">
                 <?php  if(isset($username_error)){echo $username_error['username'];} ?>
                   </label>
-->
                   
                   <label class="error">
                 <?php  if(isset($username_l)){echo $username_l;}?>
                   </label>
                    <div>
                       <div class="form-group">
                           <label for="" class="control-label">password</label>
                           <input class="form-control" value="<?php if(isset($password)){echo $password;}?>" type="password" name="password" placeholder="Enter your password" id="password">
                       </div>
                   </div>
                    <label class="error">
                    <?php  if(isset($input_error['password'])){echo $input_error['password'];}?>
                        </label>
                    
                    
                    <label class="error">
                    <?php  if(isset($password_l)){echo $password_l;}?>
                              </label>
                      
                      
                      
                      <div>
                       <div class="form-group">
                           <label for="" class="control-label">conform password</label>
                           <input class="form-control" value="<?php if(isset($conform_password)){echo $conform_password;}?>" type="conform_password" name="conform_password" placeholder="Enter conform password" id="name">
                       </div>
                   </div>
                    
                    <label class="error"><?php  if(isset($input_error['conform_password'])){echo $input_error['conform_password'];}?></label>
                    
                    <label class="error"><?php  if(isset($password_not_match)){echo $password_not_match;}?></label>

                    <div>
                       <div class="form-group">
                           <label for="photo" class="control-label">photo</label>
                           <input class="form-control" type="file" name="FILES"  >
                       </div>
                   </div>
                                                              
                   <div class="col-sm-4">
                       <input type="submit" value="registration" name="registration" class="btn btn-primary">
                   </div>
                   <p>if you an account? then please <a href="index.php">login</a></p>
               </form>
                 <hr/>
               <footer>
                   <p>copyright &copy:2022- <?= date('y, m,y ')?>All right Reserved</p>
               </footer>
           </div>
       </div>
       </div>
   </div>
</body>
</html>