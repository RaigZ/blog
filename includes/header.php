<?php
  //<!-- Navbar -->
  echo '<nav class="navbar navbar-fixed-top sticky-top navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid gap-2">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="link-group gap-2 d-flex">';
    echo 
    '<form action="results.php" method="GET">
      <div class="form-outline" data-mdb-input-init>
        <input type="search" id="form1" class="form-control" placeholder="Search User" aria-label="Search" />
      </div>
    </form>';
    if(isset($_SESSION["idusers"])) {
      echo '<h6>Welcome ' . $_SESSION["username"] . '</h6>
        <a class="btn btn-primary" href="../php/login.php">Log out</a>';
    } else {
      echo '<a class="btn btn-outline-success" href="../php/login.php">Log in</a>
      <a class="btn btn-primary" href="../php/signup.php">Sign up</a>';
    }
    
  echo 
  '</div>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="../php/home.php">bloggoli</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../php/home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div> 
  </div>
</nav>';
?>