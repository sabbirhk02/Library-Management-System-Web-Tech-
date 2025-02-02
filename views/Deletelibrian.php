<?php
$L_del = $_POST['Ldel'];
   
if($L_del==true)
{
    ?>
<!DOCTYPE html>
<html>
<title>Delete Librian</title>
<body>

<form  method="GET" action="../controller/DeletelibrianCheck.php"onsubmit="return validateForm2()">
  <fieldset >
  <legend><h3><b>Librian Management</b></h3></legend>
  
        <h4>Librian ID: <input type="INT" name="Librianid" value="" > <br>
        <input type="submit" name="submit" value="submit"><h4>
  </fieldset>
</form>

</body>
</html>
<?php
}