<?php
require_once('../models/userModel.php');
$viewjournal = getviewjournal();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Journal Catalog Database</title>
</head>
<body>
     <center>
          <table>
                       
          <h2>Search Journal</h2>
           
          <form method="post" action=""enctype="">
          <input type="text" placeholder="Search" name="searchjournal">
          <input type="submit" name="submit">
          <a href="searchJournal.php">Show All</a>
          </from> 
          <?php
            if(isset($_REQUEST['submit']))
            { 
            
            $searchjournal=$_REQUEST['searchjournal']; ?>

            <br><br>
            
            <table border="1" cellspacing="0" align="center" cellpadding="5">
                <tr>
                            <td>Journalid</td>
                            <td>Tittle</td>
                            <td>Place Of Publication</td>
                            <td>Publisher</td>
                            <td>Volume </td>
                            <td>Issue </td>
                            <td>Date </td>
                            

                          </tr>
          <?php
            searchjournal($searchjournal);
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
                            <td>Journalid</td>
                            <td>Tittle</td>
                            <td>Place Of Publication</td>
                            <td>Publisher</td>
                            <td>Volume </td>
                            <td>Issue </td>
                            <td>Date </td>
                            

                          </tr>
                        
                
                          <?php for($i=0; $i<count($viewjournal); $i++){
                    ?>
                                
                      <tr>
                                        <td><?=$viewjournal[$i]['Journal_ID']?></td>
                                        <td><?=$viewjournal[$i]['Tittle']?></td>
                                        <td><?=$viewjournal[$i]['PlaceOfP']?></td>
                                        <td><?=$viewjournal[$i]['Publisher']?></td>
                                        <td><?=$viewjournal[$i]['Volume']?></td>
                                        <td><?=$viewjournal[$i]['Issue']?></td>
                                        <td><?=$viewjournal[$i]['Date']?></td>
                                                        
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


