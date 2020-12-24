<html>
    <head>
        <title>FoodBlog</title>

        <!-- style.css -->
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">

        <!-- Font Awsome -->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <!-- Bootstrap Grid system -->
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap-grid.css">
    </head>
    <body>
    <?php
  foreach($fetchhdr as $hdr){
  }
      ?>
        <!-- Navigation Bar -->
        
    <header class="clear-fix">
        <img src="<?php echo base_url().'asset/uploads/'.$hdr->logo;?>" alt="" class="main-logo">
    
       <div class="navbar">
           <ul>
           <li>
                   <a href="index">Home</a>
               </li>
               <li>
                   <a href="recipe">Recipe</a>
               </li>
               <li>
                   <a href="aboutus">About</a>
               </li>
               <li>
                   <a href="contactpage">Contact</a>
               </li>
               <li>
                <a href="admin">Dashboard</a>
            </li>
           </ul>
       </div>
       </header>

       <!-- Recipe Section 2 -->
       <!-- Card 1 -->
       <div class="main">
      
  <?php
  foreach($recipe as $fetchrecipe){
      ?>
           <div class="cards">
           <div class="image">
             <img src="<?php echo base_url().'asset/uploads/'.$fetchrecipe->recipepicture;?>">
           </div>
           <div class="menu_name">
            <h1><?php echo substr($fetchrecipe->recipename,0,10);?>...</h1>
           </div>
           <div class="description">
           <p><?php echo substr($fetchrecipe->descriptions,0,250);?>...</p>
               <a href="<?php echo site_url('blog/recipe_singleview/'.$fetchrecipe->id)?>">
               <button>Read More...</button>
               </a>
           </div>
         
       </div>
       <?php
                }
                ?>
     
   <footer>
    <div class="main-content">
        <div class="left box">
            <h2>About Us</h2>
            <div class="content">
                <p>Food is often my main memory of a situation – be it a holiday, a day out, or a lunch with friends.My recipes are regularly
                   submitted and featured on various websites including.Sign up to mailing list to get my latest recipes and posts sent 
                   direct to your inbox. That way you’ll never miss any of my recipes. You will receive around one email a week,plus the 
                   occasional recipe round up. I’ll never pass on your details to anyone else, and you can unsubscribe at any time.</p>
                   <div class="social">
                       <a href="https://www.facebook.com/"><span class="fab fa-facebook-f"></span></a>
                       <a href="https://www.twitter.com/"><span class="fab fa-twitter"></span></a>
                       <a href="https://www.instagram.com/"><span class="fab fa-instagram"></span></a>
                       <a href="https://www.youtube.com/"><span class="fab fa-youtube"></span></a>
 
                   </div>
                </div>
             </div>


         <?php
  foreach($fetchinfo as $info){
  }
      ?>
            <div class="center box">
                <h2>Address</h2>
                <div class="content">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text"><?php echo $info->address;?></span>
                    </div>
                    <div class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text"><?php echo $info->phone;?>.</span>
                </div>
                <div class="email">
                    <span class="fas fa-envelope"></span>
                    <span class="text"><?php echo $info->email;?>.</span>
                    </div>
                    </div>
            </div>



             <div class="right box">
                 <h2>Contact Us</h2>
                 <div class="content">
                 <form action="<?php echo site_url('blog/savemsg')?>" method="post">

<div class="email">
<div class="text">Fullname *</div>
<input type="text" name="fullname" required="required">
</div>


<div class="email">
<div class="text">Email *</div>
<input type="email" name="email" required="required">
</div>

<div class="msg">
    <div class="text">Message *</div>
    <textarea rows="2" cols="25" required="required" name="message"></textarea>
 </div>
                          <div class="btn">
                              <button type="submit">Send</button>
                          </div>
                     </form>
                 </div>
             </div>
    </div>
    <div class="bottom">
        <center>
            <span class="credit">Created By <a href="#">CookBook</a> | </span>
            <span class="far fa-copyright"></span><span> 2020 All rights reserved.</span>
        </center>
    </div>
    </footer>

   
 </body>
</html>