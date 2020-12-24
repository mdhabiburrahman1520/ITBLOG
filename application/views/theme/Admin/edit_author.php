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
       <h1>WElcome To ADmin penal</h1>
      </div>
      <div class="manu">
          <div class="logo"><img src="asset/images/logo.png" alt=""></div>
          <div class="navbar">
          <ul>
                      
                     
                      <li><a id="btn" href="blog"><i class="fas fa-home"></i> Home</a></li>
                      <li><a id="btn" href="admin"><i class="fas fa-book-reader"></i> Header</a></li>
                      <li><a id="btn" href="post"><i class="fas fa-portrait"></i> Post</a></li>
                        <li><a id="btn" href="author"><i class="fas fa-at"></i> Author</a></li>
                        <li><a id="btn" href="contmesg"><i class="far fa-envelope"></i> Messags</a></li>
                        <li><a id="btn" href="aboutpage"><i class="fas fa-book-reader"></i> Aboutpage</a></li>
                        <li><a id="btn" href="popularartical"><i class="fas fa-newspaper"></i> Popurlar_artical</a></li>
                      
                        <li><a id="btn" href="<?php echo site_url('Admin/logout');?>"><i class="fas fa-sign-out-alt"></i> <span>SingOut</span> </a></li>
                        </ul>
                </div>
              
           
      </div>
        <div class="box">
        <form action="<?php echo site_url('admin/updateauthor/'.$editauthor->id);?>" method="post" enctype="multipart/form-data">
      
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
                     placeholder=" name" 
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
                     <div class="row">
                    <label>status</label>
                    <input type="type" placeholder="status" id="status" name="status"
                    value="<?php echo $editauthor->password;?>"
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