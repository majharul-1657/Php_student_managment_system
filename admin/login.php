<?php
require_once'./dbcon.php';

session_start();

if (isset($_POST['login'])){
 
$username = $_POST['username'];  
$password = $_POST['password'];

 $username_check = mysqli_query($link, "SELECT * FROM `users` WHERE `username` = '$username'");

    if (mysqli_num_rows($username_check ) > 0){
 $row = mysqli_fetch_assoc($username_check);
 
        if($row['password'] == ($password)){
 
        if($row['status'] == 'active'){
            
            $_SESSION['user_login'] = $username;
            
               header('location: index.php');
        
        }else{
 
        $status_inactive = "your status inactive";
        }
        
        }else{
 $rong_password = "Rong password";
        }
        
    }else{
 $username_not_found = "Username not found";
     
    }
    
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="container ">
        <h1 class="text-center">Student Management System</h1>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <h2 class="text-center">Admin login form</h2>
                <form action="login.php" method="post" class="text-center">
                    <div>
                        <input type="text" placeholder="Username" name="username" class="form-control" required="" value="<?php echo $username?>">
                    </div>
                    <div>

                        <input type="text" name="password" placeholder="password" class="form-control">

                    </div>
                    <br>
                    <div>
                        <input type="submit" value="login" name="login" class="btn btn-info float-right">
                    </div>
                </form>
            </div>
        </div>

        <?php if(isset($username_not_found)){echo '<div class="alert alert-danger col-sm-4 col-sm-offset-4">'.$username_not_found.'</div';} ?>


        <?php if(isset($rong_password)){echo '<div class="alert alert-danger col-sm-4 col-sm-offset-4">'.$rong_password.'</div';} ?>


        <?php if(isset($status_inactive)){echo '<div class="alert alert-danger col-sm-4 col-sm-offset-4">'.$status_inactive.'</div';} ?>
    </div>
</body>

</html>