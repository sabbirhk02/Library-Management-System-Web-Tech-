<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");

?>

<!DOCTYPE html>
<html>
<title>Update Book</title>
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
                   <h2 align="center">Update Book</h2>
                   <form  method="POST" action="../controller/UpdateCheck.php"enctype="">               
                    <fieldset>
                      <legend>Book Management</legend>
                      <table height="120"> 
                      <tr>
                          <td>Bookid</td>
                          <td>:<input type="INT" name="Bookid" value="" > <br></td>
                      </tr>
                      <tr>
                          <td>Bookname</td>
                          <td>:<input type="text" name="Bookname" value="" > <br></td>
                      </tr>
                      <tr>
                          <td>Author</td>
                          <td>:<input type="text" name="Author" value="" > <br></td>
                      </tr>
                      <tr>
                          <td>Catagory</td>
                          <td>:<input type="text" name="Catagory" value="" > <br></td>
                      </tr>    
                      </table><hr>
                      <input type="submit" name="submit" value="submit"> 
                      <a href="catalog_management.php">Back</a>
                    </fieldset>
                    </form>   
                   
                                      
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
