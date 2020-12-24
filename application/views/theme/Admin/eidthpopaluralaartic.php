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
           
            <div id="process">
                <ul>
                  <li ><a style="color:white;" href="popuralaartical">ADD NEW</a></li>
                 </ul>
           
                    <table class="c_table" >
                      <tr >
                         
                         <td>Title</td>
                         <td>Details</td>
                         <td>number</td>
                         <td>Action</td>
                       </tr>
              
                     <tr>
                                 <td>Titel</td>
                                 <td>detel</td>
                                 <td>number</td>
                     <td>
                          <a href=""> <button>Edit</button></a>
                          <a href=""> <button>Delete</button></a>
                       </td>
                   </tr>
           
                         
           
                    </table>
           
           
                 <!-- PROCESS-->
           
                 </div><!--#process -->
                </div>
           
       
    </header>


        </div>
    </div>
</body>
</html>