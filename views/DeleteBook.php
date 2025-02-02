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

<form  method="GET" action="../controller/DeleteBookCheck.php"enctype="">
  <fieldset>
  <legend><h3><b>Catalog Management</b></h3></legend>
  
        <h4>
           
                                    Bookid :     <input type="INT" name="Bookid" value="" ><br>
                                    
                    <input type="submit" name="submit" value="submit"><h4>
  </fieldset>
</form>

</body>
</html>
<?php
}







