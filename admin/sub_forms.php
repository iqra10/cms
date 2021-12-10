<!--- header--->
<?php include 'admin_includes/db.php' ?>
<?php include 'admin_includes/header.php' ?>


  <!--- nav --->

<?php include 'admin_includes/nav.php' ?>

<!-- section -->

<div class="container">

<h2 class="fs-2 text">Submitted Forms</h2>

<div class="row">
 
 <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Username</th>
        <th>View</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        
    
<?php 
    
$query = "SELECT * FROM form";

$select_all_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($select_all_query)) {
    
    $id = $row['id'];
    $username = $row['username'];
    $email = $row['email'];
    $message = $row['message'];
 
     echo "<tr>";
     echo "<td>$id</td>";
     echo "<td>$username</td>";
     echo "<td><a href='form.php?id=$id'>View</a></td>";  
     echo "<td><a href='sub_forms.php?delete=$id'>Delete</a></td>";
     echo "</tr>";
}
?>
    </tbody>
  </table>
    
<?php 
    
if(isset($_GET['delete'])) {
    
    $the_id = $_GET['delete'];
    
$query = "DELETE FROM form WHERE id = '$the_id' ";

$delete_query = mysqli_query($connection, $query);
    
header("Location: sub_forms.php");      
    
}
    
?>
    

  <!-- footer -->
