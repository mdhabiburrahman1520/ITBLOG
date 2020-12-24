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
       <h1 class="btn btn-outline-success"  style="width:300px; color:white;margin-left:100px;padding:20px;font-size:20px;"><?php echo $this->session->userdata('username');?> you can Post here</h1>
      </div>
      <div class="manu">
          <div class="logo"><img src="<?php echo base_url();?>/asset/images/logo.png" alt=""></div>
          <div class="navbar">
          <ul>
                      
                   
                       
                        <li><a id="btn" href="user/author"><i class="far fa-plus-square"></i> author</a></li>
                       
                      
                    
                        <li><a id="btn" href="<?php echo site_url('user/logoutauthor');?>"><i class="fas fa-sign-out-alt"></i> <span>SingOut</span> </a></li>
                        </ul>
                </div>
              
           
      </div>
        <div class="box">
       
        <?php
        $sts = $fetchauthor->status;
                           if($sts<=0){
                              ?>

                              <div style="font-weight:bolder;" class="alert alert-danger" role="alert">
                                Currently your Account is pending please wait for approve by the Admin!!!
                              </div>
                              <?php 
                              }else{
                           ?>
                        <a class="btn" href="<?php echo site_url('user/post');?>">Add Post</a>
                        <a class="addbtn" href="<?php echo base_url()?>user/addpost">ADD NEW</a>
                            <?php }?>
                           
        <table class="table " style="color:white;">
                <thead>
                    
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">image</th>
                    <th scope="col">post</th>
                    <th scope="col">date</th>
                    <th scope="col">post_by</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                foreach($fetchpost as $post){
                  ?>
                  <tr class="">
                    <th scope="row"><?php echo $post->id;?></th>
                    <td><?php echo  substr($post->title,0,20);?>..</td>
                    <td><img width="50px" src="<?php echo base_url().'asset/uploads/'.$post->image;?>"></td>
                    <td><?php echo  substr($post->post,0,20);?></td>
                    <td><?php echo $post->date;?></td>
                    <td><?php echo $post->post_by;?></td>
                    <td>

                    <a style="color: #00ff99;font-weight:900 ;" class="btn btn-outline-success"  href="<?php echo site_url('user/editpost/'.$post->id)?>">UPDATE</a>
                        <a class="btn btn-outline-danger" href="<?php echo site_url('user/deletepost/'.$post->id)?>">DELETE</a>
                        <a style="color: #00ff99;font-weight:900 ;" class="btn btn-outline-success"  href="<?php echo site_url('user/viewpost/'.$post->id)?>">VIEW</a>

                        
                     </td>
                  </tr>
          
                  <?php
          }
          ?>
                </tbody>
              </table>
            
              <?php echo $this->pagination->create_links();?>
        </div>
    </header>


        </div>
    </div>
</body>
</html>