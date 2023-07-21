<?php
spl_autoload_register(function($class_name){
include "classes/".$class_name.".php";
}); 
//error_reporting(0);
 
class Videoupload{

private $db;

  public function __construct(){
    $this->db = new Database();
  }


//Insert Video
  public function videouploads($data){
     $title = $data['title'];
    
     $file_name = $_FILES['file']['name'];
     $file_size = $_FILES['file']['size'];
     $file_type = $_FILES['file']['type'];
     $tmp_name  = $_FILES['file']['tmp_name'];
     $permited  = array('mp4', 'webm', 'avi', 'flv');
     $div = explode(".", $file_name);
     $file_ext = strtolower(end($div));
     $file_check = in_array($file_ext, $permited);
     $file = uniqid().$file_ext;
     $uploaded_file = '../uploads/file/'.$file;
     

      if ($title == "" ) {
          
      $msg = '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              Field must not be Empty !
            </div>';
    
         return $msg; 
     
   }

   if (empty($file_name)) {
    $msg = '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              Select any Video .
            </div>';
    
          return $msg; 
  
     
   }elseif($file_size > 6000000){

    $msg = '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              Video size should be less then 5mb .
            </div>';
    
          return $msg; 

   }elseif($file_check == !true) {
    
        
        $msg = '<div class="alert alert-danger alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             You can upload video only mp4</div>';
  
      return $msg;  
    
    }else{
    
   move_uploaded_file($tmp_name,  $uploaded_file);

   $query="INSERT INTO videos(title,file)VALUES('$title', '$file')";
     $result = $this->db->insert($query);

  if ($result) {
      
      $msg = '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Success !</strong>  Data Inserted Successfully.
            </div>';

        return $msg;
       
  }else{

    $msg = '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Error !</strong>  Sorry, Data Not Inserted.
            </div>';
    
       return $msg;  
  
  }
   
   }  

  } 


  // Braking News query
  public function getBrakingNewsData(){
        $query = "SELECT * FROM videos ORDER BY id DESC ";
        $result = $this->db->select($query);
         if($result->num_rows > 0){
            return $result;
          } else {
            return false;
          } 
        }


  //Single page select query
   
    public function getSingleData($id){
        $query = "SELECT * FROM videos WHERE id = '$id' LIMIT 1";
        $result = $this->db->select($query);
         if($result->num_rows > 0){
            return $result;
          } else {
            return false;
          } 
        }



     public function getAllSingleData(){
        $query = "SELECT * FROM videos ORDER BY id DESC ";
        $result = $this->db->select($query);
            return $result;
         
        }

    public function getAllSingleData2(){
        $query = "SELECT * FROM videos ORDER BY id DESC LIMIT 1";
        $result = $this->db->select($query);
            return $result;
         
        }


    //Insert Contact
    public function contact($data){
         $name = $data['name'];
         $email = $data['email'];
         $subject = $data['subject'];
         $message = $data['message'];

          if ($name == "" || $email == "" || $subject == "" || $message == "" ) {
              
          $msg = '<div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 <strong>Error !</strong> Field must not be Empty !
                </div>';
        
             return $msg; 
         
   }

   $query="INSERT INTO contact(name,email,subject,message) VALUES ('$name', '$email', '$subject', 
    '$message')";
     $result = $this->db->insert($query);

  if ($result) {
      
      $msg = '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Success !</strong>  Data Inserted Successfully.
            </div>';

        return $msg;
       
  }else{

    $msg = '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Error !</strong>  Sorry, Data Not Inserted.
            </div>';
    
       return $msg;  
  
  }
   
}



  //Contact data select query
   
    public function getContactData($id){
        $query = "SELECT * FROM contact WHERE id = '$id' ";
        $result = $this->db->select($query);
            if($result->num_rows > 0){
            return $result;
          } else {
            return false;
          } 
         
        }


    public function getAllContactData(){
       $query = "SELECT * FROM contact ";
        $result = $this->db->select($query); 
        return $result;
    }


//Delete Data  
  public function deleteData($id){ 
      $query = "DELETE FROM contact WHERE id = '$id'";
      $result = $this->db->delete($query);      
       
        if ($result){
          $msg = '<div id="alert" class="alert alert-danger alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Success !</strong> Data Delete Successfully.
              </div>';
      
           return $msg; 
          
     
    }else{

      $msg = '<div id="alert" class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 <strong>Error !</strong> Data Not Deleted.
                </div>';
        
             return $msg; 
    
    }


  }



    //Insert News
    public function insertNews($data){
         $title = $data['title'];
         $description = $data['description'];
         
         //upload image
          $file_name = $_FILES['image']['name'];
          $file_size = $_FILES['image']['size'];
          $tmp_name  = $_FILES['image']['tmp_name'];
          $permited  = array('jpeg', 'jpg', 'png', 'gif');
          $div = explode(".", $file_name);
          $file_ext = strtolower(end($div));
          $file_check = in_array($file_ext, $permited);
          $image = uniqid().$file_ext;
          $uploaded_image = '../uploads/image/'.$image;

          if ($title == "" || $description == "" || $image == ""  ) {
              
          $msg = "<div class='alert  alert-success alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-success'> Error !</span> Field must not be Empty!
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                  </button>
              </div>";
    
         return $msg; 
   
 } 

  if (empty($file_name)){
    $msg = '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Sorry !</strong> Please Select any Image .
            </div>';
    
          return $msg; 
  
     
   }elseif($file_size > 304803456){

    $msg = '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Error !</strong> Image size should be less then 3KB
            </div>';
    
          return $msg; 

   }elseif($file_check === false) {
    
        
        $msg = '<div class="alert alert-danger alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Sorry !</strong>You can upload only  -  ( jpeg, jpg, png, gif )
            </div>';
  
      return $msg;  
    
    }else{
    
    
   move_uploaded_file($tmp_name, $uploaded_image);

   $query="INSERT INTO news(title,description,image) VALUES ('$title', '$description', '$image')";
     $result = $this->db->insert($query);

  if ($result) {
      
      $msg = '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Success !</strong>  Data Inserted Successfully.
            </div>';

        return $msg;
       
  }else{

    $msg = '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Error !</strong>  Sorry, Data Not Inserted.
            </div>';
    
       return $msg;  
  
  }
   
}

}

 public function getAllNewsData(){
        $query = "SELECT * FROM news ORDER BY id DESC ";
        $result = $this->db->select($query);
            return $result;
         
        }

  public function getSingleNewsData($id){
    $query = "SELECT * FROM news WHERE id = '$id' LIMIT 1";
        $result = $this->db->select($query);
            if($result->num_rows > 0){
            return $result;
          } else {
            return false;
          } 
  }


   //Insert Comments
    public function comments($data){
         $name = $data['name'];
         $email = $data['email'];
         $message = $data['message'];
         $c_id = $data['c_id'];

          if ($name == "" || $email == "" || $message == "" ) {
              
          $msg = '<div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 <strong>Error !</strong> Field must not be Empty !
                </div>';
        
             return $msg; 
         
   }

   $query="INSERT INTO comments(name,email,message,c_id)VALUES('$name', '$email', '$message', '$c_id')";
     $result = $this->db->insert($query);

  if ($result) {
      
      $msg = '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Success !</strong>  Data Inserted Successfully.
            </div>';

        return $msg;
       
  }else{

    $msg = '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Error !</strong>  Sorry, Data Not Inserted.
            </div>';
    
       return $msg;  
  
  }
   
}



  //Comments select query
   
     public function getCommentsNewsData($id){
        $query = "SELECT * FROM comments WHERE c_id = '$id' ";
        $result = $this->db->select($query);
            if($result->num_rows > 0){
            return $result;
          } else {
            return false;
          } 
         
        }


}

?>




