<?php 
    $this->load->view('theme/author/header');
    ?>
    <head>
<title>view Post</title>

   </head> 

            <!-- Header Part -->
            <!-- Main container start -->

            <div class="main-container">
                <div class="wrapper_main">
                    <div class="title">
                        Add Post Section
                        </div>

                        <div class="form">
                            <form action="<?php echo site_url('user/updateaddpost/'.$viewaddpost->id)?>" method="post" enctype="multipart/form-data">
                            <div class="input_field">
                                <label>Recipe Name</label>
                                <input type="text" class="input" name="recipename" placeholder="Enter Your messeage..." value="<?php echo $viewaddpost->recipename;?>">
                            </div>

                            <div class="input_field">
                                <label>User Name</label>
                                <input type="text" class="input" name="username" placeholder="Enter Your messeage..." value="<?php echo $viewaddpost->username;?>">
                            </div>

                            <div class="input_field">
                                <label>Date</label>
                                <input type="date" class="input" name="date" placeholder="Enter Your messeage..." value="<?php echo $viewaddpost->date;?>">
                            </div>

                            <div class="input_field">
                                <label>Ingredients</label>
                             <textarea class="textarea" name="ingredients" placeholder="Enter Your messeage..."><?php echo $viewaddpost->ingredients;?></textarea>
                            </div>

                            <div class="input_field">
                                <label>Descriptions</label>
                             <textarea class="textarea" name="descriptions" placeholder="Enter Your messeage..."><?php echo $viewaddpost->descriptions;?></textarea>
                            </div>
                            
                            <div class="recipe_image">
                            <?php if($viewaddpost->recipepicture){?>
                                <img width="20%" src="<?php echo site_url('asset/uploads/'.$viewaddpost->recipepicture);?>">
                                <?php }?>
                            </div>

                </form>
                </div>
            </div>
              <!-- Main container end -->
        </div>
         <!-- Wrapper end -->
         
         <script type="text/javascript">


function myFunction(){
            alert("Succesfully Done!");
    }

         $(document).ready(function(){
             $(".sidebar-btn").click(function(){
                $(".wrapper").toggleClass("collapse");
             });
         });
        </script>




    </body>
    </html>