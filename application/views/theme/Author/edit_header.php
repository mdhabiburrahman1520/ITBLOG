<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../asset/css/css/header.css">
  <link rel="stylesheet"  href="../../asset/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="../../asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../asset/css/fontawesome/css/all.min.css" />
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
                      
                      <li><a id="btn" href="admin"><i class="fas fa-tachometer-alt"></i> DASHBOARD</a></li>
                        <li><a id="btn" href="blog"><i class="fas fa-home"></i> Home</a></li>
                        <li><a id="btn" href="author"><i class="far fa-plus-square"></i> author</a></li>
                       
                        <li><a id="btn" href="post"><i class="fas fa-portrait"></i> Post</a></li>
                    
                        <li><a id="btn" href="login"><i class="fas fa-sign-out-alt"></i> <span>SingOut</span> </a></li>
                        </ul>
                </div>
             
        </div>
        <div class="box">
        <form action="<?php echo site_url('admin/updateheader/'.$editheader->id)?>" method="post" enctype="multipart/form-data">
                <div class="row">
                  <label>Header</label>
                  <input
                    type="text"
                    placeholder="Header"
                    id="header"
                    name="header"
                    value="<?php echo $editheader->header;?>"
                  />
                </div>
                <div class="row">
                  <label>Header Content1</label>
                  <input
                    type="text"
                    placeholder="Header Content"
                    id="header_content1"
                    name="header_content1"
                    value="<?php echo $editheader->header_content1;?>"
                  />
                </div>
                <div class="row">
                  <label>Header Content2</label>
                  <input
                    type="text"
                    placeholder=" Header Content"
                    id="header_content2"
                    name="header_content2"
                    value="<?php echo $editheader->header_content2;?>"
                  />
                </div>
                <div class="row">
                  <label>Logo</label>
                  <input type="file" id="logo" name="logo" accept="image/*" />
                  <?php if($editheader->logo){?>
                  <img class="adminimg" src="<?php echo site_url('asset/uploads/'.$editheader->logo);?>" alt="">

                  <?php }?>
                  <br>
                  <label>Background</label>
                  <input type="file" id="hb" name="hb" accept="image/*" />
                  <?php if($editheader->hb){?>
                  <img class="adminimg" src="<?php echo site_url('asset/uploads/'.$editheader->hb);?>" alt="">

                  <?php }?>
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