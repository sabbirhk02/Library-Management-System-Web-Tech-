<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");
//include_once("../controller/SessionCheck.php");

?>
<?php
require_once('../models/db.php');


$con = getConnection();
$sqll = "select * from trendingbooks";
$rsult = mysqli_query($con, $sqll);

?>


<?php

$id=$_GET['id'];

 $conn = mysqli_connect('127.0.0.1', 'root', '', 'webtech_project');

      $sql = "SELECT Book_ID, Book_Name, Author,Genre,Quantity,Image  FROM bookdata WHERE Book_id='$id'";
      $result = mysqli_query($conn, $sql);
      
      if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
          $Book_ID=$row["Book_ID"];   $Book_Name=$row["Book_Name"]; $Author= $row["Author"];$Genre= $row["Genre"]; $Quantity= $row["Quantity"];
?> 




<html>
    <head>
        <title>Profile</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="style5.css">
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
                <td rowspan="3" width="250">  
                <nav> 
                <ul>
                    <li> <a href="librarian_dashboard.php">Dashboard</a></li>										                  
                    <li> <a href="profile.php">Profile</a></li>
                    <li> <a href="catalog.php">Catalogue</a></li> 
                    <li> <a href="#">Book Management</a></li>
                    <li> <a href="Newly_listed_Books.php">Newly Listed Books</a></li>
                     <li> <a href="TrendingBooks.php">Trending Books</a></li>
					<li> <a href="search.php">Search</a></li> 
                    <li> <a href="event.php">Event</a></li>
                         <li> <a href="Notification.php">Send Notification</a></li>

                    <li> <a href="account_setting.php">Account Settings</a></li>	
                     <li> <a href="#">Help and Support</a></li>				  					
                    <li> <a href="../controller/logout.php">Logout</a></li>
                </ul>
                </nav>
                </td>
                <td>
                    <h2>Trend Book</h2>
<table border="1" cellspacing="0" align="center" cellpadding="5">
     <tr>
        <td>Book_ID	</td>
        <td>Book_Name </td>
        <td>Total_Borrow</td>
        <td>Total_Return</td>
   
   </tr>  
        
             <?php while($data = mysqli_fetch_assoc($rsult)){ ?>
    <tr>
        <td><?=$id=$data['Book_ID']?></td>
        <td><?=$data['Book_Name']?></td>   
        <td><?=$data['Total_Borrow']?></td> 
        <td><?=$data['Total_Return']?></td> 


             </tr>
             <td>
                   <button><a href="trend.php?id=<?=$id?>">Trend Books  </a> </Button>
             </td>
            
        <?php
                    
                  }
                
                   
        ?>
</table>
    

<h2><form align="center">
            BookID     :<input type="text" name="name" id="name"value="<?php echo $Book_ID;?>" />
            <br />
            Book_Name  : <input type="text" name="phone" id="phone"value="<?php echo $Book_Name;?>" />
            <br />
            Author     :
           <input name="rating" id="email"  name="email" value="<?php echo $Author;?>"  />
                       
        
            <br />
            Genre      :<input type="text" name="password" id="password" value="<?php echo $Genre;?>"/>
            <br />
            
            <input
                type="button"
                name="submit"
                id="submit"
                value="TREND"
                onclick="validate()"
            /><br />
            <p id="success" style="color: green"></p>
            <br />
            <p id="error" style="color: red"></p>
        </form></h2>
        <script src="../Assests/trendBooks.js"></script>
</body>
</html>
<?php 
        }
      } else {
        echo "0 results";
      }
      
   
      ?>
					     
					
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
    </div>
    </body>
</html>



















