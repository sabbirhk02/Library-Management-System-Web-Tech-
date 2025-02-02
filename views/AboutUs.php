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
        <link rel="stylesheet" href="style20.css">
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
                  <li> <a href="profileuser.php">Profile</a></li>
                    <li> <a href="Recommended_Books.php">Recommend Books</a></li>
                    <li> <a href="viewTrendingBook.php">Trending Books</a></li> 
                    <li> <a href="books.php">Books</a></li>
                    <li> <a href="user_notification.php">Notification</a></li>
                    <li> <a href="Needhelp.php">Need Help</a></li>               
                     <li> <a href="AboutUs.php">About Us</a></li>				  					
                    <li> <a href="../controller/logout.php">Logout</a></li>
                </ul>
                </nav>
                </td>
                <td>
					  <fieldset>
            <legend>Library Information</legend>
                <h3>About the Library</h3>
                <p>Welcome to our library! We offer a wide range of books, periodicals, and other resources for students, faculty, and staff. Our library is open to everyone, and we strive to create a welcoming and inclusive space for all members of our community.</p>
                <h3>Hours of Operation</h3>
                <p>Our library is open during the following hours:</p>
                <ul class="ulset">
                    <li>Saturday-Thursday: 9am-8pm</li>
                    <li>Friday: 10am -5pm</li>
                </ul>
        </fieldset>
        <fieldset>
            <legend>Library Policies</legend>
                <p>We have a few policies in place to ensure that everyone can use our library resources effectively and efficiently:</p>
                <ul class="ulset">
                    <li>All library materials must be checked out using a valid library card.</li>
                    <li>Books may be checked out for up to 2 weeks at a time.</li>
                    <li>Overdue materials will accrue a fine of $0.50 per day.</li>
                    <li>Lost or damaged materials will be subject to replacement fees.</li>
                </ul>
        </fieldset>
        <fieldset>
            <legend>
            Contact Information
            </legend>
            <p>If you have any questions or concerns, please feel free to contact us:</p>
          <ul class="ulset">
                <li>Phone: 555-1234</li>
                <li>Email: library@university.edu</li>
                <li>Address: 123 Dhaka, Bangladesh</li>
            </ul>
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
    </body>
</html>



      
