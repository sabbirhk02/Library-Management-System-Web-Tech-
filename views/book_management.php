<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");

?>
              
<?php
  require_once('../models/bookModel.php');
  $viewbook = getviewbook(); 
?>


<!DOCTYPE html>
<html>
<head>
    <title>Book Database</title>
    <link rel="stylesheet" href="style22.css">
    <script src="../Assests/Book.js"></script>
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

            // Check if the file input has a file selected
            if (inputFile.files.length === 0) {
                errorSpan.textContent = 'Please select an image file.';
                return false;
            }

            // Get the file name and check its extension
            var fileName = inputFile.files[0].name;
            var fileExtension = fileName.split('.').pop().toLowerCase();

            // Allowed image file extensions (you can customize this list)
            var allowedExtensions = [ 'jpeg', 'png', 'gif'];

            // Check if the file extension is in the allowed list
            if (allowedExtensions.indexOf(fileExtension) === -1) {
                errorSpan.textContent = 'Invalid file type. Please select a valid image file.';
                return false;
            }

            // Clear any previous error messages
            errorSpan.textContent = '';

            // Validate User ID
            if (Book_ID === "") {
                alert("Please enter   Book ID");
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

            if (image === "") {
                alert("Please selet an Image ");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

        <div class="books">
        <h2>Book Details</h2>
       </div>
       
	
     
             <div>
             <table  cellspacing="0" align="center" cellpadding="5">

            
             <tr>
                       
                       <td colspan="5" align="center">
                       <input type="button" name="click"id="add" value="AddBook" onclick="add()" />
                      
                   <input type="button" name="click"id="" value="Update" onclick="update()" />
                   <input type="button" name="click"id="" value="DELETE" onclick="Deletebook()" />
                        
    
                        <p id="addBook"></p> 
                        <p id="update"></p>
                        <p id="delete"></p>
                        </td>
                        
                   </tr>  
               <?php for($i=0; $i<count($viewbook); $i++){
        ?>
                    
             <tr>
                    <td>ID-<?=$id=$viewbook[$i]['Book_ID']?></td>
                    <td>
                    <input type="button" name="click"id="Bookid" value="<?=$id=$viewbook[$i]['Book_ID']?>" />
               </td>
               </tr>
               <tr>
               <td><img src="upload/<?=$viewbook[$i]['image']?>"></td>
               </tr>
               <tr>
                    <td>Book Name:-<?=$viewbook[$i]['Book_Name']?></td>
                    <td>Author:=<?=$viewbook[$i]['Author']?></td>
               </tr>   

              <tr> 
                     <td>Genre:-<?=$viewbook[$i]['Genre']?></td>
                    <td>Quantity:-<?=$viewbook[$i]['Quantity']?></td>
               </tr>    
                   
               <tr>
                <td colspan="2"><hr></td>
            </tr>
                   
            
                    
        <?php 
                    
            }
        ?>
        
                   </tr>   
         </table>

            
       </td>

       
        
 
    </div>
  
    <table>
        <a href="profile.php">Go Back</a>
        </table>


    </body>
</html>