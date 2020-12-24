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
       <h1 class="btn btn-outline-success"  style="width:300px; color:white;margin-left:100px;padding:20px;font-size:20px;">WElcome To Author</h1>
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
        <a style="color: #00ff99;font-weight:600 ;" class="btn btn-outline-success" href="<?php echo base_url()?>addauthor">ADD Author</a>
        <table class="table " style="color:white;">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">password</th>
                    <th scope="col">status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                foreach($fetchauthor as $author){
                  ?>
                  <tr class="">
                    <th scope="row"><?php echo $author->id;?></th>
                    
                    <td><?php echo  substr($author->username,0,10);?>..</td>
                    <td><?php echo  substr($author->name,0,10);?>..</td>
                    <td><?php echo  substr($author->email,0,10);?>..</td>
                    <td><?php echo  substr($author->password,0,10);?>..</td>
                    <td><?php echo $author->status;?></td>
                    <td>

                    <a style="color: #00ff99;font-weight:900 ;" class="btn btn-outline-success" href="<?php echo site_url('admin/editauthor/'.$author->id)?>">UPDATE</a>
                        <a class="btn btn-outline-danger" href="<?php echo site_url('admin/deleteauthor/'.$author->id)?>">DELETE</a>
                        <a style="color: #00ff99;font-weight:900 ;" class="btn btn-outline-success"  href="<?php echo site_url('admin/viewauthor/'.$author->id)?>">VIEW</a>
                       
         <?php 
         $sts = $author->status;
         if($sts<=0){
        
       ?>
       <a class="btn btn-outline-danger" href="<?php echo site_url('admin/approveauthor/'.$author->id)?>" role="button">APPORVE</a></td>
     <?php      
         }
         ?>
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