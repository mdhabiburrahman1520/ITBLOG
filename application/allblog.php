<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>

    
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/blog.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/dist/css/jquery.animatedheadline.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/asset/css/bootstrap.min.css">
    <link rel="stylesheet"  href="<?php echo base_url();?>/asset/js/bootstrap.min.js">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/slick-theme.css">
    

    
    <title>IT Blog</title>
</head>
<body>
       <!--Header  section-->
   <header class="Fix-margin">
       <!--HEADER TOP --- *logo & NAVEBAR*--->
       <div class="header-top">
           <div class="logo">
            <p class="logo_titel">IT BLOG</p>
           </div>
           <!--HEADER NAVEBAR SECTION-->
           <div class="header-navbar">
           <ul>
           <li><a id="btn" href="blog">Home</a></li>
            <li><a id="btn" href="about">About</a></li>
            
            <li><a id="btn" href="allblog">Blog</a></li>
            <li><a id="btn" href="contact">Contact</a></li>
            <li><a id="btn" href="admin">Deshboard</a></li>
            <li><a id="btn" href="login">Register</a></li>
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
            <li><a id="btn" href="Admin/Admin">Deshboard</a></li>
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
                <b class="is-visible" id="font"> Blog</b>
                <b id="font">Blog </b>
                
            </span>
        </h1>
    </section>
    </div>
    <!--HEADER TITEL Close-->

        
   </header>
  

   <!--HEADER SECTION CLOSE-->
   <!--About Section---->
        <!--Post SEction-->  
 
        
        <div class="post">

          <div class="post-area">
          <div class="newpost">
           <p class="post_titel">Artical</p>
          </div>
          <div class="add-post">
            <p>Add post</p>
          </div>
        
      <!--git sistem-->
       </div>
      <div class="container">
             <?php
                foreach($allblog as $fatchallblog){
                ?>
       <div class="row">
         <div class="col-sm" id="clm">
           <div class="card" style="width: 18rem;"id="c_it">
             <img class="card-img-top" id="imght" src="<?php echo base_url().'asset/uploads/'.$fatchallblog->image;?>" alt="Card image cap">
             <div class="card-body">
             <h4><?php echo  substr($fatchallblog->title,0,50);?></h4>
               <p class="card-text"><?php echo  substr($fatchallblog->post,2,200);?></p>
             </div>
             <div class="user">
               <div class="row">
                 <div class="col-sm posyby">
                   <p>post by</p>
                   <p><?php echo  substr($fatchallblog->post_by,0,50);?></p>
                 </div>
                 <div class="col-sm date">
                   <p>date</p>
                   <p><?php echo  substr($fatchallblog->date,0,50);?></p>
                 </div>
               </div>
               <a class="btn btn-primary" href="<?php echo site_url('blog/viewsinglepost/'.$fatchallblog->id)?>">READ MORE</a>
                  </div>
 
           </div>
       
         </div>
       
        </div>
        <!--Git Off-->
      
        </div>
        
 <!--Close Post Section-->

<!--
  Footer Section
-->

<div class="fotter">
  <div class="rightfotter">
 <h1>Blog</h1>
  </div>
  <div class="midelfotter">

  </div>
  <div class="leftfooter">
    <a  href="https://www.facebook.com/"><i  class="fab fa-facebook icon"></i></a>
    <a  href="https://www.instagram.com/"><i class="fab fa-instagram-square icon"></i></a>
       
      
 
   
  </div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
<script src="asset/dist/js/jquery.animatedheadline.min.js"></script>
<script src="asset/js/code.js"></script>
<script src="asset/js/slick.js"></script>
<script src="asset/js/codeslick.js"></script>


</body>
</html>