<?php include 'includes/db.php' ?>
<?php include 'includes/header.php' ?>

<!-- nav -->

<?php include 'includes/nav.php' ?>

<!-- Contact Form -->

<?php 
    
if(isset($_POST["submit"])) {
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $message= $_POST['message'];   

if(empty($username) && empty($email) && empty($message) ) {
    
    echo "<p class='msg'>Fields should not be empty.</p>";
    
} else {
    
$query = "INSERT INTO form(username, email, message)";
    
$query .= "VALUES('{$username}', '{$email}','{$message}') ";    
    
$add_query = mysqli_query($connection, $query);
    
echo "<p class='msg'>Form Submitted.</p>";
    
}
    
}  
    
?>









<div class="container-form">
<form action="" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input name="username" type="text" class="form-control">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1">
  </div>
    
     <label for="message" class="form-label">Message</label>
    <div class="mb-3">
    <textarea name="message" class="form-control" aria-label="With textarea"></textarea>
</div>
    
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>


<!-- footer -->
<?php include 'includes/footer.php' ?>
