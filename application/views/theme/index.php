<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/dist/css/jquery.animatedheadline.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/asset/css/bootstrap.min.css">
    <link rel="stylesheet"  href="<?php echo base_url();?>/asset/js/bootstrap.min.js">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/fontawesome/css/all.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/slick-theme.css">
    

    
    <title>IT Blog</title>
</head>
<body>
<?php
                foreach($fetchhdr as $hdr){
                }
                ?>
       <!--Header  section-->
   <header class="Fix-margin" style=" background: linear-gradient(rgba(0,0,0,.65),rgba(0, 0, 0, 0.55)),
    url(<?php echo base_url().'asset/uploads/'.$hdr->hb;?> )center center no-repeat;">
   
   
       <!--HEADER TOP --- *logo & NAVEBAR*--->
       <div class="header-top">
       
           <div class="logo">
           <img src="<?php echo base_url().'asset/uploads/'.$hdr->logo;?>"  alt="">
            
           </div>
           <!--HEADER NAVEBAR SECTION-->
           <div class="header-navbar">
           <ul>
            <li><a id="btn" href="blog">Home</a></li>
            <li><a id="btn" href="about">About</a></li>
            
            <li><a id="btn" href="allblog">Blog</a></li>
            <li><a id="btn" href="contact">Contact</a></li>
           
            <li><a id="btn" href="user">Singup</a></li>
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
            <
            <li><a id="btn" href="singup">SingUp</a></li>
            </ul><!--.main-nav ul li-->
            
    
          </nav>
         
       </div>
 <!--HEADER TITEL-->
       <div class="header-titel">
      
        
      <section class="habib">
     
        <p class="animation-type"><p><?php echo $hdr->header;?> </p></p>
        <h1 class="ah-headline">
            <span id="font">WELCOME TO</span>
            <span class="ah-words-wrapper">
                <b class="is-visible" id="font"> <?php echo $hdr->header_content1?> </b>
                <b id="font"><?php echo $hdr->header_content2?> </b>
                
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
        <a class="btn btn-primary"id="btn-desing" href="<?php echo site_url('user');?>" role="button">Add post</a>
       </div>
     
   <!--git sistem-->
    </div>
    <div class="container">

<div class="row">
       <?php

       foreach($allblog_recenrpost as $rp){
                
                ?>
  <div class="col-sm" id="clm">
  <div class="card" style="width: 18rem;"id="c_it">
     <img class="card-img-top" id="imght" src="<?php echo base_url().'asset/uploads/'.$rp->image;?>" alt="Card image cap">
     <div class="card-body">
         <h4><?php echo  substr($rp->title,0,50);?></h4>
        <p class="card-text"><?php echo  substr($rp->post,0,60);?></p>
    </div>
    
     <div class="user">

      <div class="row">
          <div class="col-sm posyby">
              <p>post by</p>
              <p><?php echo  substr($rp->post_by,0,50);?></p>
          </div>
               <div class="col-sm date">
                     <p><?php echo  substr($rp->date,0,50);?></p>
               </div>

        </div>

      <a class="btn btn-primary" href="<?php echo site_url('blog/viewsinglepost/'.$rp->id)?>">READ MORE</a>
    </div>
 </div>
</div>

<?php
   }
   ?>
       
 

</div>
</div>
 <!--Git Off-->


 </div>
 <!--Close Post Section-->

 <!--Propular Artical-->
 <div class="propular">
  <p class="propular_titel">Popular Artical</p>
 <div class="container">
   <div class="row slider">

         <?php

           foreach($popularpost as $ppost){
         
         ?>
    <div class="col-sm-4">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top" id="imght" src=<?php echo base_url().'asset/uploads/'.$ppost->image;?> alt="Card image cap">
          <div class="card-body">
          <h4><?php echo  substr($ppost->title,0,50);?></h4>
            <p class="card-text"><?php echo  substr($ppost->post,0,60);?></p>
          </div>
          <div class="user">
            <div class="row">
              <div class="col-sm posyby">
                <p>post by</p>
                <p><?php echo  substr($ppost->post_by,0,50);?></p>
              </div>
              <div class="col-sm date">
                <p>date</p>
                <p><?php echo  substr($ppost->date,0,50);?></p>
              </div>
            </div>
            <a class="btn btn-primary"id="btn-desing"  href="<?php echo site_url('blog/viewsinglepost/'.$ppost->id)?>" role="button">READ MORE</a>

       </div>

        </div>
    </div>
  
    <?php
   }
   ?>


 
 
   </div>
 </div>

</div>
<!--Close Popular post-->
<!--
  Footer Section
-->
<div class="fotter">
  <!--footre left side-->
  <div class="rightfotter">
 <img  src="asset/images/logo.png" alt="">
  </div>
  <!--Left Footer End-->
   <!--footre middel  side-->
  <div class="midelfotter">
    <p class="mfooter">This is copyright by@It blog</p>

  </div>
 <!--footre right side-->

  <div class="leftfooter">
    <a  href="https://www.facebook.com/"><i  class="fab fa-facebook icon">facebook</i></a> &nbsp
    <a  href="https://www.instagram.com/"><i class="fab fa-instagram-square icon"> instagram</i></a>
       
      
 
        </p>
   
  </div>
   <!--footreRight side end-->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
<script src="asset/dist/js/jquery.animatedheadline.min.js"></script>
<script src="asset/js/code.js"></script>
<script src="asset/js/slick.js"></script>
<script src="asset/js/codeslick.js"></script>


</body>
</html>





