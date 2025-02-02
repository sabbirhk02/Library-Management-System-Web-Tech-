<?php
  
  require_once('../models/bookModel.php');
  if (isset($_POST['submit'])){
    $Book_ID=$_POST['Bookid'];
    $Book_Name=$_POST['Bookname'];
    $Author=$_POST['Author'];
    $Genre=$_POST['Genre'];
    $Rating=$_POST['rating'];
    $filename = $_FILES["image"]["name"];

    $tempname = $_FILES["image"]["tmp_name"];

    $folder = "./upload/" . $filename;
 

    if( $Book_Name == "" || $Author== ""|| $Genre== ""|| $Rating == ""|| $image== ""){
        echo "Please Enter Date first";   
    }else{
      
       
        $status = Trend($Book_ID,$Book_Name,$Author,$Genre,$Rating,$image);
        if($status){
           
            header('location: ../views/TrendingBooks.php');
        
      echo "Trend Successfull";
      }
    

    }
   
  }  

?>