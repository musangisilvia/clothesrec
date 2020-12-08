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
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
</head>
</head>
<body style=" background-color: lightblue; ">

    <div class="container">
        <div class="col-md-offset-3 col-md-6 regForm shadow-lg p-3 mb-5 bg-white rounded">
            <h2> Register </h2>

            <?php

                include('includes/db.php');
            
                if(isset($_POST['register'])){

                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $email = $_POST['email'];
                    $passw = $_POST['password'];
                    $gender = $_POST['gender'];
                    $
        
                }
            
            ?>

            <form action="#" method="post">
                <p class="error"></p>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 col-form-label" style="color:grey;">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="fname">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 col-form-label" style="color:grey;">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="lname">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label" style="color:grey;">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label" style="color:grey;">Password</label>
                    <div class="col-sm-9">
                    <input type="password" class="form-control" id="password" required>
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0" style="color:grey;">Gender</legend>
                        <div class="col-sm-9">
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
                <div class="mb-3">
                    <label for="picture" class="col-form-label" style="color:grey;"> Your Picture </label>
                    <input class="form-control" type="file" id="picture">
                </div>

                
                <div class="col-auto">
                    
                    <button type="submit" name="register" class="btn btn-outline-dark">Sign in</button>

                    <p class="text-muted" style="text-align:center;">Already have an account? <a href="login.php">Login here ... </a></p>

                </div>
            </form>

        </div>
    </div>


</body>
</html>