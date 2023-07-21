<?php
spl_autoload_register(function($class_name){
include "../classes/".$class_name.".php";
});

//error_reporting(0);

$fwa = new Fwa();

$session = new Session();
Session::init();
if (! isset($_SESSION['login'])){
header ('Location:login.php');
}

?>

<?php
   if (isset($_GET['id'])) {
      $id = (int)$_GET['id'];

      $row = $fwa->getUserById($id);

   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Update'])) {
        $updateuser = $user->updateUser($id, $_POST);
    }
  
}

?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/fwa/inc/header.php'); ?>

<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

         <div class="sl-pagebody">
          <div class="card pd-20 pd-sm-40 form-layout form-layout-5">  
          <form action="" method="POST">
            <br>
               <div class="form-group">
                <label>User name</label>
                <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>">
                </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control" name="phone" value="<?php echo $row['phone']; ?>">
                   </div>
                    <br><br>
                    
                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="Update" style="cursor: pointer;">Update</button>
                        
                    </form>
                </div>
          </div><!-- sl-pagebody -->
        </div>

	<?php include($_SERVER['DOCUMENT_ROOT'].'/fwa/inc/footer.php'); ?>
 