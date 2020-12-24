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
            <div class="logo"><img src="<?php echo base_url();?>/asset/images/logo.png" alt=""></div>
            <div class="navbar">
            <ul>
                      
                     
                      <li><a id="btn" href="<?php echo base_url();?>blog"><i class="fas fa-home"></i> Home</a></li>
                      <li><a id="btn" href="<?php echo base_url();?>admin"><i class="fas fa-book-reader"></i> Header</a></li>
                       
                        <li><a id="btn" href="<?php echo base_url();?>post"><i class="fas fa-portrait"></i> Post</a></li>
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
                  <label>Header</label>
                  <input
                    type="text"
                    placeholder="Header"
                    id="header"
                    name="header"
                    value="<?php echo $viewheader->header;?>"
                  />
                </div>
                <div class="row">
                  <label>Header Content1</label>
                  <input
                    type="text"
                    placeholder="Header Content"
                    id="header_content1"
                    name="header_content1"
                    value="<?php echo $viewheader->header_content1;?>"
                  />
                </div>
                <div class="row">
                  <label>Header Content2</label>
                  <input
                    type="text"
                    placeholder=" Header Content"
                    id="header_content2"
                    name="header_content2"
                    value="<?php echo $viewheader->header_content2;?>"
                  />
                </div>
                <div class="row">
                  <label>Logo</label>
                  <input type="file" id="logo" name="logo" accept="image/*" />
                  <?php if($viewheader->logo){?>
                  <img class="adminimg" src="<?php echo site_url('asset/uploads/'.$viewheader->logo);?>" alt="">

                  <?php }?>
                  <label>Background</label>
                  <input type="file" id="hb" name="hb" accept="image/*" />
                  <?php if($viewheader->hb){?>
                  <img class="adminimg" src="<?php echo site_url('asset/uploads/'.$viewheader->hb);?>" alt="">

                  <?php }?>
                
                </div>
               </div>
             
           
        </div>
    </header>


        </div>
    </div>
</body>
</html>