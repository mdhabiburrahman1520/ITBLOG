<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
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
          <div class="logo"><img src="asset/images/logo.png" alt=""></div>
          <div class="navbar">
          <ul>
                      
                      <li><a id="btn" href="admin"><i class="fas fa-tachometer-alt"></i> DASHBOARD</a></li>
                        <li><a id="btn" href="blog"><i class="fas fa-home"></i> Home</a></li>
                        <li><a id="btn" href="author"><i class="far fa-plus-square"></i> author</a></li>
                       
                        <li><a id="btn" href="post"><i class="fas fa-portrait"></i> Post</a></li>
                    
                        <li><a id="btn" href="<?php echo site_url('user/logoutauthor');?>"><i class="fas fa-sign-out-alt"></i> <span>SingOut</span> </a></li>
                        </ul>
                </div>
              
           
      </div>
        <div class="box">
      <div class="2" style="margin-left:100px;">
      <div class="row">
                    <label>Title</label>
                    <input type="text"
                     placeholder=" Title" 
                     id="title" 
                     name="title" 
                     value="<?php echo $viewpost->title;?>"
                    />
                  </div>
                  <div class="row">
                    <label>Date</label>
                    <input type="date" id="date" name="date"
                    value="<?php echo $viewpost->date;?>"
                     />
                  </div>
                  <div class="row">
                    <label>Image</label>
                    <input type="file" id="image" name="image" accept="image/*" />
                    <?php if($viewpost->image){?>
                  <img class="adminimg" src="<?php echo site_url('asset/uploads/'.$viewpost->image);?>" alt="">

                  <?php }?>
                  </div>
                  <div class="row">
                    <label>Post</label>
                    <input type="text" placeholder="Post" id="post" name="post"
                    value="<?php echo $viewpost->post;?>"
                     />
                     
                  </div>
                  <div class="row">
                    <label>Post by</label>
                    <input type="text" placeholder="Postby" id="post_by" name="post_by"
                    value="<?php echo $viewpost->post_by;?>" />
                  </div></div>
               
                  
            
           
        </div>
    </header>


        </div>
    </div>
</body>
</html>