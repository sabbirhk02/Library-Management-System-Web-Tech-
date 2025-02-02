<?php
   session_start();
  require_once('../models/bookModel.php');
  if (isset($_POST['submit'])){
    $Book_ID=$_POST['Bookid'];
    $Book_Name=$_POST['Bookname'];
    $Author=$_POST['Author'];
    $Genre=$_POST['Genre'];
    $Quantity=$_POST['Quantity'];
   
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

     
   
        $status = AddBook( $Book_ID, $Book_Name,$Author,$Genre, $Quantity,$Image);
        if($status){
           
            header('location: ../views/ViewBooks.php');
        }else{
      echo "Error:";
      }
    

    }
    
 
  }  
    }
  
?>