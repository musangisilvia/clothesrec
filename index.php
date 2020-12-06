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
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">


    <title>Vazzi Me Up | Clothes Recommendation</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!-- navbar navbar-expand-lg navbar-dark bg-dark start -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            
            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarMain">

            <a class="navbar-brand" href="#">Vazzi Me Up</a>

            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item active">

                    <a class="nav-link" href="#"> Explore Categories <i class="fa fa-search"></i><span class="sr-only">(current)</span></a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="#"> My Favourites <i class="fa fa-heart"></i> </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Popular <i class="fa fa-star"></i> </a>

                </li>

            </ul>

            <form class="form-inline my-2 my-lg-0">

                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>

            </form>

        </div>

    </nav> <!-- navbar navbar-expand-lg navbar-dark bg-dark finish -->

    <nav aria-label="breadcrumb"> <!-- breadcrumb start -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav> <!-- breadcrumb finish -->

    <div class="container">
        <div class="row">
            <div class="col-md-3 profile">

                <h4> User </h4>

                <?php 
                
                include('profile.php');
                
                ?>

            </div>
            <div class="col-md-5">
                <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/cuteblouse.jpeg" class="d-block w-100 imgCaro" alt="cutetop.jpg">
                        </div>
                        <div class="carousel-item">
                            <img src="images/trouser.jpeg" class="d-block w-100 imgCaro" alt="cutetop.jpg">
                        </div>
                        <div class="carousel-item">
                            <img src="images/shoe.jpeg" class="d-block w-100 imgCaro" alt="cutetop.jpg">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 sidebar">

                <h4> Categories </h4>

                <?php
                
                include('sidebar.php');
                
                ?>
                
            </div>
        </div>
    </div>




    <!--Bootstrap JS CDN-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>