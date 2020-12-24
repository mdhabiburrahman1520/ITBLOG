<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>

    
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/singlepost.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/dist/css/jquery.animatedheadline.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/asset/css/bootstrap.min.css">
    <link rel="stylesheet"  href="<?php echo base_url();?>/asset/js/bootstrap.min.js">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/slick-theme.css">
    <title>post</title>
</head>
<body>
             <!--Header  section-->
   <header class="Fix-margin">
    <!--HEADER TOP --- *logo & NAVEBAR*--->
    <div class="header-top">
        <div class="logo">
         <img src="asset/images/logo.png" alt="">
        </div>
             <!--HEADER NAVEBAR SECTION-->
             <div class="header-navbar">
              <ul>
              <li><a id="btn" href="<?php echo base_url();?>blog">Home</a></li>
            <li><a id="btn" href="<?php echo base_url();?>about">About</a></li>
            
            <li><a id="btn" href="<?php echo base_url();?>allblog">Blog</a></li>
            <li><a id="btn" href="<?php echo base_url();?>contact">Contact</a></li>
           
            <li><a id="btn" href="<?php echo base_url();?>user">singup</a></li>
             </ul>
                 
              </div>
              <!--HEADER NAVEBAR SECTION CLOSE-->
           <button class="humberger" onclick="toggle()"><!--.humberger-->
            <i class="fas fa-bars"></i>
          </button>
          <nav id="m-nav" class="mobial-nav">
           
            <button id="close" class="close" onclick="toggle()">
              <i class="fas fa-times"></i>
            </button>
            <ul>
            <li><a id="btn" href="blog">Home</a></li>
            <li><a id="btn" href="about">About</a></li>
            
            <li><a id="btn" href="allblog">Blog</a></li>
            <li><a id="btn" href="contact">Contact</a></li>
            <li><a id="btn" href="admin">Deshboard</a></li>
            <li><a id="btn" href="login">Register</a></li>
            </ul><!--.main-nav ul li-->
            
    
          </nav>
        
    </div>
<!--HEADER TITEL-->
    <div class="header-titel">
  
     
   <section class="habib">
     <p class="animation-type"><p>Hello </p></p>
     <h1 class="ah-headline">
         <span id="font">WELCOME TO</span>
         <span class="ah-words-wrapper">
             <b class="is-visible" id="font"> IMFORMATION  & </b>
             <b id="font">technology </b>
             <b id="font">Posts </b>
             
         </span>
     </h1>
 </section>
 </div>
 <!--HEADER TITEL Close-->

     
</header>



    <div class="post">


        
    <div class="container">
     <div class="row">
   
    

      <div class="col" id="clm">
        <div class="card" id="card_id" >
          <img class="card-img-top" id="imght" src="<?php echo base_url().'asset/uploads/'.$viewsinglepost->image;?>" alt="Card image cap">
          <div class="card-body">
            <P class="blog_titel"><?php echo $viewsinglepost->title;?></P>
            <P class="catagoreys">Blog </P>
            <p class="card-text"><?php echo $viewsinglepost->post;?></p>
          </div>
          <div class="user">
            <div class="row">
              <div class="col">
                <p class="post_by">post by</p>
                <p id="post_by_name"><?php echo $viewsinglepost->post_by;?></p>
              </div>
              <div class="col">
                <p class="date">date</p>
                <p id="post_by_date">2<?php echo $viewsinglepost->date;?></p>
              </div>
            </div>
            <div class="comment-section">
              <!---->
              <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <div class="btn-com">
                    <a href="<?php echo site_url('blog/like_post/'.$viewsinglepost->id.'/'.$viewsinglepost->like_post)?>">
                      <button style="color:white;" class="icon_post" ><?php echo $viewsinglepost->like_post;?> like <i class="far fa-thumbs-up"></i>
                      </button>
                      </a>
                      </div>
                  </div>
               
                  <div class="col-sm"id="like" >
                  
                  </div>
                  </div>
                </div>
              </div>
              <!---->
            
       
              
              <div class="textarebox">
                <textarea  type="text" class="form-control messeges " id="comment" >  </textarea>
                <div class="Submit-btn">
                  <input type="submit"  Value="send" id="send" name="send" >
                  <input type="reset"  Value="Clear" id="clear" name="clear">
                </div>
              </div>
           
            </div>
            

       </div>

        </div>
      </div>
    
              
</div>
       </div>
     </div>
   
   <div class="fotter">
    <!--footre left side-->
    <div class="rightfotter">
   
    <img src="asset/images/logo.png" alt="">
    </div>
    <!--Left Footer End-->
     <!--footre middel  side-->
    <div class="midelfotter">
      <p class="mfooter">This is copyright by@It blog</p>
  
    </div>
   <!--footre right side-->
  
    <div class="leftfooter">
      <a  href="https://www.facebook.com/"><i  class="fab fa-facebook icon"></i></a>
      <a  href="https://www.instagram.com/"><i class="fab fa-instagram-square icon"></i></a>
         
        
   
   
     
    </div>
     <!--footreRight side end-->
  </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
<script src="<?php echo base_url();?>/asset/dist/js/jquery.animatedheadline.min.js"></script>
<script src="<?php echo base_url();?>/asset/js/code.js"></script>
<script src="<?php echo base_url();?>/asset/js/fadein.js"></script>
<script src="<?php echo base_url();?>/asset/js/slick.js"></script>
<script src="<?php echo base_url();?>/asset/js/codeslick.js"></script>
</body>
</html>