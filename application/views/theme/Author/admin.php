<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/css/header.css">
    <link rel="stylesheet"  href="<?php echo base_url();?>asset/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/fontawesome/css/all.min.css" />
    <title>Admin</title>
</head>
<body>
    <header>
        <div class="header-top">
         <h1>Welcome To Header Section</h1>
        </div>
        <div class="manu">
            <div class="logo"><img src="asset/images/logo.png" alt=""></div>
            <div class="navbar">
                  <ul>
                      
                  <li><a id="btn" href="admin"><i class="fas fa-tachometer-alt"></i> DASHBOARD</a></li>
                    <li><a id="btn" href="blog"><i class="fas fa-home"></i> Home</a></li>
                    <li><a id="btn" href="header"><i class="fas fa-book-reader"></i> Header</a></li>
                    <li><a id="btn" href="header"><i class="fas fa-book-reader"></i> Aboutpage</a></li>
                    <li><a id="btn" href="post"><i class="fas fa-portrait"></i> Post</a></li>
                  
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
                    <th scope="col">header</th>
                    <th scope="col">header_content1</th>
                    <th scope="col">header_content2</th>
                    <th scope="col">logo</th>
                    <th scope="col">background</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                foreach($fetchhdr as $hdr){
                ?>
                  <tr class="">
                    <th scope="row"><?php echo $hdr->id;?></th>
                    <td><?php echo $hdr->header;?></td>
                    <td><?php echo  substr($hdr->header_content1,0,50);?></td>
                    <td><?php echo $hdr->header_content2;?></td>
                    <td><img width="50px" src="<?php echo base_url().'asset/uploads/'.$hdr->logo;?>"></td>
                    <td><img width="50px" src="<?php echo base_url().'asset/uploads/'.$hdr->hb;?>"></td>
                    <td>
                        <a class="btn btn-outline-danger" href="<?php echo site_url('admin/edithdr/'.$hdr->id)?>">Update</a>
                        
                        <a class="btn btn-outline-danger"  href="<?php echo site_url('admin/viewhdr/'.$hdr->id)?>">View</a>
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