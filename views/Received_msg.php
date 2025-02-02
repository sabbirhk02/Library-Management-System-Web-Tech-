<?php
  require_once('../models/function.php');
  require_once('../models/db.php');
  $viewadminmsg = getviewmsgAdmin();
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Admin Messege</title>
</head>
<body>


       
<table  style="width:60%" border="3" cellspacing="1" align="center" cellpadding="5">


    <tr>
        
        <th colspan="5"><h2><b>View Admin Messege</b></h2></th>
       
        
    </tr>
  
     <tr>
        <td>From (Admin)</td>
        <td>To (User)</td>
        <td>Admin email</td>
        <td>Subject</td>
        <td>Message</td>
       

       </tr>
             
    
               <?php for($i=0; $i<count($viewadminmsg); $i++){
        ?>
                    
             <tr>
                    <td><?=$viewadminmsg[$i]['Admin']?></td>
                    <td><?=$viewadminmsg[$i]['User']?></td>
                    <td><?=$viewadminmsg[$i]['Admin_email']?></td>
                    <td><?=$viewadminmsg[$i]['Subject']?></td>
                    <td><?=$viewadminmsg[$i]['Messege']?></td>
                    
               </tr>   

               
                  
        <?php     
        
        
                    
            }
        ?>

<td colspan="5" align="center"><a href="Needhelp.php">Go Back</a></td>  
</table>


</body>
</html>