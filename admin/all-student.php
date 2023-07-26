<h1><i></i>All student <small> All student</small></h1>
    <ol class="breadcrumb">
     <li><a href="index.php?page=dashboard" class="active">dashboard</a></li>
                        
      <li class="ml-2"><i></i>All student</li>
     </ol>

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
                                  <th>action</th>

                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        
                       $db_sinfo = mysqli_query($link, "SELECT * FROM `student_inf` ");

                       while($row = mysqli_fetch_assoc($db_sinfo)){?>

                   
                            <tr>
                            <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['roll'];?></td>
                                <td><?php echo $row['class'];?></td>
                                 <td><?php echo $row['city'];?></td>
                                  <td><?php echo $row['pcontact'];?></td>
                                  <td><img src="../images/" alt="imag"></td>

                                   <td>
                                    <a href="index.php?page=update-student&id=<?php echo base64_encode($row['id']);?>"> Edit</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="delete-student.php?id=<?php echo base64_encode($row['id']);?>">Delete</a>

                                  </td>

                                </tr>

                            
                            <?php
                    }
                        ?>

                        </tbody>
                         
                </div>
                    </table>
                    </div>
                </div>