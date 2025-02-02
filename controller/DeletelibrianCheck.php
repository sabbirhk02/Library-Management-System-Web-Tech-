<?php 
require_once '../models/function.php';
    //session_start();
    if(isset($_GET['Librianid'])){
        $Librian_ID = $_GET['Librianid'];
        
        $status = DeleteLibrian($Librian_ID);
        if($status){
            header('location: ../views/Deletenewlibrian.php'); 
        }else{
            echo "DB error, try again";
        }
}
    
?>
