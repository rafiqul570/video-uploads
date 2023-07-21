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

//Delete Data
if (isset($_GET['id'])) {
    $id =   $_GET['id'];

    $delete = $videoupload->deleteData($id);

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
          <h3>ALL CONTACT</h3>
          <table class="table table-warning table-striped table-bordered">
                <thead>
                  <tr>
                  <th width="10%">SL NO</th>
                  <th width="15%">Name</th>
                  <th width="20%">Email</th>
                  <th width="40%">Subject</th>
                  <th width="15%">Action</th>
                </tr>
                </thead>

                <tbody>
                  <?php
                   $videoupload = new Videoupload();
                   $AllContact = $videoupload->getAllContactData();
                   if($AllContact){
                    $i = 0;
                    $i++;
                    while($row = mysqli_fetch_assoc($AllContact)) { ?>
                
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['subject'];?></td>
                    <td>
                       
                      <a href="view-contact.php?id=<?php echo $row['id']; ?>">View</a> || 
                      <a onclick="return confirm('Are you sure ?')" href="?id=<?php echo $row['id'] ?>">Delete</a>
                    </td>
                  </tr>
                </tbody>
                 <?php } } ?>
              </table>
         
        </div><!-- row -->
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/video-uploads/inc/footer.php'); ?>

     