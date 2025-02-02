<?php
   session_start();
   require_once('../models/db.php');
  require_once('../models/userModel.php');
  include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");

  if (isset($_POST['submit'])){

    if($_FILES["image"]["error"] == 4){
      echo
      "<script> alert('Image Does Not Exist'); </script>"
      ;
    }
    else{
      $fileName = $_FILES["image"]["name"];
      $fileSize = $_FILES["image"]["size"];
      $tmpName = $_FILES["image"]["tmp_name"];
  
      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $fileName);
      $imageExtension = strtolower(end($imageExtension));
      if ( !in_array($imageExtension, $validImageExtension) ){
        echo
        "
        <script>
          alert('Invalid Image Extension');
        </script>
        ";
      }
      else if($fileSize > 1000000){
        echo
        "
        <script>
          alert('Image Size Is Too Large');
        </script>
        ";
      }
      else{
        $Image = uniqid();
        $Image .= '.' . $imageExtension;
  
        move_uploaded_file($tmpName, 'upload/' . $Image);
        $userid=$user['id'];
        $con = getConnection();
       
      $sql = "UPDATE `reg_info` SET `image`='$Image' WHERE `id`='$userid'";
    $status = mysqli_query($con, $sql);
 
}
   
       
        if($status){
           
            header('location: ../views/profile.php');
        }else{
      echo "Error:";
      }
    

    }
    
 
  }  
    
  
?>