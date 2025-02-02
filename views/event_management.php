<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");
include_once("../controller/eventCheck.php")
?>

<html>
<head>  
    <title>change password</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="style9.css">
    </head>

<body>
    <div class="container">
        <!-- header starts  -->
            <header class="header-check">
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
                    <li> <a href="librarian_dashboard.php">Liabrarian Dashboard</a></li>										                  
                    <li> <a href="profile.php">Profile</a></li>
                    <li> <a href="catalog.php">Catalogue</a></li> 
					<li> <a href="search.php">Search</a></li> 
                    <li> <a href="event.php">Event</a></li>
                    <li> <a href="account_setting.php">Account Settings</a></li>					  					
                    <li> <a href="../controller/logout.php">Logout</a></li>
                </ul>
                </nav>
                </td>
                <td> 
                    <div class="add-book">
                <form action="" method="POST" enctype="">                   
				<fieldset>
                     <legend class="book-tag">Event Management</legend> 
                     <table  class="table-book"height="120"> 
                        <tr>
                            <td class="td-book">Event Name</td>
                            <td class="td-book"><input type="text" name="Event_Name" value="" > <br></td>
                        </tr>
                        <tr>
                            <td class="td-book">Event Sponsers</td>
                            <td class="td-book"><input type="text" name="Event_Sponsers" value="" ><br></td>
                        </tr>
                        <tr>
                            <td class="td-book">Event Desc</td>
                            <td class="td-book"><input type="text" name="Event_Desc" value="" > <br></td>
                        </tr>
                        <tr>
                            <td class="td-book">Event Start Date</td>
                            <td class="td-book"><input type="date" name="Event_sd" value="" > <br></td>
                        </tr>
                        <tr>
                            <td class="td-book">Event End Date</td>
                            <td class="td-book"><input type="date" name="Event_end" value="" > <br></td>
                        </tr>
                        <tr>
                            <td class="td-book">Event location</td>
                            <td class="td-book"><input type="text" name="Event_location" value="" > <br></td>
                        </tr>                             
                     </table><hr>
                        <input type="submit" name="submit" value="submit">                   
                </fieldset>
                </from>
</div>
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
