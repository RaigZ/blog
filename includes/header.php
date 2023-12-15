<?php 
  //<!-- Navbar -->
  echo '<nav class="navbar navbar-fixed-top sticky-top navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="link-group gap-2 ms-auto d-flex col-8 col-sm-4 col-lg-2 justify-content-end">';
  
    if(isset($_SESSION["idusers"])) {
      echo '<h6>Welcome ' . $_SESSION["username"] . '</h6>
            <form action="logout.php" method="POST"><button class="btn btn-primary" type="submit">Log out</button></form>';
    } else {
      echo '<a class="btn btn-outline-success" href="../php/login.php">Log in</a>
      <a class="btn btn-primary" href="../php/signup.php">Sign up</a>';
    }
  echo '</div>
<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
  <a class="navbar-brand">bloggoli</a>
</div> 
</div>
</nav>';
?>