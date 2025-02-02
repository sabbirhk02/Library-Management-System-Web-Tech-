<?php
  require_once('../models/bookModel.php');
  require_once('../models/db.php');
  $Notification = getNotification();
  
?>


<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");

?>


<html>
<head>  
    <title>Catalog</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style18.css">
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
				<fieldset>
                  
 
        <h2>Send Notification</h2>
<table  cellspacing="0" align="center" cellpadding="5">
    <tr>
        <td>Notification Alert!</td>

    </tr>
     <tr>
        <td>User_ID</td>
        <td>User Name</td>
        <td>Due Date</td>
        <td>Status </td>

       </tr>
            
    
               <?php for($i=0; $i<count( $Notification); $i++){
        ?>
                    
             <tr>
                    <td><?= $Notification[$i]['User_ID']?></td>
                    <td><?= $Notification[$i]['User_Name']?></td>
                    <td><?= $Notification[$i]['Due_Date']?></td>
                    <td><?= $Notification[$i]['Status']?></td>
                   
                   
            
                 
               </tr> 
           
        
        <?php 
                    
            }
        ?>
</table>
        <h2><table align="center">
          
        <tr>
            <td>
               User_ID
        </td>
        <td><input type="text" name="name" id="name" /><td>
        </tr>   
           
            <tr>
            <td>
            Notification_DATA
        </td>
        <td><input type="text" name="phone" id="phone" /></td>
        </tr>
        
            <tr>
                <td colspan="2">
            <input
                type="button"
                name="submit"
                id="submit"
                value="SEND"
                onclick="validate()"
            /><br />
            </td>
            </tr>
       
            <tr>
          <td>
     
            <p id="success" style="color: green"></p>
            
            <p id="error" style="color: red"></p>
            </td>
        </tr>
        
        </table>


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
    </div>


      <script src="../Assests/Notify.js"></script>
    </body>


</html>




