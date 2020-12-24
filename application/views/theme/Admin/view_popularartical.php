<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/css/header.css">
  <link rel="stylesheet"  href="<?php echo base_url();?>/asset/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/fontawesome/css/all.min.css" />
  <title>Addpopularartical</title>
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
                      
                  <li><a id="btn" href="admin"><i class="fas fa-tachometer-alt"></i> DASHBOARD</a></li>
                    <li><a id="btn" href="blog"><i class="fas fa-home"></i> Home</a></li>
                    <li><a id="btn" href="header"><i class="fas fa-book-reader"></i> Header</a></li>
                    <li><a id="btn" href="header"><i class="fas fa-book-reader"></i> Aboutpage</a></li>
                    <li><a id="btn" href="post"><i class="fas fa-portrait"></i> Post</a></li>
                    <li><a id="btn" href="eidthpost"><i class="far fa-plus-square"></i> Eidth_post</a></li>
                    <li><a id="btn" href="popularartical"><i class="fas fa-newspaper"></i> Popurlar_artical</a></li>
                    <li><a id="btn" href="eidthpopaluralaartic"><i class="far fa-plus-square"></i>Eidth_popurala_art</a></li>
                    <li><a id="btn" href="login"><i class="fas fa-sign-out-alt"></i> <span>SingOut</span> </a></li>
                    </ul>
                </div>
              
           
      </div>
        <div class="box">
        <div class="cont"style="margin-left:100px;">
                <div class="row">
                    <label>Title</label>
                    <input type="text" placeholder=" Title" id="title" name="title" 
                   
                    value="<?php echo $viewpopularartical->Title;?>"/>
                  </div>
                 
                  
                  
                  <div class="row">
                  
                  <label>Background</label>
                  <input type="file" id="hb" name="hb" accept="image/*" />
                  <?php if($viewpopularartical->hb){?>
                  <img class="adminimg" src="<?php echo site_url('asset/uploads/'.$viewpopularartical->hb);?>" alt="">

                  <?php }?>
                </div>
                   
           </div>
           
        </div>
    </header>


        </div>
    </div>
</body>
</html>