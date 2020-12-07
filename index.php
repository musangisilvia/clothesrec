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


    <title>Vazzi Me Up | Clothes Recommendation</title>
</head>
<body>
    <div class="col-md-12 logo">
        <h3 class="logoTitle" style="color:grey; background-color: #f4f4f4; text-align: center; font-family:'Sacramento', cursive; font-size: 50px;"> Vazzi </h3>
    
        <form class="form-inline">

            <div class="input-group mb-2 mr-sm-2 search">

                <div class="input-group-prepend">

                    <div class="input-group-text"><i class="fa fa-search"></i></div>

                </div>

                <input type="text" class="form-control" id="searchClothes" placeholder="Search">

            </div>

        </form>
    
    </div>

    <div class="container">
        <div class="row top">
            

                <!--  -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 profile">

                <nav class="menu" tabindex="0">
                    <div class="smartphone-menu-trigger"></div>
                        <header class="avatar">

                            <img src="images/musmus.jpg" />

                            <h2 style="font-family:'Sacramento', cursive;"> Musangi  </h2>

                        </header>

                        <ul>
                            <li tabindex="0" ><span>Dashboard </span><i class="fa fa-dashboard"></i></li>
                            <li tabindex="0" ><span>Explore </span><i class="fa fa-search"></i></li>
                            <li tabindex="0" ><span>Favorites </span><i class="fa fa-heart"></i></li>
                            <li tabindex="0" ><span>Popular </span><i class="fa fa-star"></i></li>
                            <li tabindex="0" ><span>Log Out </span><i class="fa fa-sign-out"></i></li>
                        </ul>
                </nav>

                <div class="row profileviews">

                    <div class="col-md-4">

                        <div class="box">

                            <div id="favourites">

                                <img src="images/cuteblouse.jpeg" alt="" class="img-responsive">

                            </div>

                        </div>

                    </div>

                    <div class="col-md-8">

                        <div class="boxdesc">

                            <h4> Purses </h4>

                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet </p>

                        </div>

                    </div>

                </div>

                <div class="row profileviews">

                    <div class="col-md-8">

                        <div class="boxdesc">

                            <h4> Purses </h4>

                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet </p>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="box">

                            <div id="favourites">

                                <img src="images/cuteblouse.jpeg" alt="" class="img-responsive">

                            </div>

                        </div>

                    </div>

                    

                </div>

                <div class="row profileviews">

                    <div class="col-md-4">

                        <div class="box">

                            <div id="favourites">

                                <img src="images/cuteblouse.jpeg" alt="" class="img-responsive">

                            </div>

                        </div>

                    </div>

                    <div class="col-md-8">

                        <div class="boxdesc">

                            <h4> Purses </h4>

                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet </p>

                        </div>

                    </div>

                </div>



            </div>


            <!-- <div class="col-md-3">
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
            </div> -->
            <div class="col-md-offset-10 sidebar">

                <h4 style="color:grey;"> Categories </h4>

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