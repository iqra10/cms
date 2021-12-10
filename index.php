  <!--- header--->
<?php include 'includes/db.php' ?>
<?php include 'includes/header.php' ?>


  <!--- nav --->

<?php include 'includes/nav.php' ?>

<!-- section -->

<div class="container">

<h2 class="fs-2 text">All Fruits</h2>

<div class="row">
    
<?php 
      
$query = "SELECT * FROM fruits";

$select_all_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($select_all_query)) {
    
    $id = $row['id'];
    $title = $row['title'];
    $user = $row['user'];
    $img = $row['img'];
      
?>     

    <div class="col cd">
    <div class="card" style="width: 18rem;">
  <a href='fruit.php?id=<?php echo $id; ?>'><img height="180px"  src="images/<?php echo $img; ?>" class="card-img-top" alt="" /></a>
  <div class="card-body">
    <h5 class="card-title"><a href="fruit.php?id=<?php echo $id; ?>"><?php echo $title; ?></a></h5>
    <a href="user.php?f_user=<?php echo $user; ?>"><h6 class="card-title"><?php echo $user; ?></h6></a>
  </div>
</div>
    </div>
    
 <?php } ?> 

  </div>
</div>



  <!-- footer -->
<?php include 'includes/footer.php' ?>
    
    
    
    
    
    
    
    
    
    
    
    