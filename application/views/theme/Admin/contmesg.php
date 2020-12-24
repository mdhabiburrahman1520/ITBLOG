<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/css/header.css">
    <link rel="stylesheet"  href="<?php echo base_url();?>asset/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/fontawesome/css/all.min.css" />
    <title>ITBLOG</title>
</head>
<body>
    <header>
        <div class="header-top">
         <h1 class="btn btn-outline-success"  style="width:300px; color:white;margin-left:100px;padding:20px;font-size:20px;">Welcome To Messages</h1>
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
     
        <div class="box"style="width:1080px;margin-left:230px;">
        
        <table class="table " style="color:white;">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Message</th>
                   
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                foreach($fetchcontmesg as $msg){
                ?>
                  <tr class="">
                    <th scope="row"><?php echo $msg->id;?></th>
                    <td><?php echo $msg->name;?></td>
                    <td><?php echo  substr($msg->email,0,50);?></td>
                    <td><?php  echo  substr($msg->address,0,50);?></td>
                    <td><?php echo  substr($msg->message,0,50);?></td>
                   
                    <td>
                   
                        <a class="btn btn-outline-danger" href="<?php echo site_url('admin/deletecontmesg/'.$msg->id)?>">DELETE</a>
                        <a  style="color: #00ff99;font-weight:900 ;" class="btn btn-outline-success"  href="<?php echo site_url('admin/viewcontmesg/'.$msg->id)?>">VIEW</a>
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