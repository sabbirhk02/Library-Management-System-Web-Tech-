<?php 
require_once '../models/userModel.php';
    if(isset($_GET['Book_ID'])){
       $Book_ID = $_GET['Book_ID'];
    
          
        $status = DeleteBooks($Book_ID);
        
        if($status){
            header('location: ../views/catalog_book.php'); 
        }else{
            echo "DB error, try again";
        }
    }
    
?>
