<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");
require_once('../models/userModel.php');
$viewbook = getviewbook(); 
?>


<!DOCTYPE html>
<html>
<title>Book Catalog</title>
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
                   <h2 align="center">Book Catalog</h2>              
                    <table border="1" cellspacing="0" align="center" cellpadding="5">
                        <tr>
                            <td>Book ID</td>
                            <td>Book Name</td>
                            <td>Author</td>
                            <td>Catagory </td>
                        </tr>
                            <?php for($i=0; $i<count($viewbook); $i++){
                            ?>           
                        <tr>
                             <td><?=$viewbook[$i]['Book_ID']?></td>
                            <td><?=$viewbook[$i]['Book_Name']?></td>
                            <td><?=$viewbook[$i]['Author']?></td>
                             <td><?=$viewbook[$i]['Catagory']?></td>
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
