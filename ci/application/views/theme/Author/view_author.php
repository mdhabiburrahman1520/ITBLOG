<?php 
    $this->load->view('theme/author/header');
    ?>
    <head>
        <title>Author Section</title>
    </head>
    
            <!-- Header Part -->
            <!-- Main container start -->
            <div class="main-container">
                <div class="wrapper_main">
                    <div class="title">
                        Add Author Section
                        </div>

                        <div class="form">
                            <form action="<?php echo site_url('user/updateauthor/'.$viewauthor->id)?>" method="post" enctype="multipart/form-data">
                            <div class="input_field">
                                    <label>Author Name</label>
                                    <input type="text" name="authorname" class="input" placeholder="Enter Your Name..." value="<?php echo $viewauthor->authorname;?>">
                                </div>
                                <div class="input_field">
                                    <label>Username</label>
                                    <input type="text" name="username" class="input" placeholder="create Your Username..." value="<?php echo $viewauthor->username;?>">
                                </div>
                                <div class="input_field">
                                    <label>Password</label>
                                    <input type="text" name="password" class="input" placeholder="create Your Password..." value="<?php echo $viewauthor->password;?>">
                                </div> 
                                <div class="input_field">
                                    <label>Email</label>
                                    <input type="text" name="email" class="input" placeholder="Enter Your Email..." value="<?php echo $viewauthor->email;?>">
                                </div>
                                <div class="input_field">
                                    <label>Author Description</label>
                                 <textarea class="textarea" name="authordescription" placeholder="Enter Your Description..."><?php echo $viewauthor->authordescription;?></textarea>
                                </div>
            
                                
                                <div class="image_field">
                                    <label>Author Picture</label>
                                    <input type="file" class="photo" name="authorpicture">

                                    <?php if($viewauthor->authorpicture){?>
                                    <img width="20%" src="<?php echo site_url('asset/uploads/'.$viewauthor->authorpicture);?>">
                                    <?php }?>
                                </div>
            
                            

                </form>
                </div>
            </div>
              <!-- Main container end -->
        </div>
         <!-- Wrapper end -->
         
         <script type="text/javascript">
         $(document).ready(function(){
             $(".sidebar-btn").click(function(){
                $(".wrapper").toggleClass("collapse");
             });
         });
        </script>




    </body>
    </html>