
<?php
$bok_id = $_POST['uname'];
   
        if($bok_id==true){
          ?>
        
<html>
<title></title>
<head>
<style>
        .error {
            color: red;
        }
    </style>   
   <script>
        function validate() {
            var Book_ID = document.getElementsByName("Bookid")[0].value;
            var Book_Name = document.getElementsByName("Bookname")[0].value;
            var Author = document.getElementsByName("Author")[0].value;
            var Genre= document.getElementsByName("Genre")[0].value;
            var Quantity = document.getElementsByName("Quantity")[0].value;
            var image = document.getElementsByName("image")[0].value;
            
            var inputFile = document.getElementById('imageInput');
            var errorSpan = document.getElementById('error');

        
            if (inputFile.files.length === 0) {
                errorSpan.textContent = 'Please select an image file.';
                return false;
            }

     
            var fileName = inputFile.files[0].name;
            var fileExtension = fileName.split('.').pop().toLowerCase();

            var allowedExtensions = ['jpeg', 'png', 'gif'];

           
            if (allowedExtensions.indexOf(fileExtension) === -1) {
                errorSpan.textContent = 'Invalid file type. Please select a valid image file.';
                return false;
            }

       
            errorSpan.textContent = '';

           
            return true;
            if (Book_ID === "") {
                alert("Please enter a BookID");
                return false;
            }

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

     
            if (Quantity === "" || isNaN(Quantity) || !Number.isInteger(parseFloat(Ouantity))) {
                alert("Please enter a  integer for Quantity Number");
                return false;
            }
         
            return true;
        }
        
    </script></head>
<body>
<h2>ADD Book</h2>
<form  method="POST" action="../views/AddbooksCheck.php"enctype="multipart/form-data"onsubmit="return validate()">
  <fieldset>
  <legend>Book Management</legend>
  
            Bookid: <input type="varchar"  id="Bookid" name="Bookid" value="" > <br>
            Bookname: <input type="text" id="Bookname"name="Bookname" value="" > <br>
            Author: <input type="text" id="Author" name="Author" value="" > <br>
            Genre:    <input type="text" id="Genre"  name="Genre" value="" > <br>
            Quantity <input type="INT" id="Quantity"name="Quantity" value="" > <br>
            <label for="imageInput">Select an image:</label>
            <input type="file" id="imageInput" name="image" value="" accept="image/jpeg, image/gif, image/png" >
            
      
        <span id="error" class="error"></span>
        <br>
      
                     <input type="submit" name="submit" value="ADD BOOK">	
	<a href="ViewBooks.php">BACK</a>
  </fieldset>
</form>
</body>
</html>
<?php
        }
          ?>
        