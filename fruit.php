<!--- header--->
<?php include 'includes/db.php' ?>
<?php include 'includes/header.php' ?>


  <!--- nav --->

<?php include 'includes/nav.php' ?>

<!-- section -->

<div class="container">

<!--<h2 class="fs-2 text">All Fruits</h2>-->

<div class="row">
 
<?php 
  
if(isset($_GET['id'])) {
    
 $f_id = $_GET['id'];   
    
   
$query = "SELECT * FROM fruits WHERE id = '{$f_id}' ";
    
$select_all_query = mysqli_query($connection, $query);
    
while($row = mysqli_fetch_array($select_all_query)) {
    
   $id = $row['id'];
   $title = $row['title'];
   $user = $row['user'];
   $img = $row['img'];  
    
    
}    
    
    
    
?>
  
    <div class="title">
      <h5 class="title"><?php echo $title; ?></h5>
  </div>
    
  <img height="350px"  src="images/<?php echo $img; ?>" class="card-img-top" alt="..." />
    
  <div class="title-user">
      <a style='text-decoration: none;' href='user.php?f_user=<?php echo $user; ?>'><h6 class="title-user"><?php echo $user; ?></h6></a>
  </div>
</div>
    </div>

<?php } ?>

  <!-- footer -->
<?php include 'includes/footer.php' ?>
    
    
    