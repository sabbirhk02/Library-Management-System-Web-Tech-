<?php


include_once("../models/db.php");


$bok_id = $_POST['uname'];
   
        if($bok_id==true){
        ?>
<html>
    <body>
<table  cellspacing="0" align="center" cellpadding="5">
        
        <?php


$con =getConnection();


$sql = "SELECT ROUND(AVG(rating),1) AS average_rating FROM rating 
 WHERE Book_ID='".$bok_id."'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $average = $row['average_rating'];
    
   // echo "<h1> Rating : " . $average . "</h1>";
   
}?>
<tr>
<td><h2>
RATING:- <?php   echo $average;?>
<h2>
</td>
</tr> 
<?php   $con = getConnection();
          $sql = "select * from rating
          WHERE Book_ID='".$bok_id."'";
   $result = mysqli_query($con, $sql);
   

         while($data = mysqli_fetch_assoc($result)){
          
        ?>
        <tr>
           
                <td><h3>BOOK_ID-<?=$data['Book_ID']?> </h3></td>
                </tr>
                <tr>
                <td><?=$data['User_Name']?></td>
               <td><?=$data['Date']?></td>
               <tr> 
                <td>Rate:<?=$data['rating']?></td> 
            </tr>
            
                <td><?=$data['Review']?></td>   
                   
          </tr>  
          <tr>
                     <td colspan="2"><hr></td>
             </tr>           
                <?php 
                            
                    }
                      ?>
        </table>
        
      </body>
   </html>   
   <?php



   
                }
        ?>