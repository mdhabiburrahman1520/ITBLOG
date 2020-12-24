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

       <!-- About Us -->
       <?php
  foreach($fetchabout as $about){
  }
      ?>
       <div class="about_us" style='background-image:linear-gradient( #a76d6d, #a76d6d) ,url("<?php echo base_url().'asset/uploads/'.$about->background;?>")'>
       <section id="aboutus">
       <div class="About_Us">
               <dib class="row">
                   <div class="col-sm-7">
                       <h2><?php echo $about->title;?></h2>
                       <p><?php echo $about->paragraph;?></p>
                        </div>
                        
                   <div class="col-sm-5">
                               <div class="img-wrap">
                               <img src="<?php echo base_url().'asset/uploads/'.$about->picture;?>">
                               </div>
                          </div>
                   </div>
               </div>
       </section>
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