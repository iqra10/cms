<!--- header--->
<?php include 'admin_includes/db.php' ?>
<?php include 'admin_includes/header.php' ?>


  <!--- nav --->

<?php include 'admin_includes/nav.php' ?>

<!-- section -->

<div class="container">

<h2 class="fs-2 text">Add Fruit</h2>

<?php 
    
if(isset($_POST['add_fruit'])) {
    
    $title = $_POST['title'];
    $user = $_POST['user'];
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    
move_uploaded_file($image_temp, "images_admin/$image" ); 
    
if(empty($title) && empty($user) && empty($image) ) {
    
echo "<p class='success'>Fields should not be empty.</p>";
    
} else {
    
 $query = "INSERT INTO fruits(title, user, img)";   

 $query .= "VALUES('{$title}', '{$user}','{$image}')";
    
 $add_query = mysqli_query($connection, $query);   
    
echo "<p class='success'>Fruit Added.</p>";
    
}   

}
    
?>
    
    
    
    <form action="" method="post" enctype="multipart/form-data">    
     <div class="form-group">
         <label for="title">Title</label>
          <input type="text" class="form-control" name="title">
      </div>
              
    <div class="form-group">
         <label for="title">User</label>
          <input type="text" class="form-control" name="user">
      </div>
       <br/>
    <div class="form-group">
         <label for="post_image">Post Image</label>
       <input type="file" name="image">
      </div>
    <br/>

       <div class="form-group">
     <button type="submit" name="add_fruit" class="btn btn-success">Add Fruit</button>
      </div>

</form>
    </div>


    
    

  <!-- footer -->
