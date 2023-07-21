<?php
  spl_autoload_register(function($class_name){
   include "classes/".$class_name.".php";
});

error_reporting(0);
  
$videoupload = new Videoupload();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
     $massage = $videoupload->contact($_POST);
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Video Uploads</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="bs5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <style>
      /*breaking-news*/

     .breaking-news{
          background-color: crimson;
          color: white;
        }

     /*   col-xl-8 and video*/

      .col-xl-8 video{
          box-sizing: border-box;
          width: 100%;
        }

    /*   col-xl-4 and video*/

      .col-xl-4 video{
          box-sizing: border-box;
          width: 100%;
          border-radius: 15px !important;
        }


      .col-xl-3 img{
          box-sizing: border-box;
          width: 100%;
          align-items: center;
          clear: both;
        }


      .col-xl-4 img{
          box-sizing: border-box;
          width: 100%;
          align-items: center;
          clear: both;
        }

       @media screen and (max-width: 768px) {

          .col-xl-3 .link{
            margin-top: 20px !important;
          }

        }



    </style>

  </head>
  <body>
    <header class="header-top">
      MOGHIA SALEHIA ALIM MADRASHA
    </header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">MSAM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"                     aria-expanded="false">
                  Multi-level Item
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"> Menu Item 1</a></li>
                  <li><a class="dropdown-item" href="#"> Menu Item 2</a></li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item text-danger" href="#"> Second Level <span
                        class="float-end custom-toggle-arrow">&#187</span></a>
                    <ul class="dropdown-menu second">
                      <li><a class="dropdown-item" href="#">Second Level Item 1</a></li>
                      <li><a class="dropdown-item" href="#">Second Level Item 2</a></li>
    
                      <li class="dropdown-submenu">
                        <a class="dropdown-item text-danger" href="#"> Third Level <span
                            class="float-end custom-toggle-arrow">&#187</span></a>
                        <ul class="dropdown-menu third">
                          <li><a class="dropdown-item" href="#">Third Level Item 1</a></li>
                          <li><a class="dropdown-item" href="#">Third Level Item 2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link">Link</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    
    <!--  Braking News -->
      <div class="breaking-news px-4">
          <marquee onmouseover="this.stop()" onmouseout="this.start()">
          <?php 
           $brakingnews = $videoupload->getBrakingNewsData();
             if($brakingnews){
             while($row = mysqli_fetch_assoc($brakingnews)) { ?>
            <a style="color: white; text-decoration: none;" href="single.php?id=<?php echo $row['id']?>">
           <span class="text-light">* *</span> <?php echo $row['title']; ?> 
            </a>
            <?php } } ?>
          </marquee> 
       </div>              
  
  <!-- main contant -->
  <div class="container-fluid px-5">
    <!-- section-1 -->
    <div class="row py-4">
     <div class="col-xl-9">
      <div class="row">
        <div class="col-xl-8">
        <?php
         $id = $_GET['id'];
         $videoupload = new Videoupload();
         $singleData = $videoupload->getSingleData($id);
         if($singleData){
          while($row = mysqli_fetch_assoc($singleData)) { ?>
      
      <video autoplay="" loop="" muted="" src="uploads/file/<?php echo $row['file']; ?>" controls width="600"></video>
      <p><?php echo $row['title']; ?></p>
     <?php } } ?>
  </div><!-- col-lg-8 -->
   

 <div class="col-xl-4" style="height :350px; overflow: auto;">
    <?php
       $singleData = $videoupload->getAllSingleData();
       if($singleData){
        while($row = mysqli_fetch_assoc($singleData)) { ?>
 
      <a style="text-decoration:none;" href="single.php?id=<?php echo $row['id']; ?>">
      <video src="uploads/file/<?php echo $row['file']; ?>" width='280' type="video/mp4" loop class="clip" muted ></video>

      <p><?php echo $row['title']; ?></p>
    </a> 
     <?php } } ?>
   </div>
  </div>
 </div>


<!-- Right-Sidebar -->
<div class="col-xl-3">
  <p class="text-center">বিজ্ঞাপন</p>
  <div class="single-ads text-center"> 
    <img class="mb-5" src="img/Banner-ads-1.gif" alt="image">
  </div>
  </div>   
 </div>

<!-- section-2 -->
<div class="row py-4">
  <div class="col-xl-9" style="height :400px; overflow: auto;">
    <div class="row">
      <span class="pb-3">News</span>
    <?php
       $newsData = $videoupload->getAllNewsData();
       if($newsData){
        while($row = mysqli_fetch_assoc($newsData)) { ?>
    <div class="col-xl-4">
      <a class="text-decoration-none" href="single-news.php?id=<?php echo $row['id']; ?>">
      <img src="uploads/image/<?php echo $row['image']; ?>">

      <p><?php echo $row['title']; ?></p>
    </a> 
     
     </div>
     <?php } } ?>
     </div>
  </div>
  
  <!-- sidebar-2 -->
  <div class="col-xl-3">   
  <h3 class="text-center bg-warning p-2">LINK</h3>
   <div class="link" >
      <ul class="navbar-nav p-2">
        <li class="nav-item">
          <a class="nav-link" href="#">Link-1</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Link-2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link-3</a>
        </li>
    </ul>
    </div>
  </div>
 </div>
</div>


  <!--contact section -->
  <div class="container-fluid px-5">
  <div class="row bg-success text-light rounded-4 p-4">
    <div class="col-xl-12 p-5 ">
      <h3> Contact</h3>
      <form action="" method="POST">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Enter Your name" required>
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" required>
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Subject</label>
        <input type="text" class="form-control" name="subject" id="exampleFormControlInput1" placeholder="Subject" required>
      </div>

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" required></textarea>
      </div>

      <div class="d-flex justify-content-end">
        <button type="submit" name="submit" class="btn btn-light">Submit</button>
      </div>
      </form>
      </div>
    </div>
  </div>


<!-- JS FILE -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="bs5/js/bootstrap.bundle.min.js"></script>
 <script>
  const clip = document.querySelectorAll('.clip');
  for(let i = 0; i<clip.length; i++){
    clip[i].addEventListener('mouseenter', function(e){
      clip[i].play()
    })

    clip[i].addEventListener('mouseout', function(e){
      clip[i].pause()
    })
  }
</script>
</body>
</html>



