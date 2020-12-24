<?php 
    $this->load->view('theme/author/header');
    ?>
    <head>
<title>Add author</title>

   </head>   

            <!-- Header Part -->
            <!-- Main container start -->
            <div class="main-container">
                <div class="wrapper_main">
                    <div class="title">
                        Add Author Section
                        </div>

                        <div class="form">
                       
                            <form action="<?php base_url()?>saveauthor" method="post" enctype="multipart/form-data">
                            <div class="input_field">
                                    <label>Author Name</label>
                                    <input type="text" name="authorname" class="input" placeholder="Enter Your Name...">
                                </div>
                                <div class="input_field">
                                    <label>Username</label>
                                    <input type="text" name="username" class="input" placeholder="Create Your Username...">
                                </div>
                                <div class="input_field">
                                    <label>Password</label>
                                    <input type="password" name="password" class="input" placeholder="Create Your Password...">
                                </div>
                                <div class="input_field">
                                    <label>Email</label>
                                    <input type="email" name="email" class="input" placeholder="Enter Your Email...">
                                </div>
                                <div class="input_field">
                                    <label>Author Description</label>
                                 <textarea class="textarea" name="authordescription" placeholder="Enter Your Description..."></textarea>
                                </div>

                                
                                <div class="image_field">
                                    <label>Author Picture</label>
                                    <input type="file" class="photo" name="authorpicture">
                                </div>
            
                            <div class="input_field">
                                <input type="submit" value="Save" class="btn">
                                <input type="reset" value="Reset" class="btn">
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