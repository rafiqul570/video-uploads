<?php
spl_autoload_register(function($class_name){
include "classes/".$class_name.".php";
});

$session = new Session();

Session::init();
if (! isset($_SESSION['login'])){
header ('Location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php          
$role = Session::get("role");
if ($role == 1) {

header("Location: admin/index.php");

} else {

if ($role == 0) {

header("Location: user/index.php");

}
}
?>
</body>
</html>