<?php 
    $this->load->view('theme/author/header');
    ?>
    <head>
<title>Post</title>

   </head> 

            <!-- Sidbar End -->


            <!-- Header Part -->
            <!-- Main container start -->
            <div class="main-container">
                <div class="wrapper_main">
                    <div class="title">
                        Add Post 
                        </div>
                        <a class="btn" href="<?php echo site_url('user/post');?>">Add Post</a>
                        
                        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Recipe</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Ingredients</th>
      <th scope="col">Descriptions</th>
      <th scope="col">Picture</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <?php
  foreach($fetchpost as $post){
      ?>
  <tbody>
    <tr>
    <th scope="row"><?php echo $post->id;?></th>
      

      <td><?php echo substr($post->recipename,0,5);?></td>
      <td><?php echo substr($post->username,0,5);?></td>
      <td><?php echo $post->date;?></td>
      <td><?php echo substr($post->ingredients,0,10);?>...</td>
      <td><?php echo substr($post->descriptions,0,10);?>...</td>
      <td><img height="50px" width="50px" src="<?php echo base_url().'asset/uploads/'.$post->recipepicture;?>"></td>
     
      
      <td><a class="btn" href="<?php echo site_url('user/editadd/'.$post->id)?>" role="button">Edit</a>
      <a class="btn" href="<?php echo site_url('user/deleteaddpost/'.$post->id)?>" role="button">Delete</a>
      <a class="btn" href="<?php echo site_url('user/viewadd/'.$post->id)?>" role="button">View</a></td>

    </tr>
    <?php
  }
  ?>
  </tbody>
</table>
<?php echo $this->pagination->create_links();?>
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
