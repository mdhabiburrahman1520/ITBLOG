<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/contact.css">
    <link rel="stylesheet" href="asset/dist/css/jquery.animatedheadline.css">
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet"  href="asset/js/bootstrap.min.js">
    <link rel="stylesheet" href="asset/css/fontawesome/css/all.min.css"/>
   
    <title>Contact</title>
</head>
<body>
  
      <!--Header Titell -->
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
            <li><a id="btn" href="admin">Deshboard</a></li>
            <li><a id="btn" href="singup">Register</a></li>
          </ul><!--.main-nav ul li-->
             
     
           </nav>
            
        </div>
  <!--HEADER TITEL-->
        <div class="header-titel">
      
         
      <h1>Contact Page</h1>
                 
                 
             </span>
         </h1>
     </section>
     </div>
     <!--HEADER TITEL Close-->
     <div class="from" >
      <div class="contact-from">
          <form action="<?php echo site_url('blog/savemesg')?>" method="post">
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputEmail4">First Name</label>
                      <input type="text" class="form-control" placeholder="First name" id="name" name="name">
                    </div>
                  
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4 email" placeholder="Email" name="email">
                </div>
              
              </div>
              <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress address" placeholder="1234 Main St" name="address">
              </div>
             
              <div class="form-group">
                  <label for="exampleFormControlTextarea1">Your Message</label>
        
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
                </div>
              
              </div>
              <div class="form-group">
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    Check me out
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary" onclick="alert(' Your message is sending !')">Sign in</button>
            </form>
      </div>   
       
    </header>

     
      

  
   
</body>
</html>