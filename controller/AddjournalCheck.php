<?php
   session_start();
  require_once('../models/userModel.php');
  if (isset($_POST['submit'])){
    $Journal_ID=$_POST['Journal_ID'];
    $Tittle=$_POST['Tittle'];
    $PlaceOfP=$_POST['PlaceOfP'];
    $Publisher=$_POST['Publisher'];
    $Volume=$_POST['Volume'];
    $Issue=$_POST['Issue'];
    $Date=$_POST['Date'];

    
  

    if( $Journal_ID == "" || $Tittle == "" || $PlaceOfP== ""|| $Publisher== "" || $Volume== "" || $Issue== "" || $Date== ""){
        echo "Please Enter Data first";   
    }else{
        $_SESSION['flag'] = "true";
        $Journal = ['Journal_ID'=>$Journal_ID,'Tittle'=>$Tittle,'PlaceOfP'=> $PlaceOfP,'Publisher'=> $Publisher ,'Volume'=> $Volume,'Issue'=> $Issue,'Date'=> $Date];
        $status = AddJournal($Journal);
        if($status){
           
            header('location: ../views/catalog_book.php');
        }else{
      echo "Error:";
      }
    
    }
  }  
?>