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


    <title>Vazzi | Registration </title>
</head>
<body>

    <div class="container">
        <div class="col-md-offset-3 col-md-6 regForm">
            <h2> Register as a Vazzi User </h2>

            <form action="" method="post">
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label" style="color:grey;">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label" style="color:grey;">Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="password">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0" style="color:grey;">Gender</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender1" value="male" checked>
                                <label class="form-check-label" for="gender1" style="color:grey;">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender2" value="female">
                                <label class="form-check-label" for="gender2" style="color:grey;">
                                    Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender3" value="notsay">
                                <label class="form-check-label" for="gender3" style="color:grey;">
                                    Prefer not to Say
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" name="register" class="btn btn-outline-dark">Sign in</button>
                    </div>
                </div>
            </form>

        </div>
    </div>


</body>
</html>