<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap CSS CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--FontAwesome CDN-->
    <script src="https://use.fontawesome.com/10bafe97be.js"></script>

    <!--Google Fonts CDN-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Sacramento&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">

    <title>Vazzi | Log In</title>
</head>
<body>
    
    <div class="container"> 
        <div class="col-md-offset-4 col-md-4">
            <form action=""> <!--log in form start!-->

                <div class="col-auto">

                    <label class="sr-only" for="username">Username</label>

                    <div class="input-group mb-2">

                        <div class="input-group-prepend">

                            <div class="input-group-text"><i class="fa fa-user-circle-o"></i></div>

                        </div>

                        <input type="text" class="form-control" id="username" placeholder="Username">

                    </div>

                </div>

                <div class="col-auto">

                    <label class="sr-only" for="password">Password</label>

                    <div class="input-group mb-2">

                        <div class="input-group-prepend">

                            <div class="input-group-text"><i class="fa fa-pencil"></i></div>

                        </div>

                        <input type="text" class="form-control" id="password" placeholder="Password">

                    </div>

                </div>

                <div class="col-auto">

                    <button class="btn btn-outline-info">Log in</button>

                </div>


            </form>
        </div>
    </div>

</body>
</html>