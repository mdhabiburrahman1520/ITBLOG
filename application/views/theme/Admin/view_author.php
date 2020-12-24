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
       <h1>WElcome To view Author</h1>
      </div>
      <div class="manu">
          <div class="logo"><img src="<?php echo base_url();?>/asset/images/logo.png" alt=""></div>
          <div class="navbar">
          <ul>
                      
                    
                      <li><a id="btn" href="<?php echo base_url();?>blog"><i class="fas fa-home"></i> Home</a></li>
                      <li><a id="btn" href="<?php echo base_url();?>admin"><i class="fas fa-book-reader"></i> Header</a></li>
                      <li><a id="btn" href="<?php echo base_url();?>post"><i class="fas fa-portrait"></i> Post</a></li>
                        <li><a id="btn" href="<?php echo base_url();?>author"><i class="fas fa-at"></i> Author</a></li>
                        <li><a id="btn" href="<?php echo base_url();?>contmesg"><i class="far fa-envelope"></i> Messags</a></li>
                        <li><a id="btn" href="<?php echo base_url();?>aboutpage"><i class="fas fa-book-reader"></i> Aboutpage</a></li>
                        <li><a id="btn" href="<?php echo base_url();?>popularartical"><i class="fas fa-newspaper"></i> Popurlar_artical</a></li>
                      
                        <li><a id="btn" href="<?php echo site_url('Admin/logout');?>"><i class="fas fa-sign-out-alt"></i> <span>SingOut</span> </a></li>
                        </ul>
                </div>
              
           
      </div>
        <div class="box">
        <div class="cont"style="margin-left:100px;">
        <div class="row">
        

                    <label style="margin-left:-10px;">user</label>
                    <input  type="text"
                     placeholder=" username" 
                     id="username" 
                     name="username" 
                     value="<?php echo $viewauthor->username;?>"
                     />
                     <div class="row">
                    <label>name</label>
                    <input type="text"
                     placeholder=" name" 
                     id="name" 
                     name="name" 
                     value="<?php echo $viewauthor->name;?>"
                     />
                  </div>
                  <div class="row">
                    <label>email</label>
                    <input type="email" id="email" name="email"
                    value="<?php echo $viewauthor->email;?>"
                     />
                  </div>
             
                  <div class="row">
                    <label>password</label>
                    <input type="password" placeholder="password" id="password" name="password"
                    value="<?php echo $viewauthor->password;?>"
                     />
                     
                  </div>
                  <div class="row">
                    <label>status</label>
                    <input type="type" placeholder="status" id="status" name="status"
                    value="<?php echo $viewauthor->status;?>"
                     />
            
           </div>
        </div>
    </header>


        </div>
    </div>
</body>
</html>