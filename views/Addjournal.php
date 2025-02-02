
<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");

?>

<?php
$L_add = $_POST['Ladd'];
   
        if($L_add==true)
        {
            ?>
            <!DOCTYPE html>
            <html>
            <title>Add New Journal</title>
            <body>
        
            <form method="POST" action="../controller/AddjournalCheck.php" onsubmit="return validateForm()">
              <fieldset>
              <legend><h3><b>Catalog Journal Management</b></h3></legend>
              
                       <h4> 
                                      Journalid :     <input type="INT" name="Journal_ID" value="" ><br>
                                     Tittle     :       <input type="text" name="Tittle" value="" > <br>
                                      Place Of Publication   :  <input type="text" name="PlaceOfP" value="" > <br>
                                    Publisher   : <input type="text" name="Publisher" value="" > <br>
                                      Volume  : <input type="INT" name="Volume" value="" > <br> 
                                        Issue   : <input type="INT" name="Issue" value="" > <br>
                                          Date   : <input type="date" name="Date" value="" > <br>



                       
                                <input type="submit" name="submit" value="submit"><h4>
              </fieldset>
            </form>
       
            </body>
            </html>
            <?php

        }
            


               
