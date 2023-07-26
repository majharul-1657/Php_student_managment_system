<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div class="container">
        <a class="btn btn-primary float-right mt-3" href="admin/login.php" >login</a>
        <br>
        <br>
        <h1 class="text-center">Welcome to student Management System</h1>
        
        <div class="row">
            <div class="col-sm-4  col-sm-offset-4 ">
                <form action="" method="post">
            <table class="table table-border bg-light">
                <tr>
                    <td colspan="2" class="text-center"><label for="" >Student information</label></td>
                </tr>
                <tr>
                    <td><label for="Choose">choose class</label></td>
                    <td>
                        <select name="choose" value="choose" id="choose" class="form-control"> 
                           <option value="">select</option> 
                            <option value="1st">1st</option>
                             <option value="2nd"> 2nd</option>
                              <option value="3rd">3rd</option>
                               <option value="4th">4th</option>
                                <option value="5th">5th</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> <label for="roll">Roll</label></td>
                     <td><input type="text" name="roll" class="form-control" pattern="[0-9]{6}" placeholder="Roll"></td>

                </tr>
                <tr>
                    <td colspan="2" class="text-center"><input class="btn btn-defolt" type="submit" value="show_info" name="show_info"></td>
                     <td></td>
                </tr>
            </table>
        </form>
            </div>
        </div>
        
<?php

require_once'./admin/dbcon.php';

if(isset($_POST['show_info'])){

$choose = $_POST['choose'];
$roll = $_POST['roll'];
$ressul = mysqli_query($link, "SELECT * FROM `student_inf` WHERE `class` = '$choose' and `roll` = '$roll'");

 if(mysqli_num_rows($ressul) == 1){

    $row = mysqli_fetch_assoc($ressul);
      ?>
     <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
<table class="table table-bordered">
    <tr>
        <td>name</td>
        <td><?= $row['name']?></td>
     </tr>
    <tr>
        <td>roll</td>
        <td><?= $row['roll']?></td>
     </tr>
    <tr>
        <td>class</td>
        <td><?= $row['class']?></td>
     </tr>
    <tr>
        <td>city</td>
        <td><?= $row['city']?></td>
     </tr>
     
</table>
            </div>
        </div>


     <?php

 } else {
     echo 'data not found';
 }


}


?>
       
    </div>
    
    
    <script src="js/bootstrap.min.js"></script>
</body>
</html>