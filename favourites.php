<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--FontAwesome CDN-->
    <script src="https://use.fontawesome.com/10bafe97be.js"></script>

    <!--Google Fonts CDN-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Sacramento&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">


    <title>Vazzi | Clothes Recommendation</title>
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
</head>
<body>
<header>
        <div class="col-md-12 logo">
            
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand"style="font-family:'Sacramento', cursive; color:grey;font-size:40px; "> Vazzi </a>

                <?php

                    session_start();

                    include('includes/db.php');

                    if(isset($_SESSION['email'])){

                        $email = $_SESSION['email'];

                        $getinfo = "SELECT * FROM `user` WHERE `user_email` = '$email'";

                        $runinfo = mysqli_query($con,$getinfo);

                        $row = mysqli_fetch_array($runinfo);

                        $userid = $row['user_id'];

                        $pic = $row['user_picture'];

                        $name = $row['user_firstname'];

                        echo "<h4 class='navbar-brand' style='font-family: Sacramento, cursive; color:grey;font-size:26px; float: right;'>Welcome : $email </h4>";

                    } else {

                        $pic = "musmus.jpg";

                        echo "<a href='login.php' class='navbar-brand' style='font-family:'Sacramento', cursive; color:grey;font-size:26px; float: right;' > Sign In | Sign Up</a>";
                    }    

                ?>

                
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button alt="Search" class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </nav>
        
        </div>
    </header>
    <div class="row">
        <div class="col-md-3 profile">

            <nav class="menu" tabindex="0">
                <div class="smartphone-menu-trigger"></div>
                <header class="avatar">

                    <img src="images/<?php echo $pic;?>" />

                    <h2 style="font-family:'Sacramento', cursive;">
                     
                     </h2>

                </header>

                <ul>
                    <li tabindex="0" ><a href="index.php?dashboard" ><span>Dashboard </span><i class="fa fa-dashboard"></i></a></li>
                    <li tabindex="0" ><a href="index.php?explore"><span>Explore </span><i class="fa fa-search"></i></a></li>
                    <li style="background-color:grey;"  tabindex="0" ><a href="favourites.php" ><span>Favorites </span><i class="fa fa-heart"></i></a></li>
                    <li tabindex="0" ><a href="index.php?popular"><span>Popular </span><i class="fa fa-star"></i></a></li>
                    <li tabindex="0" ><a href="logout.php"><span>
                        <?php

                            if(!isset($_SESSION['email'])){

                                echo "Log in";

                            }else {

                                echo "Log out";
 
                            }                        

                        ?>                    
                     </span><i class="fa fa-sign-out"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row">
       
        <?php

            if(isset($_GET['prod_id'])) {
                $prodid = $_GET['prod_id'];

                
            }

        ?>

            <div class="col-md-3">
                <img src="images/accordion.jpg" alt="Accordion Skirt">
                <h4 style="color:black;">Accordion Skirt <i class="fa fa-heart"></i> </h4>
            </div>

            <div class="col-md-3">
                <img src="images/accordion.jpg" alt="Accordion Skirt">
                <h4>Accordion Skirt <i class="fa fa-heart"></i> </h4>
            </div>

            <div class="col-md-3">
                <img src="images/accordion.jpg" alt="Accordion Skirt">
                <h4>Accordion Skirt <i class="fa fa-heart"></i> </h4>
            </div>

            <div class="col-md-3 sidebar">
                <?php
                
                    include('includes/sidebar.php');
                
                ?>
            </div>
    </div>
</body>
</html>