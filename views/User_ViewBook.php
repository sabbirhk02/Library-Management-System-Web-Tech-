<?php
  require_once('../models/bookModel.php');
  $viewbook = getuserviewbook();
  include_once("../models/db.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Book Database</title>
</head>
<body>
<br />
	<a href="user_home.php">HOME</a>
            
       
        <h2>Books</h2>
<table cellspacing="0" align="center" cellpadding="5">
 
    
               <?php for($i=0; $i<count($viewbook); $i++){
        ?>
                <tr>
                    <td>ID-<?=$id=$viewbook[$i]['Book_ID']?></td>
               </tr>
               <tr>
               <td><img src="upload/<?=$viewbook[$i]['image']?>"></td>
               </tr>
               <tr>
                    <td>Book Name:-<?=$viewbook[$i]['Book_Name']?></td>
                    <td>Author:=<?=$viewbook[$i]['Author']?></td>
               </tr>   

              <tr> 
                     <td>Genre:-<?=$viewbook[$i]['Genre']?></td>
                
               </tr>    
                        
               <tr> <td>Rating- <?php      
$con =getConnection();


$sql = "SELECT ROUND(AVG(Rating),1) AS average_rating FROM  rating
 WHERE Book_ID='".$id."'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $average = $row['average_rating'];
   echo  $average;

?></td></tr>
              <tr>
                   <td>
                   <butten><a href="review&rating.php?Bookid=<?=$viewbook[$i]['Book_ID']?>">Review&Rating  </a> </button>
                       <button><a href="Borrow.php?id=<?=$viewbook[$i]['Book_ID']?>"> Borrow</a> </button>
                     
                     
                    </td>
               </tr>    
                    
        <?php 
           
        }
    } 
            
        ?>
</table>

            
  
</body>
</html>

