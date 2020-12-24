<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/css/header.css">
  <link rel="stylesheet"  href="<?php echo base_url();?>/asset/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/fontawesome/css/all.min.css" />>
  <title>Admin</title>
</head>
<body>
  <header>
      <div class="header-top">
       <h1>WElcome To add author</h1>
      </div>
      <div class="manu">
          <div class="logo"><img src="asset/images/logo.png" alt=""></div>
          <div class="navbar">
          <ul>
                      
                      <li><a id="btn" href="deshboad"><i class="fas fa-tachometer-alt"></i> DASHBOARD</a></li>
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
           <form action="<?php base_url();?>saveaddauthor" method="post" enctype="multipart/form-data">
                <div class="row">
                    <label>username</label>
                    <input type="text" placeholder=" username" id="username" name="username" />
                  </div>
                  <div class="row">
                    <label>name</label>
                    <input type="text" id="name" placeholder="name"  name="name" />
                  </div>
                  <div class="row">
                    <label>email</label>
                    <input type="email" id="email" placeholder=" email"  name="email" />
                  </div>
                  <div class="row">
                    <label>password</label>
                    <input type="password" placeholder=" password"  id="password" name="password"  />
                  </div>
                  <div class="row">
                    <label>status</label>
                    <input type="text" placeholder=" status"  id="status" name="status"  />
                  </div>
               
                    <div class="Submit-btn">
                        <input type="submit"  Value="Send" id="send" name="send">
                        <input type="reset"  Value="Clear" id="clear" name="clear">
                      </div>
            </form>
           
        </div>
    </header>


        </div>
    </div>
</body>
</html>