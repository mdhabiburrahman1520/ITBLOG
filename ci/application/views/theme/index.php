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
       
       <!-- Header Section -->
       <div class="header_section" style='background-image:linear-gradient( #a76d6d, #a76d6d) ,url("<?php echo base_url().'asset/uploads/'.$hdr->background;?>")'>

           <div class="header_text">
               <h1><?php echo $hdr->headline;?></h1>
               <p><?php echo $hdr->paragraph;?></p>
               <a href="signup" class="btn_dark margin_top"><?php echo $hdr->buttoncaption;?></a>
           </div>
       </div>
          
 
        <!-- Recipe Section -->
        <div class="recipe_section">
            <h2>Food Fusion</h2>
                    <div class="container">
                <div class="row">
                <?php
                    foreach($recipe_foodfussion as $ffr){
                ?>
                    <div class="col-md-4">
                        <div class="image_wrapper">
                            <img src="<?php echo base_url().'asset/uploads/'.$ffr->recipepicture;?>">
                            <div class=" image_wrapper-text">
                                <h5><?php echo substr($ffr->recipename,0,10);?></h5>
                                <p><?php echo substr($ffr->descriptions,0,70);?>)...</p>
                            </div>
                        </div>
                        
                    </div>
                    <?php 
                        }
                        ?>
                   
                 
                </div>
            </div>
        </div>

       <!-- About Section -->
       <div class="about_section">
           <div class="container">
               <div class="row">
                   <div class="col-md-3">
                       <div class="image_background">
                       <img src="<?php echo base_url();?>asset/img/photo-1491972690050-ba117db4dc09.jfif" class="image_responsive_1">
                    </div>
                   </div>
                   <div class="col-md-9">
                   <h4>About My Blog</h4>
                   <p>
                    Variety of recipes and cooking-related articles with a focus on thoughtful and stylish living. 
                    Many recipes have flavorful twists, and the site offers unique kitchenware for sale.
                    Well-tested interesting recipes, food science, techniques, equipment, and even food histories.
                    Also has a highly-rated podcast hosted by founder Ed Levine.Recipes, meal plans, lifestyle, and
                    a cookie section with almost 200 cookie recipes. 
                    </p>
                   <a href="aboutus" class="btn_dark">Know More</a>
                </div>
               </div>
           </div>
       </div>

       <!-- More Foods-->
    <div class="extra_section">
        <h2>Hottest Recipes At Food And Taste</h2>
        <div class="container">
            <div class="row">
            <?php
  foreach($recipe_recentpost as $rpost){
      ?>
                <div class="col-md-6 mb-5">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img src="<?php echo base_url().'asset/uploads/'.$rpost->recipepicture;?>" class="image_responsive">
                        </div>
                        <div class="col-md-8 bg_dark text_light p-3">
                            <h4><?php echo substr($rpost->recipename,0,10);?>...</h4>
                            <p><?php echo substr($rpost->descriptions,0,100);?>...</p>
                            <a href="<?php echo site_url('blog/recipe_singleview/'.$rpost->id)?>" class="btn_light">Read recipe</a>
                        </div>
                    </div>
                </div>

                <?php
  }
  ?> 
            </div>
  
        </div>
     
    </div>

    
        <!--Category Section-->
        <div class="category_section">
            <h2>Popular Stories</h2>
            <div class="container">
                <div class="row">
                <?php
  foreach($recipe_popular as $rp){
 

      ?>
                    <div class="col-md-3">
                        <div class="image_wrapper_section">
                        <img src="<?php echo base_url().'asset/uploads/'.$rp->recipepicture;?>">
                            <div class="image_wrapper-text bg_light">                          
                            <p><?php echo substr($rp->descriptions,0,90);?>)...</p>
                            </div>
                        </div>
                    </div>
                   <?php
                   }
                   ?>
    
                </div>
            </div>
        </div>
    

      <!-- Team Section Container -->
                     <h1>Meet Our Team</h1>
           <!-- Team 1 -->
      
           <div class="container">
           <?php
  foreach($our_team as $team){
      ?>
           <div class="our-team">
               <div class="pic">
                  <img src="<?php echo base_url().'asset/uploads/'.$team->picture;?>">
               </div>
               <div class="team-content">
                   <h3 class="title"><?php echo $team->name;?></h3>
                   <span class="post"><?php echo $team->positiontitle;?></span>
               </div>
               <ul class="social">
                   <li>
                       <a href="https://www.facebook.com/" class="fab fa-facebook"></a>
                   </li>
                   <li>
                    <a href="https://www.twitter.com/" class="fab fa-twitter"></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
                </li>
               </ul>
           </div>

           <?php
                }
                ?>
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