<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/css/header.css">
  <link rel="stylesheet"  href="<?php echo base_url();?>/asset/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/fontawesome/css/all.min.css" />
  <title>Admin</title>
</head>
<body>
  <header>
      <div class="header-top">
       <h1 class="btn btn-outline-success"  style="width:300px; color:white;margin-left:100px;padding:20px;font-size:20px;"> <i>User Name:</i> <?php echo $this->session->userdata('username');?></h1>
      </div>
      <div class="manu">
          <div class="logo"><img src="<?php echo base_url();?>/asset/images/logo.png" alt=""></div>
          <div class="navbar">
          <ul>
                      
                     
                    <br>   
                       
                       
                        <li><a id="btn" href="<?php echo site_url('user');?>"><i class="fas fa-portrait"></i> Post</a></li>
                    
                        <li><a id="btn" href="<?php echo site_url('user/logoutauthor');?>"><i class="fas fa-sign-out-alt"></i> <span>SingOut</span> </a></li>
                        </ul>
                </div>
              
           
      </div>
    
        <div class="box" >
       
        <?php
                          
                          $sts = $fetchauthor->status;
                           if($sts<=0){
                              ?>

                              <div style="font-weight:bolder; text-align:center;" class="alert alert-danger" role="alert">
                                Currently your Account is pending please wait for approve by the Admin!!!
                              </div>
                              <?php 
                              }
                           ?>
                      
        <table class="table " style="color:white;">
                <thead>
                  <tr>
                   
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">password</th>
                  
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
               
                  <tr class="">
                  
                    <td><?php echo $fetchauthor->name;?></td>
                   
                    <td><?php echo $fetchauthor->email;?></td>
                    <td><?php echo $fetchauthor->password;?></td>
                  
                    <td>

                    <a style="color: #00ff99;font-weight:900 ;" class="btn btn-outline-success" href="<?php echo site_url('user/editauthor/'.$fetchauthor->id)?>">UPDATE</a>
                        <a class="btn btn-outline-danger" href="<?php echo site_url('user/deleteauthor/'.$fetchauthor->id)?>">DELETE</a>
                        <a style="color: #00ff99;font-weight:900 ;" class="btn btn-outline-success"  href="<?php echo site_url('user/viewauthor/'.$fetchauthor->id)?>">VIEW</a>
                      


                        
                     </td>
                  </tr>
          
        
                </tbody>
              </table>
            
             
        </div>
    </header>


        </div>
    </div>
</body>
</html>