<?php 
  //<!-- Navbar -->
  if(isset($_SESSION["idusers"])){
    echo '<nav class="navbar navbar-fixed-top sticky-top navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="link-group gap-2 ms-auto d-flex col-8 col-sm-4 col-lg-2 justify-content-end">
            <h6>Welcome ' . $_SESSION["username"] . '</h6>
            <form action="logout.php" method="POST"><button class="btn btn-primary" type="submit">Log out</button></form>
            </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a href="home.php" class="navbar-logo"><h1 class="navbar-brand">bloggoli</h1></a>
        </div> 
        </div>
        </nav>';
  } else {
    echo '<nav class="navbar navbar-fixed-top sticky-top navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="link-group gap-2 ms-auto d-flex col-8 col-sm-4 col-lg-2 justify-content-end">
            <a class="btn btn-outline-success" href="../php/login.php">Log in</a>
              <a class="btn btn-primary" href="../php/signup.php">Sign up</a>
            </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <h1 class="navbar-brand">bloggoli</h1>
        </div> 
        </div>
        </nav>';
  } 
?>