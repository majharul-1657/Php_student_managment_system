<?php
session_start();

require_once'./dbcon.php';


if(!isset($_SESSION['user_login'])){
    header('location: login.php');
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
<script type="text/javascript" src="../js/jquery-3.5.1.js"></script>
<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-md fixed-top bg-dark ">
        <div class="container">
            <div class=" ">
                <h1>
                    <a href="" class="text-light">SMS</a>
                </h1>
            </div>
            <ul class="navbar-nav">
                <li class="nave-item">
                    <a href="index.php" class="nav-link text-light">Welcome : majharul islam</a>
                </li>
                <li class="nave-item">
                    <a href="registration.php" class="nav-link text-light"> Add User</a>
                </li>
                <li class="nave-item">
                    <a href="index.php?page=user-profile" class="nav-link text-light">profile</a>
                </li>
                <li class="nave-item">
                    <a href="login.php" class="nav-link text-light">logout</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container-fluid" style="margin-top:100px; min-height:590px;">
        <div class="row">
            <div class="col-sm-3">
                <div class="list-group">
                    <a href="index.php?page=dashboard" class="list-group-item active">Dashboard</a>
                    <a href="index.php?page=add-student" class="list-group-item">Add student</a>
                    <a href="index.php?page=all-student" class="list-group-item">All student</a>

                    <a href="index.php?page=all-user" class="list-group-item">All user</a>

                </div>
            </div>
            <div class="col-sm-9">
               
      <?php  
                
                if (isset($_GET['page'])){
           $page = $_GET['page'].'.php';  
                }else{
                    $page = "dashboard.php";
                }
               
                
                
                if(file_exists($page)){
                    require_once $page;
                }else{
 
                require_once '404.php';
                }
        ?>
                
                
                
            </div>
        </div>
    </div>
    <footer class="footer-area text-center bg-primary" style="height:55px;">
        <p class="py-3">copy right @2022 student managment system All right Are Reserved!</p>
    </footer>
</body>

</html>