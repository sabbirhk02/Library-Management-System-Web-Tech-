<?php
require_once('../models/userModel.php');
$viewbook = getviewbook();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Book Catalog Database</title>
</head>
<body>
     <center>
         
          <table>
                <h2>Search Book</h2>
           
          <form method="post" action=""enctype="">
          <input type="text" placeholder="Search" name="search">
          <input type="submit" name="submit">
          <a href="searchBook.php">Show All</a>
          
          </from> 
          <?php
            if(isset($_REQUEST['submit']))
            { 
            
            $search=$_REQUEST['search']; ?>

            <br><br>
            
            <table border="1" cellspacing="0" align="center" cellpadding="5">
                <tr>
                    <td>Book ID</td>
                    <td>Book Name</td>
                    <td>Author</td>
                    <td>Catagory </td>
                    

                  </tr>
          <?php
            search($search);
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

                     <?php  } ?>
                     
          </table>

          <br>

          <table>
              <button><a href="search.php"> Back </a></button>
          
                      </table>
       
          
            
                      </center>             
    
  
</body>
</html>