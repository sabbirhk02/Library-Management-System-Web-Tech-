<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");
require_once('../models/userModel.php');
$viewjournal = getviewjournal();
?>

<!DOCTYPE html>
<html>
<head> 
    <script src="../Assests/journal.js"></script>
    <title>Journal Database</title>
    <link rel="stylesheet" href="style15.css">

    <script>
        function validateForm() {
            var Journal_ID = document.getElementsByName("Journal_ID")[0].value;
            var Tittle = document.getElementsByName("Tittle")[0].value;
            var PlaceOfP = document.getElementsByName("PlaceOfP")[0].value;
            var Publisher = document.getElementsByName("Publisher")[0].value;
             var Volume = document.getElementsByName("Volume")[0].value;
              var Issue = document.getElementsByName("Issue")[0].value;
               var Date = document.getElementsByName("Date")[0].value;





            if (Tittle === "") {
                alert("Please Enter Tittle Name");
                return false;
            }

            if (PlaceOfP === "") {
                alert("Please Enter Place Of Publication Name");
                return false;
            }
            
              if (Publisher === "") {
                alert("Please Enter Publisher Name");
                return false;
            }

               if (Volume === "") {
                alert("Please Enter Volume");
                return false;
            }

               if (Issue === "") {
                alert("Please Enter Issue");
                return false;
            }

               if (Date === "") {
                alert("Please Enter Valid Date");
                return false;
            }


            return true;
        }
    </script>
</head>
<body>

<table   id="left" border="1"  cellspacing="1" cellpadding="5">

    <tr>
        <th colspan="7"><h2><b>Journal Details</b></h2></th>
    </tr>
  
   <tr>
                           <td class="td-style">Journalid</td>
                            <td class="td-style">Tittle</td>
                            <td class="td-style">Place Of Publication</td>
                            <td class="td-style">Publisher</td>
                            <td class="td-style">Volume </td>
                            <td class="td-style">Issue </td>
                            <td class="td-style">Date </td>
                        </tr>


<?php for($i=0; $i<count($viewjournal); $i++){
                            ?>           
                        <tr>
                            <td class="td-style"><?=$viewjournal[$i]['Journal_ID']?></td>
                                        <td class="td-style"><?=$viewjournal[$i]['Tittle']?></td>
                                        <td class="td-style"><?=$viewjournal[$i]['PlaceOfP']?></td>
                                        <td class="td-style"><?=$viewjournal[$i]['Publisher']?></td>
                                        <td class="td-style"><?=$viewjournal[$i]['Volume']?></td>
                                        <td class="td-style"><?=$viewjournal[$i]['Issue']?></td>
                                        <td class="td-style"><?=$viewjournal[$i]['Date']?></td>
                        </tr>                 
                            <?php                                        
                                }
                            ?>
<tr>
                            <td colspan="7" align="center"><a href="catalog_journalM.php">Go Back</a></td>
                        </tr> 
                            </table>

 <table id="right">
    
    <tr>
        <td>
            <input type="button" name="add" id="adding" value="Add Journal" onclick="addjournal()" />


            <p id="add"></p> 


        </td>
    </tr>
</table>




</body>
</html>
