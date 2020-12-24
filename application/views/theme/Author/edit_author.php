<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/css/header.css">
  <link rel="stylesheet"  href="<?php echo base_url();?>/asset/js/bootstrap.min.js">
    <link rel="stylesheet" type="<?php echo base_url();?>/text/css" href="<?php echo base_url();?>/asset/css/bootstrap.min.css">
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
                      
                      <li><a id="btn" href="admin"><i class="fas fa-tachometer-alt"></i> DASHBOARD</a></li>
                        <li><a id="btn" href="blog"><i class="fas fa-home"></i> Home</a></li>
                        <li><a id="btn" href="user/author"><i class="far fa-plus-square"></i> author</a></li>
                       
                        <li><a id="btn" href="user/post"><i class="fas fa-portrait"></i> Post</a></li>
                    
                        <li><a id="btn" href="login"><i class="fas fa-sign-out-alt"></i> <span>SingOut</span> </a></li>
                        </ul>
                </div>
              
           
      </div>
        <div class="box">
        <form action="<?php echo site_url('user/updateauthor/'.$editauthor->id);?>" method="post" enctype="multipart/form-data">
      
                <div class="row">
                    <label>user</label>
                    <input type="text"
                     placeholder=" username" 
                     id="username" 
                     name="username" 
                     value="<?php echo $editauthor->username;?>"
                     />
                  </div>
                  <div class="row">
                    <label>name</label>
                    <input type="text"
                     placeholder=" rname" 
                     id="name" 
                     name="name" 
                     value="<?php echo $editauthor->name;?>"
                     />
                  </div>
                  <div class="row">
                    <label>email</label>
                    <input type="email" id="email" name="email"
                    value="<?php echo $editauthor->email;?>"
                     />
                  </div>
             
                  <div class="row">
                    <label>password</label>
                    <input type="password" placeholder="password" id="password" name="password"
                    value="<?php echo $editauthor->password;?>"
                     />
                     
                  </div>
                  <div class="row">
                    <label>status</label>
                    <input type="text" placeholder="status" id="status" name="status"
                    value="<?php echo $editauthor->status;?>"
                     />
                     
                  </div>
              
                    <div class="Submit-btn">
                    <input type="submit"  valuee="Update" id="send" name="Update">
                   <input type="reset"  valuee="Reset" id="clear" name="Reset">
                      </div>
            </form>
           
        </div>
    </header>


        </div>
    </div>
</body>
</html>