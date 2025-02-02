<?php
  require_once('../models/function.php');
  require_once('../models/db.php');
  $viewNL_Books = getNL_Books(); 
?>


<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");
//include_once("../controller/SessionCheck.php");

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
                    <li> <a href="book_management.php">Book Management</a></li>
                    <li> <a href="Newly_listed_Books.php">Newly Listed Books</a></li>
                    <li> <a href="TrendingBooks.php">Trending Books</a></li>
					<li> <a href="search.php">Search</a></li> 
                    <li> <a href="event.php">Event</a></li>
                    <li> <a href="Notification.php">Send Notification</a></li>
                    <li> <a href="account_setting.php">Account Settings</a></li>	
                    <li> <a href="solnfromadmin.php">Help and Support</a></li>				  					
                    <li> <a href="../controller/logout.php">Logout</a></li>
                </ul>
                </nav>
                </td>
                <td>
					  
<table border="1" >

    <tr>
        
        <th colspan="5"><h2><b>Newly listed books</b></h2></th>
        <!--<th colspan="5"><h2><b>User Details</b></h2></th>-->
        
    </tr>
  
     <tr>
        <td>Book ID</td>
        <td>Book Name</td>
        <td>Author</td>
        <td>Genre </td>
        <td>Quantity</td>
     </tr>
             
    
               <?php for($i=0; $i<count($viewNL_Books); $i++){
        ?>
                    
             <tr>
                    <td><?=$viewNL_Books[$i]['Book_ID']?></td>
                    <td><?=$viewNL_Books[$i]['Book_Name']?></td>
                    <td><?=$viewNL_Books[$i]['Author']?></td>
                    <td><?=$viewNL_Books[$i]['Genre']?></td>
                    <td><?=$viewNL_Books[$i]['Quantity']?></td>
                   
            
                
                    
               </tr>        
        <?php 
     
            }
        ?>
        </table>

            


<h2><table align="center">
         
        <tr>
            <td>
               BookID
        </td>
        <td>:<input type="text" name="name" id="name" /><td>
        </tr>  
           
            <tr>
            <td>
            Book Name
        </td>
        <td>:<input type="text" name="phone" id="phone" /></td>
        </tr>
        <tr>
            <td>
            Author
        </td>
        <td>:<input type="text" name="Author" id="Author" /></td>
        </tr>

        <tr>
            <td>
            Genre
        </td>
        <td>:<input type="text" name="Genre" id="Genre" /></td>
        </tr>

        <tr>
            <td>
            Rating
        </td>
        <td>:<input type="text" name="Rating" id="Rating" /></td>
        </tr>

        <tr>
                <td colspan="5"><hr></td>
            </tr>
            <tr>
                <td colspan="5">
            <input
                type="button"
                name="submit"
                id="submit"
                value="submit"
                onclick="validate()"
            /><br />
            <br />
            </td>
            </tr>
       
            <tr>
          <td>
     
            <p id="success" style="color: green"></p>
           
            <p id="error" style="color: red"></p>
            </td>
        </tr>
       
        </table>
                

					
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

       <script src="../Assests/nlb.js"></script>
 
    </body>
</html>













     
   
 