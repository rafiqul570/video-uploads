<?php
spl_autoload_register(function($class_name){
include "../classes/".$class_name.".php";
});

$user = new User();


Session::init();
if (! isset($_SESSION['login'])){
header ('Location:../login.php');
}

// Logout
if (isset($_GET['action']) && $_GET['action'] == "logout") {
      Session::destroy();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Project-1</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="../lib/highlightjs/github.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">
    
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="../css/starlight.css">
    <link rel="stylesheet" href="../css/header.css">
    
  </head>

  <body>    
  
  <?php 
    $session = new Session();          
    $id = Session::get("id");
    $role = Session::get("role");
    if ($role == 1) { 
    ?>
    <div class="sl-logo pl-5"><a href="../admin/index.php"><i class="icon ion-android-star-outline pr-2"></i> VIDEO <i class="icon ion-android-star-outline pl-2"></i></a></div>
    <div class="sl-sideleft">
      <label class="sidebar-label"></label>
      <div class="sl-sideleft-menu">
        <a href="../admin/index.php" class="sl-menu-link active">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link --> 
          
         <a href="../index.php" target="_blank" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Visite Site</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <span class="menu-item-label">Video</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="../video/add-video.php" class="nav-link">Add video</a></li>
        </ul> 

        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <span class="menu-item-label">News</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div>
        </a>
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="../news/add-news.php" class="nav-link">Add News</a></li>
        </ul> 

        <a href="../contact/show-contact.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <span class="menu-item-label">All Contact</span>
          </div><!-- menu-item -->
        </a>  
       
      <?php } ?>
      
      </div><!-- sl-sideleft-menu -->
      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      
      <div class="sl-header-right" style="margin-right: 40px;">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              
              <?php
                  $username = Session::get("username");
                  if(isset($username)){
                     echo $username; 
                  }
                ?>
                
             </a>

             
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <?php
                $session = new Session();          
                $id = Session::get("id");
                $userlogin = Session::get("login");
                if ($userlogin == true) {
               ?>
              <ul class="list-unstyled user-profile-nav">
                <li><a href="../profile/profile.php?id=<?php echo $id; ?>"><i class="icon ion-ios-person-outline"></i>Profile</a></li>
                <li><a class="nav-link" href="?action=logout"><i class="icon ion-power"></i> Logout</a>

                <?php }else{ ?>

                    <a class="nav-link" href="login.php"><i class="fa fa-sign-in"></i> Login</a>
                 <?php } ?>

                </li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
  <!-- ########## END: HEAD PANEL ########## -->

 