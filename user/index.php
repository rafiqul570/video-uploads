
<?php include($_SERVER['DOCUMENT_ROOT'].'/fwa/inc/header.php'); ?>

    <div class="sl-mainpanel">
         
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
<?php include($_SERVER['DOCUMENT_ROOT'].'/fwa/inc/footer.php'); ?>

     
         
