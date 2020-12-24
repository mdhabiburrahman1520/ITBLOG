<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/css/css/login.css">
    <title>login</title>
</head>
<body>
   
    <div class="login-page">
        <div class="form" style=" background:#FF3300; border-radius: 25px;">
            <form class="register-form" >
                <input type="text" placeholder="user name"/>
                <input type="password" placeholder="password"/>
                <input type="text" placeholder="email id"/>
                <input type="text" placeholder="status"/>
                <button>Create</button>
                <p class="message">AlRady Registered? <a href="#">Login</a></p>
            </form>  
            
                <form class="login-form" action="<?php echo site_url('login/check')?>" method="post">
                    <input type="text" placeholder="user name" name="username"/>
                    <input type="password" placeholder="password" name="password"/>              
                    <div class="Submit-btn" >
                    <input style=" border-radius: 25px;text-align: center;background:#00CC00;height:40px;" type="submit"  value="login" id="send" name="login">
                   <input style=" border-radius: 25px;text-align: center; background:#00CC00;height:40px; " type="reset"  value="Reset" id="clear" name="Reset">
                      </div>
                   
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