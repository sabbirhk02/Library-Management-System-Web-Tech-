<?php
   session_start();
  require_once('../models/userModel.php');
  if (isset($_POST['submit'])){
    $id=$_POST['id'];
   $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];


    if( $name == "" || $email== ""|| $password== ""){
        echo "Please Enter Date first";   
    }else{
        $_SESSION['flag'] = "true";
        $profile = ['id'=>$id,'name'=> $name,'email'=> $email ,'password'=> $password];
        $status = Update($profile);
        if($status){
           
            header('location: ../views/catalog_book.php');
        }else{
      echo "Error:";
      }
    
    }
 }  
?>