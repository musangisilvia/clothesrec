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

        <?php
        
            include('includes/profile.php');
        
        ?>

    <div class="row">
            
        <div class="col-md-9">
            <div class="row profileviews shadow-lg p-3 mb-5 bg-white rounded">

                <div class="col-md-3">

                    <div class="box">

                        <div id="favourites">

                            <img src="images/cuteblouse.jpeg" alt="" class="img-responsive">

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="boxdesc">

                        <h4> Purses </h4>

                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet </p>

                    </div>

                </div>

            </div>

            <div class="row profileviews shadow-lg p-3 mb-5 bg-white rounded">

                <div class="col-md-6">

                    <div class="boxdesc">

                        <h4> Purses </h4>

                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet </p>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="box">

                        <div id="favourites">

                            <img src="images/cuteblouse.jpeg" alt="" class="img-responsive">

                        </div>

                    </div>

                </div>

            </div>

            <div class="row profileviews shadow-lg p-3 mb-5 bg-white rounded">

                <div class="col-md-3">

                    <div class="box">

                        <div id="favourites">

                            <img src="images/cuteblouse.jpeg" alt="" class="img-responsive">

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="boxdesc">

                        <h4> Purses </h4>

                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet </p>

                    </div>

                </div>

            </div>
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