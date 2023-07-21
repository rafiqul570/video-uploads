<?php
spl_autoload_register(function($class_name){
include "classes/".$class_name.".php";
}); 
//error_reporting(0);
$session = new Session();  
class User{

private $db;

  public function __construct(){
    $this->db = new Database();
  }



 //====== LOGIN PATR START ===============//

    public function userLogin($data){
	    
		$phone = $data['phone'];
		$password = md5($data['password']);
		
	   if ($phone == "" || $password == "") {	
    	
		      $msg = "<div id='alert' class='alert  alert-success alert-dismissible fade show text-center text-danger' role='alert'>
                   <h6>Field must not be Empty!</h6>
                </div>";
			
		       return $msg;  
	 
		 }    
   		
	if (strlen($phone ) != 11 ) {
	 	   
			$msg = "<div id='alert' class='alert  alert-success alert-dismissible fade show text-center text-danger' role='alert'>
                   <h6>Phone number is not currect.</h6>
                </div>";
			
		    return $msg;
     }

	$query = "SELECT * FROM user WHERE phone = '$phone' AND password = '$password' LIMIT 1";
		$result = $this->db->select($query);
        if ($result !== false) {
		 	$value = $result->fetch_assoc();
		 	Session::init();
		  	Session::set("login", true);
		  	Session::set("id", $value['id']);
		  	Session::set("name", $value['name']);
		  	Session::set("username", $value['username']);
		  	Session::set("role", $value['role']);
		  	Session::set("phone", $value['phone']);
		  	Session::set("current_time", $value['current_time'] = time());
		  	Session::set("loginmsg", "<div id='alert' class='alert alert-success'><strong> Success ! </strong> You are logedin . </div>");
		  	header("Location: redirect.php");
		 
		 }else{

			$msg = "<div id='alert' class='alert  alert-success alert-dismissible fade show text-center text-danger' role='alert'>
                   <h6>The Phone number or password is not valid !</h6>
                </div>";
			
		    return $msg; 
		
		 }
		

		}

//All User
	public function getAllUserData(){
        $query = "SELECT *FROM user ORDER BY id ";
        $result = $this->db->select($query);
         if($result->num_rows > 0){
            return $result;
          } else {
            return false;
          } 
        }
	     
	// ==============Profile Part=====================
		public function getProfileData($id){
		$query = "SELECT * FROM user WHERE id = '$id' LIMIT 1";
	        $result = $this->db->select($query);
	        return $result;
	     }
		

	//Update Profile
		public function getUserById($id){
		$sql = "SELECT * FROM user WHERE id = '$id' LIMIT 1";
	        $query = $this->db->update($sql);
	        $result = mysqli_fetch_array($query);
	        return $result;
	     }

	   public function updateUser($id, $data){
	      $sql = "SELECT * FROM user WHERE id = '$id'";
	      $result = $this->db->select($sql);
	      $query = mysqli_fetch_array($result);

	       $username = $data['username'];
	       $phone = $data['phone'];

	    $query = "UPDATE user SET username = '$username', phone = '$phone' WHERE id = '$id' ";
	    $result = $this->db->update($query);

	  if ($result) {
	      header("Location: ../profile/profile.php?success_msg=".urlencode('
	             <div id="alert" class="alert alert-danger alert-dismissible">
	             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	              <strong></strong> Profile Update Successfully.
	             </div>

	        '));
	   

	  }else{

	      header("Location: ../profile/update.php?error_msg=".urlencode('

	            <div id="alert" class="alert alert-danger alert-dismissible">
	             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	              <strong></strong> Profile Not Updated.
	             </div>

	        '));
	  
	   }

	}
	     
//Update Password//
 
 	private function checkPassword($id, $old_pass){
		$password = md5($old_pass);
		$sql = "SELECT password FROM user WHERE id = '$id' AND password = '$old_pass' ";
		$result = $this->db->select($sql);
		if($result->rowCount() > 0){
	    return true;
	    } else {
	    return false;
	  }

	}


	public function updatePassword($id, $data){

	 	$old_pass = $data['old_pass'];
		$new_pass = $data['password'];
			
		if ($old_pass == "" OR $new_pass == "" ) {
			
			$msg = "<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                    <span class='badge badge-pill badge-success'> Error !</span> Field must not be Empty.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
			
		    return $msg;

	    }


	    $query = "SELECT * FROM user WHERE password = '$old_pass' LIMIT 1";
		$chk_pass = $this->db->select($query);
	    
	    if ($chk_pass !== false) {
	         
			$msg = "<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                    <span class='badge badge-pill badge-success'> Error !</span> Old password not Exist.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
			
		    return $msg;

	    } 
	    
	    if (strlen($new_pass) < 6) {

	    	$msg = "<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                    <span class='badge badge-pill badge-success'> Error !</span> Password is too short.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
			
		    return $msg;
	         
	    }
	

		$password = md5($new_pass); 
		$sql = "UPDATE users set password = '$password' WHERE id = :id";
		$result = $this->db->update($sql);
		
		if ($result) {
			
			$msg = "<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                    <span class='badge badge-pill badge-success'>Success !</span> Password Updated Successfully.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
			
		    return $msg;
		   
		
		}else{

			$msg = "<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                    <span class='badge badge-pill badge-success'> Error !</span> Password Not Updated.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
			
		    return $msg;

		   }
		}

   }

?>




