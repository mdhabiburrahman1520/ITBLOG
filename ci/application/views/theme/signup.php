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

       <!-- Sign Up page -->

           <div class="hero">
               <div class="form-box">
               <div class="button-box">
                   <div id="btn"> </div>
                   <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                   <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
                
            <div class="social-icons">
                <a href="https://www.facebook.com/"><span class="fab fa-facebook-f"></span></a>
                <a href="https://www.twitter.com/"><span class="fab fa-twitter"></span></a>
                <a href="https://www.goggle.com/"><span class="	fab fa-google"></span></a>
           </div>
           <form id="login" class="input-group">
           
               <input type="text" class="input-field" placeholder="User Id" required>
               <input type="text" class="input-field" placeholder="Enter Password" required>
               <input type="checkbox" class="check-box"><span>Remember Password</span> 
               <button type="submit" class="submit-btn">Log in</button>
           </form>
           <form id="register" class="input-group">
            <input type="text" class="input-field" placeholder="User Id" required>
            <input type="email" class="input-field" placeholder="Email Id" required>
            <input type="text" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>I aggree to the terms & conditions.</span> 
            <button type="submit" class="submit-btn">Register</button>
        </form>
                  </div>
              </div>

              <script>
                  var x = document.getElementById("login");
                  var y = document.getElementById("register");
                  var z = document.getElementById("btn");
                  function register () {
                      x.style.left = "-400px";
                      y.style.left = "50px";
                      z.style.left = "110px";
                  }
                  function login () {
                      x.style.left = "50px";
                      y.style.left = "450px";
                      z.style.left = "0px";
                  }
              </script>

            
        
   



    </body>
    </html>