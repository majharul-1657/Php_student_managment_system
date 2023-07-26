<h1><i></i>All user <small> All user</small></h1>
    <ol class="breadcrumb">
     <li><a href="index.php?page=dashboard" class="active">dashboard</a></li>
                        
      <li class="ml-2"><i></i>All user</li>
     </ol>

<div class="table-responsive">
                    <table class="table table-hover table-bordered table-striped" id="data">
                        <thead>
                            <tr>
                                 <th>Name</th>
                                 <th>email</th> 
                                 <th>username</th> 
                                    
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        
                       $db_sinfo = mysqli_query($link, "SELECT * FROM `users`");

                       while($row = mysqli_fetch_assoc($db_sinfo)){?>

                   
                            <tr>
                                 <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['username'];?></td>
                                
 
                                    

                                </tr>

                            
                            <?php
                    }
                        ?>

                        </tbody>
                         
                </div>
                    </table>
                    </div>
                </div>