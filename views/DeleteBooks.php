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
<html>
<head>
<script>
        function validate() {
            var Book_ID = document.getElementsByName("Bookid")[0].value;

            

            // Validate User ID
            if (Book_ID === "") {
                alert("Please enter a BookID");
                return false;
            }

            return true;
        }
    </script>
        </head>
<body>
<h2>Delete Book</h2><form  method="GET" action="../controller/DeleteBooksCheck.php"enctype=""onsubmit="return validate()">
  <fieldset>
  <legend>Book Management</legend>
             <h2>ENTER BOOK ID</h2>
            Bookid: <input type="text" name="Bookid" value="<?php echo $Book_ID;?>" > <br>
         
            <input type="submit" name="submit" value="REMOVE">	
	<a href="ViewBooks.php">BACK</a>

  </fieldset>

</body>
</html>

<?php 
        }
      }
    }
      ?>
      