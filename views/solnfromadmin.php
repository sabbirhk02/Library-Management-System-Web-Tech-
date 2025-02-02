<?php
  require_once('../models/function.php');
  require_once('../models/db.php');
  $viewusermsg = getviewmsgUser();
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Users Messege</title>
    <link rel="stylesheet" href="style28.css">
</head>
<body>


<div>     
<table  style="width:60%" border="3" cellspacing="1" align="center" cellpadding="5">

    <tr>
        
        <th colspan="5"><h2><b>View Users Messege</b></h2></th>
       
        
    </tr>
  
     <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Subject</td>
        <td>Messege</td>
       

       </tr>
             
    
               <?php for($i=0; $i<count($viewusermsg); $i++){
        ?>
                    
             <tr>
                    <td><?=$viewusermsg[$i]['Name']?></td>
                    <td><?=$viewusermsg[$i]['Email']?></td>
                    <td><?=$viewusermsg[$i]['Subject']?></td>
                    <td><?=$viewusermsg[$i]['Messege']?></td>
                    
               </tr>   
                  
        <?php       
                    
            }
        ?>

            
                        
</table>
        </div>

 
        <div>

    <table>
        <h2><form align="center">
            From (Admin):<input type="text" name="name" id="name" />
            <br />
            To (User):  <input type="text" name="phone" id="phone" />
            <br />
            Admin email:<input type="text" name="Admin_email" id="Admin_email" > <br>
            Subject: <input type="text" name="Subject" id="Subject" > <br>
            Message: <input type="text" name="Message" id="Message" > <br>
            
        
            <input
                type="button"
                name="submit"
                id="submit"
                value="submit"
                onclick="validate()"
            /><br />
            <button>
                <a href="profile.php">Go Home</a></button
            ><br />
            <p id="error" style="color: red"></p>
        </form></h2>
        </table>
        </div>
        <script src="../Assests/solnadmin.js"></script>
    </body>

    </html>