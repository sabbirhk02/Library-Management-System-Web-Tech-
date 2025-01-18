<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");

?>

<!DOCTYPE html>
<html>
<title>Delete Journal</title>
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
                   <h2 align="center">Delete Journal</h2>
                   <form  method="POST" action="../controller/DeletejournalCheck.php"enctype="">               
                    <fieldset>
                      <legend>Journal Management</legend>
                      <table height="120"> 
                       <tr>
                          <td>Journalid</td>
                          <td>:<input type="INT" name="Journal_ID" value="" > <br></td>
                      </tr>
                      <tr>
                          <td>Tittle</td>
                          <td>:<input type="text" name="Bookid" value="" > <br></td>
                      </tr>
                      <tr>
                          <td>Place Of Publication</td>
                          <td>:<input type="text" name="Bookname" value="" > <br></td>
                      </tr>
                      <tr>
                          <td>Publisher</td>
                          <td>:<input type="text" name="Author" value="" > <br></td>
                      </tr>
                      <tr>
                          <td>Volume</td>
                          <td>:<input type="text" name="Catagory" value="" > <br></td>
                      </tr>
                      <tr>
                          <td>Issue</td>
                          <td>:<input type="text" name="Catagory" value="" > <br></td>
                      </tr> 
                      <tr>
                          <td>Date</td>
                          <td>:<input type="text" name="Catagory" value="" > <br></td>
                      </tr>     
                      </table><hr>
                      <input type="submit" name="submit" value="submit">
                      <a href="catalog_journalM.php">Back</a> 
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


