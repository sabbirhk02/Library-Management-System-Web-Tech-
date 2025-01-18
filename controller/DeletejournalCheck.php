<?php 
require_once '../models/userModel.php';
    if(isset($_GET['Journal_ID'])){
       $Journal_ID = $_GET['Journal_ID'];
    
          
        $status = DeleteJournal($Journal_ID);
        
        if($status){
            header('location: ../views/catalog_book.php'); 
        }else{
            echo "DB error, try again";
        }
    }
    
?>