<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");
require_once('../models/userModel.php');
$viewbook = getviewbook(); 
?>

<!DOCTYPE html>
<html>
<head> 
    <script src="../Assests/catalog.js"></script>
    <title>Book Database</title>
     <link rel="stylesheet" href="style15.css">

    <script>
        function validateForm() {
            var Book_ID = document.getElementsByName("Bookid")[0].value;
            var Book_Name = document.getElementsByName("Bookname")[0].value;
            var Author = document.getElementsByName("Author")[0].value;
            var Catagory = document.getElementsByName("Catagory")[0].value;
              


            if (Book_Name === "") {
                alert("Please Enter Book Name");
                return false;
            }

            if (Author === "") {
                alert("Please Enter Author Name");
                return false;
            }
            
              if (Catagory === "") {
                alert("Please Enter Catagory Name");
                return false;
            }



            return true;
        }
    </script>
</head>
<body>

<table id="left" border="1"  cellspacing="1" cellpadding="5">

    <tr>
        <th colspan="5"><h2><b>Book Details</b></h2></th>
    </tr>
  
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

                        <tr>
                            <td colspan="5" align="center"><a href="catalog_management.php">Go Back</a></td>
                        </tr> 
   
</table>


<table id="right">


    <tr >
        <td>
       
        
            <input type="button" name="delete" id="deleting" value="Delete Book" onclick="deletebook()" />

      
            <p id="delete"></p>

        </td>
    </tr>

    </table>




</body>
</html>
