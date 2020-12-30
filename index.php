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
                    <li tabindex="0" ><a href="index.php?dashboard" class="active"><span>Dashboard </span><i class="fa fa-dashboard"></i></a></li>
                    <li tabindex="0" ><a href="index.php?explore"><span>Explore </span><i class="fa fa-search"></i></a></li>
                    <li tabindex="0" ><a href="index.php?fave"><span>Favorites </span><i class="fa fa-heart"></i></a></li>
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

        <div class="col-md-9">

            <?php
            
                include('includes/db.php');

                $getproducts = "SELECT * FROM `products` ORDER BY RAND() LIMIT 3";

                $runproducts = mysqli_query($con,$getproducts);

                while($rowproducts = mysqli_fetch_array($runproducts)){

                    $prodid = $rowproducts['product_id'];

                    $prodname = $rowproducts['product_name'];

                    $desc = $rowproducts['product_desc'];

                    $prodpic = $rowproducts['product_pic'];

                    echo "
                    
                        
                        <div class='row profileviews shadow-lg p-3 mb-5 bg-white rounded'>

                            <div class='col-md-3'>
        
                                <div class='box'>
            
                                    <div id='favourites'>
            
                                        <img style='background-color:white;'src='images/$prodpic' alt='' class='img-responsive'>
            
                                    </div>
            
                                </div>
            
                            </div>
        
                            <div class='col-md-6'>
            
                                <div class='boxdesc'>
            
                                    <h4> $prodname </h4>
            
                                    <p> $desc </p>
            
                                </div>
            
                            </div>
        
                        </div>
        
                    ";
                }

            
            ?>

        </div>

        <div class="col-md-3 sidebar">
        
            <?php
        
                include('includes/sidebar.php');
                
            ?>
        
        </div>
    </div>         

    <div class="row">

        <div class="col-md-12">
            <?php

                include('includes/footer.php');

            ?>
        </div>
    </div>

   

    <!--Bootstrap JS CDN-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>