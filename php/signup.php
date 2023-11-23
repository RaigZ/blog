<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../css/signup.css" rel="stylesheet" type="text/css" >
    <link href="../css/top-nav.css" rel="stylesheet" type="text/css">
  </head>
<body> 
  <!-- NAVBAR -->
  <?php include '../includes/header.php'?> 
    <!-- Body -->
    <div class="container d-flex flex-column justify-content-center align-items-center gap-2 h-75">
        <h1>Welcome to our blog!</h1>
        <form action="register.php" method="GET">
            <div class="row gap-2 justify-content-center">
                <div class="col-8 col-md-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username">
                    </div>
                </div>
                <div class="col-8 col-md-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" name="email" placeholder="Email" aria-label="Email">
                    </div>
                </div>
                <div class="col-8 col-md-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password">
                    </div>
                </div> 
                <div class="col-8 col-md-6 d-flex justify-content-center">
                  <input type="submit" class="col-8 col-md-6 btn btn-primary mb-3" >
              </div>
            </div>
        </form>
    </div>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>