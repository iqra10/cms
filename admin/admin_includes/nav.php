<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./dashboard.php">CMS Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            
            <?php 
                    
  if(isset($_SESSION['username']) && isset($_SESSION['password'])){ 
      
   echo "<a class='nav-link active' aria-current='page' href='../index.php'>Home</a>
        </li>";   
      
  }
      
  ?>  
            
<!--
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
-->
        <li class="nav-item">
          <a class="nav-link" href="./add_fruit.php">Add Fruit</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="./sub_forms.php">Submitted Forms</a>
           <li class="nav-item">
          <a class="nav-link" href="./logout.php">Logout</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>



