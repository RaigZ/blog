<?php
  //<!-- Navbar -->
  echo '<nav class="navbar navbar-fixed-top sticky-top navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="link-group gap-2 ms-auto d-flex col-8 col-sm-4 col-lg-2 justify-content-end">';
  
    if(isset($_GET["idusers"])) {
      echo'Welcome' . " " . $username;
    } else {
      echo '<a class="btn btn-outline-success" href="../php/login.php">Log in</a>
      <a class="btn btn-primary" href="../php/signup.php">Sign up</a>';
    }
  echo '</div>
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