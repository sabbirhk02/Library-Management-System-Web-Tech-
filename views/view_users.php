<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");
include_once("../models/userModel.php");
$users = getAllUser();
?>

<html>
    <head>
        <title>Profile</title>
    </head>

    <body>
    <center>
        <table height=635 width=1080>
            <tr height=70>
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
                    <h2 align="center">User List</h2>
                        <table border="1" cellspacing="0" align="center" cellpadding="5">
                            <tr>
                                <td>Id</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Gender</td>
                                <td>Dob</td>
                                <td>User type</td>
                            </tr>
                                <?php for ($i = 0; $i < count($users); $i++) { 
                                ?>
                            <tr>
                                <td><?= $users[$i]['id'] ?></td>
                                <td><?= $users[$i]['name'] ?></td>
                                <td><?= $users[$i]['email'] ?></td>
                                <td><?= $users[$i]['gender'] ?></td>
                                <td><?= $users[$i]['dob'] ?></td>
                                <td><?= $users[$i]['type'] ?></td>
                            </tr>
                               <?php } 
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

