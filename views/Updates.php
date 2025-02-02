<?php

$bok_id = $_POST['uname'];
   
        if($bok_id==true){
        


 $conn = mysqli_connect('127.0.0.1', 'root', '', 'webtech_project');

      $sql = "SELECT Book_ID, Book_Name, Author,Genre,Quantity  FROM bookdata WHERE Book_id='$bok_id'";
      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
          $Book_ID=$row["Book_ID"];   $Book_Name=$row["Book_Name"]; $Author= $row["Author"];$Genre= $row["Genre"]; $Quantity= $row["Quantity"];
        ?>  
 <!DOCTYPE html>
<html>
  <head>
  <script>
        function validate() {
            var Book_ID = document.getElementsByName("Bookid")[0].value;
            var Book_Name = document.getElementsByName("Bookname")[0].value;
            var Author = document.getElementsByName("Author")[0].value;
            var Genre= document.getElementsByName("Genre")[0].value;
            var Quantity = document.getElementsByName("Quantity")[0].value;
            var image = document.getElementsByName("image")[0].value;
            

            // Validate User ID
            if (Book_ID === "") {
                alert("Please enter a BookID");
                return false;
            }

            // Validate User Name
            if (Book_Name === "") {
                alert("Please enter Book Name");
                return false;
            }
            if (Author === "") {
                alert("Please enter Author");
                return false;
            }

           
            if (Genre === "") {
                alert("Please enter Genre");
                return false;
            }

            // Validate Mobile Number
            if (Quantity === "" || isNaN(Quantity) || !Number.isInteger(parseFloat(Ouantity))) {
                alert("Please enter a  integer for Quantity Number");
                return false;
            }

         
            return true;
        }
    </script>
        </head>

<title>Update Book</title>
<body>
<h2>Update Book</h2>
<form  method="POST" action="../controller/UpdateChecks.php"enctype="">
  <fieldset>
  <legend>Book Management</legend>
         Bookid: <input type="text" name="Bookid" value="<?php echo $Book_ID;?>" > <br>
  Bookname: <input type="text" name="Bookname" value="<?php echo $Book_Name;?>" >   <br>
            Author: <input type="text" name="Author" value="<?php echo $Author;?>" >   <br>
            Genre:    <input type="text" name="Genre" value="<?php echo $Genre;?>" > <br>
            Quantity <input type="INT" name="Quantity" value="<?php echo $Quantity;?>" > <br>
            <input type="submit" name="submit" value="Update BOOK">	<a href="ViewBooks.php">BACK</a>

  </fieldset>
</form>
</body>
</html>

<?php 
        }
      }
    }
      ?>
