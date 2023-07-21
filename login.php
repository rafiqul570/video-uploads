<?php
   spl_autoload_register(function($class_name){
   include "classes/".$class_name.".php";
});

  $user = new User();
    
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Login'])) {
      $userLog = $user->userlogin($_POST);
  }


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fwa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bs5/css/bootstrap.min.css">
  </head>
  <body>

  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center">
                <a href="index.php" class="logo d-flex align-items-center w-auto" style="text-decoration: none; font-size: 24px;color: green;margin-top: -40px">
                  <span>Signin Acount</span>
                </a>
              </div><!-- End Logo -->
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Welcome!</h5>
                    <p class="text-center small">Sign in to your account</p>
                  </div>

                  <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Phone</label>
                      <div class="input-group has-validation">
                        <input type="text" name="phone" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your Phone number.</div>
                      </div>
                    </div>

                    <div class="col-12 pb-2">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12 pb-2">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12 pb-2">
                      <button class="btn btn-primary w-100" type="submit" name="Login">Login</button>
                    </div>
                    <div class="col-12">
                      <a style="text-decoration: none;" href="">Forgot password?</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="bs5/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

