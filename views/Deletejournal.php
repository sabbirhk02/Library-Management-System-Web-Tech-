<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");

?>

<?php
$L_del = $_POST['Ldel'];
   
if($L_del==true)
{
    ?>
<!DOCTYPE html>
<html>
<title>Delete Book</title>
<body>

<form  method="GET" action="../controller/DeletejournalCheck.php"enctype="">
  <fieldset >
  <legend><h3><b>Catalog Management</b></h3></legend>
  
        <h4>
           
                                 Journalid :     <input type="INT" name="Journal_ID" value="" ><br>
                                  

                    <input type="submit" name="submit" value="submit"><h4>
  </fieldset>
</form>

</body>
</html>
<?php
}







