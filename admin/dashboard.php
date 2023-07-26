         
                <div class="content">
                    <h1><i></i>Dashboard <small>Statistics Overview</small></h1>
                    <ol class="breadcrumb">
                        <li class="active"><i></i>Dashboard</li>
                    </ol>

<?php
$count_student = mysqli_query($link, "SELECT * FROM `student_inf`");
$total_student = mysqli_num_rows($count_student);

$count_users = mysqli_query($link, "SELECT * FROM `users`");
$total_users = mysqli_num_rows($count_users);

?>



                    <div class="row ">
                        <div class="col-sm-4" style="border-radius: 5%;">
                            <div class="panel panel-primary">
                                <div class="panel-heading bg-primary" style="height:110px; border-top-right-radius: 5px; border-top-left-radius:5px">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <i>
                                                <h5 class=" mt-4">majharul</h5>
                                            </i>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="float-right mr-2" style="font-size:50px;">
                                                <?= $total_student;?>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="float-right mr-2 mb-1">
                                                <h5>All student</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="index.php?page=all-student" class=" ">
                                    <div class="panel-footer  " style="border-bottom: 2px solid beige; border-right: 2px solid beige; border-left: 2px solid beige;">
                                        <span class="pull-left">All student</span>
                                        <span class="float-right"><i>ma</i></span>
                                    </div>
                                </a>
                            </div>

                        </div>
                      
                        <div class="col-sm-4" style="border-radius: 5%;">
                            <div class="panel panel-primary">
                                <div class="panel-heading bg-primary" style="height:110px; border-top-right-radius: 5px; border-top-left-radius:5px">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <i>
                                                <h5 class=" mt-4">majharul</h5>
                                            </i>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="float-right mr-2" style="font-size:50px;">
                                                <?= $total_users?>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="float-right mr-2 mb-1">
                                                <h5>All  users</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="index.php?page=all-user" class=" ">
                                    <div class="panel-footer  " style="border-bottom: 2px solid beige; border-right: 2px solid beige; border-left: 2px solid beige;">
                                        <span class="pull-left">All users</span>
                                        <span class="float-right"><i>ma</i></span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                    <hr/>
                    <h3>new student</h3>
                    <div class="table-responsive">
                    <table class="table table-hover table-bordered table-striped" id="data">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                 <th>Roll</th> 
                                 <th>class</th> 
                                  <th>City</th>
                                  <th>Contact</th>
                                  <th>Photo</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        
                       $db_sinfo = mysqli_query($link, "SELECT * FROM `student_inf`");

                       while($row = mysqli_fetch_assoc($db_sinfo)){?>

                   
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['roll'];?></td>
                                <td><?php echo $row['class'];?></td>
                                 <td><?php echo $row['city'];?></td>
                                  <td><?php echo $row['pcontact'];?></td>
                                  <td><img src="../images/" alt="imag"></td>
                            </tr>

                            
                            <?php
                    }
                        ?>

                        </tbody>
                         
                </div>
                    </table>
                    </div>
                </div>