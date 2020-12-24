<html>
    <head>
        <title>FoodBlog</title>

        <!-- style.css -->
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">

        <!-- Font Awsome -->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <!-- Bootstrap Grid system -->
        <link rel="stylesheet" href="a<?php echo base_url();?>sset/css/bootstrap-grid.css">
    </head>
    <body>
        <!-- Navigation Bar -->
    <header class="clear-fix">
        <img src="<?php echo base_url();?>asset/img/20201029_235707.png" alt="" class="main-logo">
    
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

       <!-- Know More page -->
       <?php
  foreach($fetchauthor as $author){
  }
      ?>
       <div class="body" style='background-image:linear-gradient( #a76d6d, #a76d6d) ,url("<?php echo base_url().'asset/uploads/'.$author->background;?>")'>
         <div class="body">
       <div class="know_more">
           
            <img src="<?php echo base_url().'asset/uploads/'.$author->authorpicture;?>" alt="" class="img">

            <h1><?php echo $author->authorname;?></h1>
            <h2><?php echo $author->title;?></h2>
            <p><?php echo $author->authordescription;?></p>
    
               

                <h3>Contact Me</h3>
               <ul>
                   <li>
                       <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>   
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </li>
               </ul>     
            
       </div>
</div>









       
    <!-- Footer_Section -->
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
         <div class="center box">
             <h2>Address</h2>
             <div class="content">
                 <div class="place">
                     <span class="fas fa-map-marker-alt"></span>
                     <span class="text">Bangladesh, Sylhet.</span>
                 </div>
                 <div class="phone">
                     <span class="fas fa-phone-alt"></span>
                     <span class="text">+8801724692207.</span>
             </div>
             <div class="email">
                 <span class="fas fa-envelope"></span>
                 <span class="text">architadey007@gmail.com.</span>
                 </div>
                 </div>
         </div>
         <div class="right box">
             <h2>Contact Us</h2>
             <div class="content">
                 <form action="#">
                     <div class="email">
                     <div class="text">Email *</div>
                     <input type="email" required>
                     </div>
                     <div class="msg">
                         <div class="text">Message *</div>
                         <textarea rows="2" cols="25" required></textarea>
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