<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>

        <!-- style.css -->
        <link rel="stylesheet" href="<?php echo base_url();?>asset/admincss/adminpanel.css">

        <!-- Javascript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

        <!-- Font Awsome -->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <!-- Bootstrap Grid system -->
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap-grid.css">
    </head>
    <body>    
       

            <!-- Header Part -->
            <!-- Main container start -->

            <div class="main-container">
                <div class="wrapper_main">
                    <div class="title">
                        Login
                    </div>

                        <div class="form">
                            <form action= "<?php echo site_url('login/check')?>" method="post">
                            <div class="input_field">
                                <label>Username:</label>
                                <input type="text" class="input" name="username" placeholder="Enter Your username...">
                            </div>

                            <div class="input_field">
                                <label>Password:</label>
                                <input type="password" class="input" name="password" placeholder="Enter Your password...">
                            </div>
                        

                            

                            <div class="input_field">
                                <input type="submit"  value="Login" class="btn">
                                <input type="reset" value="Cancel" class="btn">
                            </div>
                

                </form>
                </div>
            </div>

         <!-- Main container end -->
         </div>
         <!-- Wrapper end -->
         
       





    </body>
    </html>