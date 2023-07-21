<?php
  spl_autoload_register(function($class_name){
   include "classes/".$class_name.".php";
});

error_reporting(0);
  
$videoupload = new Videoupload();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
     $massage = $videoupload->comments($_POST);
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

     /*col-xl-8 and video*/

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

        .col-md-8 img{
          box-sizing: border-box;
          width: 100%;
          align-items: center;
          clear: both;
          height: 460px;
        }

        .col-md-4 img{
          box-sizing: border-box;
          width: 100%;
          align-items: center;
          clear: both;
          height: 200px;
        }

        @media screen and (max-width: 768px) {

          .col-md-8 img{
          box-sizing: border-box;
          width: 100%;
          align-items: center;
          clear: both;
          height: auto;
        }

        .container-fluid .comments{
          margin-bottom: 20px;

        }

        .comments{
          display: none;
        }

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
      <span style="font-size: 20px;">News</span>
      <div class="col-md-8">
        <?php
         $id = $_GET['id'];
         $videoupload = new Videoupload();
         $singleNewsData = $videoupload->getSingleNewsData($id);
         if($singleNewsData){
          while($row = mysqli_fetch_assoc($singleNewsData)) { ?>
          <img class="pb-4" src="uploads/image/<?php echo $row['image']; ?>">
          <p><?php echo $row['description']; ?></p>
     <?php } } ?>


  <!--contact section -->
  <div class="container-fluid">
      <div class="row bg-success text-light rounded-4 py-4 comments">
        <div class="col-xl-12">
          <h3> Comments</h3>
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
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" required></textarea>
          </div>

          <div class="mb-3">
           <input type="hidden" class="form-control" name="c_id" id="inputPassword" value="
            <?php
              $videoId = $videoupload->getSingleNewsData($id);
              foreach ( $videoId as $data) { ?>
                <?php echo $data['id']; ?>
              <?php } ?>

             ">
          </div>

          <div class="d-flex justify-content-end">
            <button type="submit" name="submit" class="btn btn-light">Submit</button>
          </div>
          </form>
          </div>
        </div>
      </div>
      <div class="comments mt-4">
        <h3>Comments</h3>
        <div class="">
          <?php
             $id = $_GET['id'];
             $videoupload = new Videoupload();
             $comments = $videoupload->getCommentsNewsData($id);
             if($comments){
              while($row = mysqli_fetch_assoc($comments)) { ?> 
              <hr><?php echo $row['name'];?><br>
              <?php echo $row['email'];?><br>
              <?php echo $row['message'];?><hr>
           <?php } } ?>
        </div>
        </div>

      </div> <!---col-md-8 -->
      
      <div class="col-md-4">
        <?php
       $newsData = $videoupload->getAllNewsData();
       if($newsData){
        while($row = mysqli_fetch_assoc($newsData)) { ?>
    
      <a class="text-decoration-none" href="single-news.php?id=<?php echo $row['id']; ?>">
      <img src="uploads/image/<?php echo $row['image']; ?>">

      <p><?php echo $row['title']; ?></p>
    </a> 

     <?php } } ?>
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



