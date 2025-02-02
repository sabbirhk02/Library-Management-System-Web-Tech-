<?php 
require_once '../models/bookModel.php';
    if(isset($_GET['Bookid'])){
       $Book_ID = $_GET['Bookid'];
    
          
        $status = DeleteUsers($Book_ID);
        
        if($status){
            header('location: ../views/ViewBooks.php'); 
        }else{
            echo "DB error, try again";
        }
    }
    
?>
