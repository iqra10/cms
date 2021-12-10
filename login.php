<?php include 'includes/db.php' ?>
<?php include 'includes/header.php' ?>

<!-- nav -->

<?php include 'includes/nav.php' ?>

<!-- login -->


<?php 
if(isset($_POST['login'])) {  
  
  $username = $_POST['username'];
  $password = $_POST['password'];
    
    
$query = "SELECT * FROM users ";

$select_all_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($select_all_query)) {
    
    $db_id = $row['id'];
    $db_username = $row['username'];
    $db_password = $row['password'];
}

if($db_username === $username && $db_password === $password) {
    
   $_SESSION['username'] = $db_username;  
   $_SESSION['password'] = $db_password;  

  header('Location: admin/dashboard.php');
    
} else {
    
    header('Location: ./index.php');
    
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
    <label for="password" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button name="login" type="submit" class="btn btn-primary">Login</button>
</form>

</div>


<!-- footer -->
<?php include 'includes/footer.php' ?>
