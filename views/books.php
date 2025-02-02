<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");

?>


<html>
<head>  
    <title>change password</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style16.css">
</head>

<body>
    <div class="container">
        <!-- header starts  -->
            <header>
                <div class="row">
                    <div class="col-lg-4 col-md-12">                   
                    <div class="logo-div">
                            <a href="#">
                                <img src="book.png"><!--logo add korar somoy logo ta ke hyper link er mnodde reke di bo  logo er class ta hobo ho fontweosome theke ni chi-->
                            </a>
                    </div>                 
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <p class="heading-style">Library Management System</p>
                    </div>
                </div>
            </header>
            <!-- header ends  -->   

    <center>
        <main>
        <table height=635 width=1080>
            <tr height=70>
                <td colspan="2"> 
                    <table width = "800">
                   
                    <tr>
                        <td style="visibility:hidden;">
                            hdhdhdhhfhhhhhhhhhhhhhhfhfjfjfjfh
                        </td>
                        
                        <td align="center">
                            <div class="card">
                        <h2>Logged in as || <?php echo $user['name'] ?></h2>
                            </div>  
                        </td> 
                        
                          
                    </tr>  
                   
                    </table>
                </td>
            </tr>
            <tr>
                
                <td>                    
				     <fieldset> 
                    <table height="30" width="500">
                    
                    


<?php
  require_once('../models/bookModel.php');
  $viewbook = getuserviewbook();
  include_once("../models/db.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Book Database</title>
</head>
<body>
<br />
	<a href="profileuser.php">HOME</a>
            
       
        <h2>Books</h2>
<table cellspacing="0" align="center" cellpadding="5">
 
    
               <?php for($i=0; $i<count($viewbook); $i++){
        ?>
                <tr>
                    <td>ID-<?=$id=$viewbook[$i]['Book_ID']?></td>
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
                
               </tr>    
                        
               <tr> <td>Rating- <?php      
$con =getConnection();


$sql = "SELECT ROUND(AVG(Rating),1) AS average_rating FROM  rating
 WHERE Book_ID='".$id."'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $average = $row['average_rating'];
   echo  $average;

?></td></tr>
              <tr>
                   <td>
                   <button><a href="review&rating.php?Bookid=<?=$viewbook[$i]['Book_ID']?>">View Books </a> </button>
                       <button><a href="Borrow.php?id=<?=$viewbook[$i]['Book_ID']?>"> Borrow</a> </button>
                     
                     
                    </td>
               </tr>    
                    
        <?php 
           
        }
    } 
            
        ?>
</table>

            
  
</body>
</html>












                     </fieldset>
                </td>
            </tr>
        </table>
        </main>
          <footer>
                     <div class="row">
                        <div class="col-lg-12">
                            <p>Copyright © by Sabbir Hossain</p>
                        </div>  
                    </div>                              
                </footer>
    </center>
    </body>


</html>