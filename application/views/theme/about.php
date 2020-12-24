<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/about.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/dist/css/jquery.animatedheadline.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/asset/css/bootstrap.min.css">
    <link rel="stylesheet"  href="<?php echo base_url();?>/asset/js/bootstrap.min.js">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/fontawesome/css/all.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/slick-theme.css">
    <title>About us</title>
</head>
<body>
    <header class="Fix-margin" id="aboutheader" >
        <!--HEADER TOP --- *logo & NAVEBAR*--->
        <div class="header-top" >
            <div class="logo">
             <img src="asset/images/logo.png" alt="">
            </div>
            <!--HEADER NAVEBAR SECTION-->
            <div class="header-navbar">
            <ul>
            <li><a id="btn" href="blog">Home</a></li>
            <li><a id="btn" href="about">About</a></li>
            
            <li><a id="btn" href="allblog">Blog</a></li>
            <li><a id="btn" href="contact">Contact</a></li>
            
            <li><a id="btn" href="user">singup</a></li>
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
            <li><a id="btn" href="Admin/admin">Deshboard</a></li>
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
                 <b class="is-visible" id="font"> About_Us</b>
                 <b id="font">About_Us </b>
                 
                 
             </span>
         </h1>
     </section>
     </div>
     <!--HEADER TITEL Close-->
         
         
    </header>
    <div class="about">
      <div class="about-cont">
        <br>
      <h1>About Us</h1>
        <p>We Contain It information.New Update can see our blgo.new news of tacenology find this website.
          every new information  come this website.if any information update it can people see in this blog.</p>
      </div>
        
    </div>
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