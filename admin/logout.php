<?php include 'admin_includes/db.php' ?>
<?php include 'admin_includes/header.php' ?>

<?php 
   $_SESSION['username'] = null;  
   $_SESSION['password'] = null;

header('Location: ../index.php');

?>