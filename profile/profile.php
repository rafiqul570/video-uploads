<?php
spl_autoload_register(function($class_name){
include "../classes/".$class_name.".php";
});

//error_reporting(0);

$fwa = new Fwa();
Session::init();
if (! isset($_SESSION['login'])){
header ('Location:login.php');
}

?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/fwa/inc/header.php'); ?>

<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

         <?php
         if (isset($_GET['success_msg'])) {
             $msg =   $_GET['success_msg'];
             echo $msg;
           }

         ?> 
         <div class="sl-pagebody">
          <div class="card pd-20 pd-sm-40 form-layout form-layout-5">  
          <a href="update.php?id=<?php echo $id; ?>"><h5>Edit Profile</h5></a> 
          <?php
            $profileData = $fwa->getProfileData($id);
            foreach ( $profileData as $row) {
            ?>
          	<table class="table mt-5">
			  <tbody>
			    <tr>
			      <th width="15%">Username</th>
			      <td width="85%"><?php echo $row['username'];?></td>
			    </tr>
			    <tr>
			      <th>Phone Number</th>
			      <td><?php echo $row['phone'];?></td>
			    </tr>
			  </tbody>
			</table>
           </div>
          <?php } ?>
          </div><!-- sl-pagebody -->
        </div><!-- sl-mainpanel -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/fwa/inc/footer.php'); ?>	
 