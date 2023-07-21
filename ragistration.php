<?php
   spl_autoload_register(function($class_name){
   include "classes/".$class_name.".php";
});

 $subscriber = new Subscriber();

 //Session Start
  Session::init();
  if (! isset($_SESSION['login'])){
  header ('Location: login.php');
  die();
  }

  Session::init();
  if (isset($_GET['id'])) {
     $userid = (int)$_GET['id'];
  }
 
    
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['registration'])) {
      $userRegi = $subscriber->userRegistration($_POST);
  }

?>
<!DOCTYPE html>
<html>
<head>
  <title>MSAM</title>
  <!-- CSS FILE -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/fontend.css" rel="stylesheet" type="text/css">
  <link href="Font-Awesome/css/all.min.css" rel="stylesheet" type="text/css">

</head>
<body class="bangla-font">
 <div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
     <img src="img/pp.jpg" width="110%" height="640px"> 
    </div>

    <div class="col-md-4">
       <div class="card" style="height: 640px">
        <div class="card-body">
      <?php
        if (isset($userRegi)) {
          echo $userRegi;
        }

        ?>
        <div class="menu d-flex justify-content-center">
        <a href="">FAQ</a>
        <a href="">Guideline</a>
        <a href="">Contact Us</a>
      </div>
      <h1 class="text-center">Sign Up</h1>
      <h6 class="text-center">Please enter the information below for registration</h6>
      <div class="d-flex justify-content-center pt-3">
      <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">User Name</label>
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Username">
      </div>
      
      <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
        <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Phone number">
      </div> 

      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>

      <div class="form-group">
        <input type="hidden" name="role" value="0" class="form-control" id="exampleInputPassword1" >
      </div>
      <div class="d-grid gap-2 pt-2">
      <button type="submit" name="registration" class="btn btn-block btn-primary">Sign Up</button>
     </div>
     </form>
     </div>
     <div class="pt-4">
     <h6 class="text-center">Already registered? <a style="text-decoration: none;" href="login.php">Sign in</a></h6>
     </div>
    </div>
    </div>
   </div>
  </div>
</div>


<!-- JS FILE -->
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/popper.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="Font-Awesome/js/all.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>

<!-- Auto Hide bootstrap alert message-->
<script>
$(document).ready(function() {
    setTimeout(function() {
      $(".alert").alert('close');
    }, 1000);
});
</script>
</body>
</html>