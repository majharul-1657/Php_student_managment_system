

<h1><i></i>user profile <small>my profile</small></h1>
                    <ol class="breadcrumb">
                        <a href="index.php?page=dashboard"><li class="active"><i></i>Dashboard</li>
</a>
                        <li class="active ml-2"><i></i>profile</li>
                    </ol>


<?php
$session_user = $_SESSION['user_login'];

$user_data = mysqli_query($link, "SELECT * FROM `users` WHERE `username` = '$session_user'");
$user_row = mysqli_fetch_assoc($user_data);
 


?>

     <div class="row">
 <div class="col-12">
<table class="table table-bordered">
    <tr>
        <td>user id</td>
        <td><?= $user_row['id']?></td>
    </tr>
    <tr>
        <td>name</td>
        <td><?= $user_row['name']?></td>
    </tr>
    <tr>
        <td>username</td>
        <td><?= $user_row['username']?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?= $user_row['email']?></td>
    </tr>
    <tr>
        <td>status</td>
        <td><?= $user_row['status']?></td>
    </tr>
     
     
                  </table>
                  <a href="" class="float-right">Edit profile</a>
                        </div>
                    </div>
 