
    <?php 
    $this->load->view('theme/author/header');
    ?>
    <head>
<title>Add new Post</title>

   </head> 
            <!-- Header Part -->
            <!-- Main container start -->

            <div class="main-container">
                <div class="wrapper_main">
                    <div class="title">
                        Add Post Section
                        </div>

                        <div class="form">
                            <form action="<?php base_url()?>saveadd" method="post" enctype="multipart/form-data">
                            <div class="input_field">
                                <label>Recipe Name</label>
                                <input type="text" class="input" name="recipename" placeholder="Enter Your messeage...">
                            </div>

                            <div class="input_field">
                                <label>User Name</label>
                                <input type="text" class="input" name="username" placeholder="Enter Your messeage...">
                            </div>

                            <div class="input_field">
                                <label>Date</label>
                                <input type="date" class="input" name="date" placeholder="Enter Your messeage...">
                            </div>

                            <div class="input_field">
                                <label>Ingredients</label>
                             <textarea class="textarea" name="ingredients" placeholder="Enter Your messeage..."></textarea>
                            </div>

                            <div class="input_field">
                                <label>Descriptions</label>
                             <textarea class="textarea" name="descriptions" placeholder="Enter Your messeage..."></textarea>
                            </div>
                            
                            <div class="recipe_image">
                                <label>Recipe Picture</label>
                                <input type="file" class="photo" name="recipepicture">
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





