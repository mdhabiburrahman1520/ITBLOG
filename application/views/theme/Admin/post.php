<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/css/header.css">
  <link rel="stylesheet"  href="<?php echo base_url();?>/asset/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/fontawesome/css/all.min.css" />
  <title>ITBLOG</title>
</head>
<body>
  <header>
      <div class="header-top">
       <h1 class="btn btn-outline-success"  style="width:300px; color:white;margin-left:100px;padding:20px;font-size:20px;">WElcome To Post</h1>
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
        <a style="color: #00ff99;font-weight:600 ;" class="btn btn-outline-success" href="<?php echo base_url()?>addpost"><i>ADD POST</i></a>
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
                    <td><?php echo  substr($post->post,0,20);?>..</td>
                    <td><?php echo $post->date;?></td>
                    <td><?php echo $post->post_by;?></td>
                    <td>

                    <a style="color: #00ff99;font-weight:900 ;" class="btn btn-outline-success" href="<?php echo site_url('admin/editpost/'.$post->id)?>">Update</a>
                        <a class="btn btn-outline-danger" href="<?php echo site_url('admin/deletepost/'.$post->id)?>">Delete</a>
                        <a style="color: #00ff99;font-weight:900 ;" class="btn btn-outline-success"  href="<?php echo site_url('admin/viewpost/'.$post->id)?>">View</a>

                        
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