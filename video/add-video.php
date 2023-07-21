<?php
  spl_autoload_register(function($class_name){
   include "../classes/".$class_name.".php";
});

//error_reporting(0);
  
$videoupload = new Videoupload();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
     $massage = $videoupload->videouploads($_POST);
}


?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/video-uploads/inc/header.php'); ?>

  <!-- ########## START: MAIN PANEL ########## -->
   <div class="sl-mainpanel">
  
      <div class="sl-pagebody" style="color:#000">  
       <div class="card bg-warning p-4" style="margin-top: -20px">
        <h1 class="text-center">ADD VIDEO</h1>
  
      <?php
        if (isset($massage)) {
          echo $massage;
        }

        ?>

      <div class=" pt-3">
      <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
       <div class="form-layout">
        <div class="row mg-b-25">

          <div class="col-lg-12">
            <div class="form-group">
              <label class="form-control-label">শিরোনাম <span class="text-danger">*</span></label>
              <input class="form-control" type="text" name="title" placeholder="শিরোনাম লিখুন">
            </div>
          </div><!-- col-6 -->
 
          <div class="col-lg-12">
            <div class="form-group">
              <input class="form-control" type="file" name="file">
            </div>
          </div><!-- col-6 -->
          
        
        <div class="form-layout-footer mg-t-30 d-flex justify-content-end">
           <button name="submit" class="btn btn-info mg-r-5">Submit</button>
           <button class="btn btn-secondary">Cancel</button>
        </div>
       </form>
       </div>
      </div>
     </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

<?php include($_SERVER['DOCUMENT_ROOT'].'/video-uploads/inc/footer.php'); ?>

