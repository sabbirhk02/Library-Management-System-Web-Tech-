<?php



//if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //  $bid = $_POST["Bookid"];
    

    //$_SESSION["Bookid"] = $bid;

    
//}
include_once("../models/db.php");


//$bid = $_SESSION["Bookid"];

$con =getConnection();
$bok_id=$_GET['Bookid'];

$sql = "SELECT ROUND(AVG(rating),1) AS average_rating FROM rating 
 WHERE Book_ID='".$bok_id."'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $average = $row['average_rating'];
    
   // echo "<h1> Rating : " . $average . "</h1>";
} else {
    echo "0 results";
}

;
//$bid = $_SESSION["Bookid"];

$sql = "select * from bookdata";
$result = mysqli_query($con, $sql);

$bok_id=$_GET['Bookid'];

 $conn = mysqli_connect('127.0.0.1', 'root', '', 'webtech_project');

      $sql = "SELECT Book_ID, Book_Name, Author,Genre,Quantity,image  FROM bookdata WHERE Book_id='$bok_id'";
      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
          $Book_ID=$row["Book_ID"];   $Book_Name=$row["Book_Name"]; $Author= $row["Author"];$Genre= $row["Genre"]; $Quantity= $row["Quantity"]; $image= $row["image"];
        ?> 



<!DOCTYPE html>
<html>
<title>Review</title>
  <link rel="stylesheet" href="style25.css">

<head>

    
</head>

<body>
       
<table  cellspacing="0" align="center" cellpadding="5">
               <tr>
                   <td> Book ID  :-<?php echo $Book_ID;?></td>
        </tr>  
        <tr>
               <td><img src="upload/<?php echo $image;?>"></td>
              
               </tr>
               <tr>
                <td><h3>Book Name :-<?php echo $Book_Name;?></td><br>
              
        </tr>
        <tr>
           <br><td>Author :-<?php echo $Author;?></td>
        </tr>
        <tr>
                   <td>Genre :-<?php echo $Genre;?></td>
                

        </tr>
        <tr>
                  <td colspan="2"><hr></td>
          </tr> 
          <tr>
                  <td >RATING & REVIEW</td>
          </tr> 
          <tr>
                  <td colspan="2"><hr></td>
          </tr>     
        <tr>
                   <td>
                  
                       
                   <table  cellspacing="0" align="center" cellpadding="5">
            <tr>
        
                <td>Book_ID</td>
                <td><input type="text" name="name" id="name" value="<?php echo $Book_ID;?>" /></td>
            </tr>
        
            <tr>
                <td>User_Name</td>
                <td>
                 <input type="text" name="phone" id="phone" />
                </td>
                
            </tr>
            
            <tr>
                <td>Rating</td>
                <td>
               
                <select name="rating" id="email" >
                             <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="4">4</option>
                             <option value="5">5</option>
                        </select>
        </td>

                  <br>
                </td>
            </tr>
            
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td>Write a review</td>
                <td>
                    <textarea name="reiew"id="password" rows="6" ></textarea> 

                </td>
            </tr>
            
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2">
                <input
                type="button"
                name="submit"
                id="submit"
                value="Submit"
                onclick="validate()"
            />
                </td>
            </tr>
       
        <tr>
          <td>
     
            <p id="success" style="color: green"></p>
            <br />
            <p id="error" style="color: red"></p>
        </td>
        </tr>
        <tr>
                <td colspan="2"><hr></td>
            </tr>
        </tr>
        <tr class="ret">
                <td colspan="2">
                <input
                type="button"
                name="submit"
                id="submit"
                value="View all reviews"
                onclick="reviews()"
            />
        </td>
       <tr>
          <td>
     
            <p id="review"></p>
        
        </td>
        </tr>
        </tr>
        </table>
        </form></h2>
        <script src="../Assests/register.js"></script>
     
      
        

<?php 
        
      }
    }

      ?>
 

   </body>
</html>   