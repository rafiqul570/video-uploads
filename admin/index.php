
<?php include($_SERVER['DOCUMENT_ROOT'].'/video-uploads/inc/header.php'); ?>

 <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a href="#">
        <span class="breadcrumb-item active">Dashboard</span>
        </a>
        </nav>
         
         <?php
         $loginmsg = Session::get("loginmsg");
          if (isset($loginmsg)) {
              echo  $loginmsg;
          }
          Session::set("loginmsg", NULL);

        ?>

      <div class="sl-pagebody">
        <div class="row row-sm">
         

         
        </div><!-- row -->
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/video-uploads/inc/footer.php'); ?>

     