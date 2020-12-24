<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/login.css">
    <title>singup</title>
</head>
<body>
   
    <div class="login-page">
        <div class="form">
            <form class="register-form"  action="<?php echo site_url('blog/saveauthor')?>" method="post" >
                <input type="text" placeholder="user name" id="username" name="username"/>
                <input type="password" placeholder="password"id="password" name="password"/>
                <input type="email" placeholder="email id" id="email" name="email"/>
               
                <div class="Submit-btn" style="text-aling:center;">
                    <input type="submit"    value="login" id="send" name="login">
                   <input type="reset"  valuee="Reset" id="clear" name="Reset">
                      </div>
                <p class="message">AlRady Registered? <a href="#">Login</a></p>
            </form>  
            
                <form class="login-form" action="<?php echo site_url('loginauthor/check')?>" method="post" >
                    <input type="text" placeholder="user name" name="username"/>
                    <input type="password" placeholder="password"name="password"/>              
                    <button>Signin</button>
                    <p class="message">Not Registered? <a href="#">register</a></p>
                </form>     
            </div>   
        
     
    </div>  
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
    <script>
     $( '.message a').click(function() {
  $( 'form' ).animate({
    opacity: "toggle",

    height: "toggle"
  }, 1000, function() {
   
  });
});
    </script>

 
</body>
</html>