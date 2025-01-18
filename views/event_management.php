<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");
include_once("../controller/eventCheck.php")
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
                <form action="" method="POST" enctype="">                   
				<fieldset>
                     <legend>Event Management</legend> 
                     <table width="400">
                        <tr>
                            <td>Event Name</td>
                            <td>:<input type="text" name="Event_Name" value="" > <br></td>
                        </tr>
                        <tr>
                            <td>Event Sponsers</td>
                            <td>:<input type="text" name="Event_Sponsers" value="" ><br></td>
                        </tr>
                        <tr>
                            <td>Event Desc</td>
                            <td>:<input type="text" name="Event_Desc" value="" > <br></td>
                        </tr>
                        <tr>
                            <td>Event Start Date</td>
                            <td>:<input type="date" name="Event_sd" value="" > <br></td>
                        </tr>
                        <tr>
                            <td>Event End Date</td>
                            <td>:<input type="date" name="Event_end" value="" > <br></td>
                        </tr>
                        <tr>
                            <td>Event location</td>
                            <td>:<input type="text" name="Event_location" value="" > <br></td>
                        </tr>                             
                     </table><hr>
                        <input type="submit" name="submit" value="submit">                   
                </fieldset>
                </from>
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