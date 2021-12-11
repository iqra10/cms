<!--- header--->
<?php include 'admin_includes/header.php' ?>


  <!--- nav --->

<?php include 'admin_includes/nav.php' ?>

<!-- section -->

<div class="container">

<h2 class="fs-2 text">Form</h2>

<div class="row">
    
<?php 
    
  if(isset($_GET['id'])) {
      
 $the_id = $_GET['id'];
      
  $query = "SELECT * FROM form WHERE id = '{$the_id}' ";

$select_all_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($select_all_query)) {
    
    $id = $row['id'];
    $username = $row['username'];
    $email = $row['email'];
    $message = $row['message'];
  
}
    
?>  
   <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input name="username" type="text" value="<?php echo $username; ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Email</label>
    <input name="email" type="email" value="<?php echo $email; ?>" class="form-control" id="exampleInputEmail1">
  </div>
    
     <label for="message" class="form-label">Message</label>
    <div class="mb-3">
    <textarea name="message" class="form-control" aria-label="With textarea"><?php echo $username; ?></textarea>
</div>
    
 <?php  } ?>   

  <!-- footer -->
