<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");
require_once('../models/userModel.php');
$viewjournal = getviewjournal();
?>


<html>
<head>  
    <title>Catalog</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Montserrat&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style8.css">
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
                    <li> <a href="#">Newly Listed Books</a></li>
                     <li> <a href="#">Trending Books</a></li>
					<li> <a href="search.php">Search</a></li> 
                    <li> <a href="event.php">Event</a></li>
                     <li> <a href="#">Send Notification</a></li>

                    <li> <a href="account_setting.php">Account Settings</a></li>	
                     <li> <a href="#">Help and Support</a></li>				  					
                    <li> <a href="../controller/logout.php">Logout</a></li>
                </ul>
                </nav>
                </td>
                <td> 
                   <h2 class="user-list" align="center">Journal Catalog</h2>              
                   <div  class="table-style">
                        <table class="user-table" border="1">
                        <tr class="row-style">
                            <td class="td-style">Journalid</td>
                            <td class="td-style">Tittle</td>
                            <td class="td-style">Place Of Publication</td>
                            <td class="td-style">Publisher</td>
                            <td class="td-style">Volume </td>
                            <td class="td-style">Issue </td>
                            <td class="td-style">Date </td>
                            

                          </tr>
                                
                        
                                  <?php for($i=0; $i<count($viewjournal); $i++){
                            ?>
                                        
                                <tr class="row-style">
                                        <td class="td-style"><?=$viewjournal[$i]['Journal_ID']?></td>
                                        <td class="td-style"><?=$viewjournal[$i]['Tittle']?></td>
                                        <td class="td-style"><?=$viewjournal[$i]['PlaceOfP']?></td>
                                        <td class="td-style"><?=$viewjournal[$i]['Publisher']?></td>
                                        <td class="td-style"><?=$viewjournal[$i]['Volume']?></td>
                                        <td class="td-style"><?=$viewjournal[$i]['Issue']?></td>
                                        <td class="td-style"><?=$viewjournal[$i]['Date']?></td>
                                                        
                                  </tr>    
                                        
                            <?php 
                                        
                                }
                            ?>
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
    </body>


</html>
