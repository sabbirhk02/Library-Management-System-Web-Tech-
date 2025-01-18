<?php
require_once('../models/userModel.php');
$users = getAllUser();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Journal Catalog Database</title>
</head>
<body>
     <center>
          <table>
                       
          <h2>Search Users</h2>
           
          <form method="post" action=""enctype="">
          <input type="text" placeholder="Search" name="searchUser">
          <input type="submit" name="submit">
          <a href="searchUser.php">Show All</a>
          </from> 
          <?php
            if(isset($_REQUEST['submit']))
            { 
            
            $searchUser=$_REQUEST['searchUser']; ?>

            <br><br>
            
            <table border="1" cellspacing="0" align="center" cellpadding="5">
                            <tr>
                                <td>Id</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Gender</td>
                                <td>Dob</td>
                                <td>User type</td>
                            </tr>
                        
          <?php
            searchUser($searchUser);
          ?>
          </table>
            <?php
            }   
            else
            { ?>

           
            <br>
            <br>
            
            <table border="1" cellspacing="0" align="center" cellpadding="5">
                 <tr>
                                <td>Id</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Gender</td>
                                <td>Dob</td>
                                <td>User type</td>
                            </tr>
                        
                
                          <?php for($i=0; $i<count($users); $i++){
                    ?>
                                
                      <tr>
                                <td><?= $users[$i]['id'] ?></td>
                                <td><?= $users[$i]['name'] ?></td>
                                <td><?= $users[$i]['email'] ?></td>
                                <td><?= $users[$i]['gender'] ?></td>
                                <td><?= $users[$i]['dob'] ?></td>
                                <td><?= $users[$i]['type'] ?></td>
                            </tr>
                                
                    <?php 
                                
                        }
                    ?>
            </table>

                     <?php  } ?>
          </table>

      
              <br>

                    <table>
                         <button><a href="search.php"> Back </a></button>
                    </table>

    </center>             
    
  
</body>
</html>