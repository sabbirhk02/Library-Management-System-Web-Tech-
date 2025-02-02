<?php
  include_once("../models/db.php");
  require_once('../models/bookModel.php');
  if (isset($_POST['submit'])){
     $Book_ID=$_POST['Bookid'];
    $Book_Name=$_POST['Bookname'];
    $Author=$_POST['Author'];
    $Genre=$_POST['Genre'];
    $Quantity=$_POST['Quantity'];

    
    if( $Book_Name == "" || $Author== ""|| $Genre== ""|| $Quantity== ""){
      echo "Please Enter Date first";   
    }else{
        $Books = ['Book_Name'=> $Book_Name,'Author'=> $Author ,'Genre'=> $Genre ,'Quantity'=> $Quantity];
        $status = Update($Books,$Book_ID);
        if($status){
           
            header('location: ../views/ViewBooks.php');
        }else{
          header('location: ../views/ViewBooks.php');
      }
    
  }
}
  

?>