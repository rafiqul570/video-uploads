<?php
  spl_autoload_register(function($class_name){
   include "../classes/".$class_name.".php";
});


//error_reporting(0);
$videoupload = new Videoupload();

$session = new Session();
Session::init();
if (! isset($_SESSION['login'])){
header ('Location:../login.php');
}

?>



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
          <h3 class="text-success py-5">CONTACT View</h3>
          <div class="text-dark">
          <?php
             $id = $_GET['id'];
             $videoupload = new Videoupload();
             $contact = $videoupload->getContactData($id);
             if($contact){
              while($row = mysqli_fetch_assoc($contact)) { ?> 
              Name : <?php echo $row['name'];?><br>
              Email : <?php echo $row['email'];?><br>
              Message : <?php echo $row['message'];?>
           <?php } } ?>
        </div>
         
        </div><!-- row -->
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/video-uploads/inc/footer.php'); ?>

     