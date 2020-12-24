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



       <!-- Contact Page -->
       <!--Header Part -->
       <?php
  foreach($fetchinfo as $info){
  }
      ?>
       <div class="Contact" style='background-image:linear-gradient( #a76d6d, #a76d6d) ,url("<?php echo base_url().'asset/uploads/'.$info->background;?>")'>
       <section class="Contact">
           <div class="content">
               <h2>Contact Us</h2>
               <p>Whether you have a question about features, recipe, or anything else, our team is ready to answer all your questions.
                Our team is happy to answer your sales questions. Fill out the form and we’ll be in touch as soon as possible.</p>
           </div>

      <!-- Address Phone Email -->
      
           <div class="container">
               <div class="contactInfo">
                   <div class="box">
                       <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                       <div class="text">
                           <h2>Address</h2>
                           <p><?php echo $info->address;?></p>
                       </div>
                   </div>
                   <div class="box">
                    <div class="icon"><i class="fas fa-phone-alt"></i></div>
                    <div class="text">
                        <h2>Phone</h2>
                        <p><?php echo $info->phone;?></p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fas fa-envelope"></i></div>
                    <div class="text">
                        <h2>Email</h2>
                        <p><?php echo $info->email;?></p>
                    </div>
                </div>
               </div>

               <!-- Send Message -->
   
                <div class="contactForm">
                <form action="<?php echo site_url('blog/savemsg')?>" method="post">
                       <h2>Send Message</h2>
                       <div class="inputBox">
                           <input type="text" name="fullname" required="required">
                           <span>Fullname</span>
                       </div>
                       <div class="inputBox">
                        <input type="text" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required" name="message"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="submit" value="send">   
                   </form>
               </div>
           </div>

       </section>
</div>

        
             
    </body>
    </html>