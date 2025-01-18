<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");
require_once('../models/userModel.php');
  $Eventpro = getEvent();

?>


<html>
<head>  
    <title>change password</title>
</head>

<body>
    <center>
        <table height=635 width=1080>
            <tr height=60>
                <td colspan="2"> 
                    <table width = "800">
                    <tr>  
                        <td align="right">
                        <h2>Logged in as || <?php echo $user['name'] ?></h2> 
                        </td>    
                    </tr>    
                    </table>
                </td>
            </tr>
            <tr>
                <td  width="300">   
                <ul>                   
                   <li> <a href="librarian_dashboard.php">Liabrarian Dashboard</a></li>										                  
                    <li> <a href="profile.php">Profile</a></li>
                    <li> <a href="catalog.php">Catalogue</a></li> 
					<li> <a href="search.php">Search</a></li> 
                    <li> <a href="event.php">Event</a></li>
                    <li> <a href="account_setting.php">Account Settings</a></li>					  					
                    <li> <a href="../controller/logout.php">Logout</a></li>
                </ul>
                </td>
                <td>                    
				<fieldset>
                    <legend>On Going Event</legend> 
                    <table height="200" width="400">
      
                        <?php for($i=0; $i<count($Eventpro); $i++){
                            ?>      
                            <tr>    
                                    <td>Event Name</td>
                                    <td>=><?=$Eventpro[$i]['Event_Name']?></td>
                            </tr>
                            <tr>    
                                    <td>Event Sponsers</td>
                                    <td>=><?=$Eventpro[$i]['Event_Sponsers']?></td>
                            </tr>
                            <tr>    
                                    <td>Event Desc</td>
                                    <td>=><?=$Eventpro[$i]['Event_Desc']?></td>
                            </tr>
                             <tr>    
                                     <td>Event Start Date</td>
                                    <td>=><?=$Eventpro[$i]['Event_sd']?></td>
                            </tr>
                            <tr>    
                                      <td>Event End Date</td>
                                    <td>=><?=$Eventpro[$i]['Event_end']?></td>
                            </tr>
                            <tr>    
                                     <td>Event Location</td>
                                    <td>=><?=$Eventpro[$i]['Event_location']?></td>
                            </tr>                                    
                        <?php 
                            }
                            ?>
                    </table> 
                        

                </td>
            </tr>
        </table>
        <table>
               <tr height=40>
                <td align="center">Copyright © by Sabbir Hossain</td>
            </tr>
        </table>
    </center>
    </body>


</html>