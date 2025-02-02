<?php
$L_add = $_POST['Ladd'];
   
        if($L_add==true)
        {
            ?>
            <!DOCTYPE html>
            <html>
            <title>Add New Librian</title>
            <body>
    
            <form method="POST" action="../controller/AddlibrianCheck.php" onsubmit="return validateForm()">
              <fieldset>
              <legend><h3><b>Librian Management</b></h3></legend>
              
                       <h4> Librian_id: <input type="INT" name="Librianid" value="" > <br>
                        Librian_name: <input type="text" name="Librianname" value="" > <br>
                        Librian_email: <input type="text" name="Librianemail" value="" > <br>
                        Contact_number: <input type="INT" name="Contactnumber" value="" > <br>
                        Assigned_role: <input type="text" name="Assignedrole" value="" > <br>
                                <input type="submit" name="submit" value="submit"><h4>
              </fieldset>
            </form>
         
            </body>
            </html>
            <?php
            



        }

    