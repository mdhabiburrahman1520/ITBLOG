<?php 
    $this->load->view('theme/author/header');
    ?>
    <head>
<title>Author</title>

   </head>   
            <!-- Header Part -->
            <!-- Main container start -->
            <div class="main-container">
                <div class="wrapper_main">
                    <div class="title">
                        Author section
                        </div>
                        <a class="btn" href="<?php echo site_url('user/addauthor');?>">Add Author</a>

                        <table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">Picture</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <?php
  foreach($fetchauthor as $author){
      ?>
  <tbody>
    <tr>
    
    <td><img height="50px" width="50px" src="<?php echo base_url().'asset/uploads/'.$author->authorpicture;?>"></td>
      <td><?php echo substr($author->authorname,0,10);?></td>
      <td><?php echo substr($author->authordescription,0,10);?>...</td>
      <td><?php echo substr($author->username,0,10);?>...</td>
      <td><?php echo substr($author->email,0,10);?>...</td>
      

      <td><a class="btn" href="<?php echo site_url('user/editauthor/'.$author->id)?>" role="button">Edit</a>
      <a class="btn" href="<?php echo site_url('user/deleteauthor/'.$author->id)?>" role="button">Delete</a>
      <a class="btn" href="<?php echo site_url('user/viewauthor/'.$author->id)?>" role="button">View</a>
      <a class="btn" href="<?php echo site_url('user/Pending/'.$author->id)?>" role="button">Pending</a></td>
    
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