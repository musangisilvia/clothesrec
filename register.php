<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">

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

                    //uploading the ppic

                    $userpic = $_FILES['ppic']['name'];
                    $tmp_userpic = $_FILES['ppic']['tmp_name'];

                    move_uploaded_file($tmp_userpic,"images/$userpic");

                    if(empty($fname) || empty($lname) || empty($email) || empty($passw) || empty($gender)){

                        $error = "Please fill in all the details";

                    } else {

                        $insert_user = "INSERT INTO `user`(`user_id`, `user_firstname`, `user_lastname`, `user_email`, `user_password`, `gender`, `user_picture`, `created`) VALUES (DEFAULT,'$fname','$lname','$email','$passw','$gender','$userpic',DEFAULT)";

                        $run_insert_user = mysqli_query($con,$insert_user);

                        if($run_insert_user){
                            $error = "You have been register successfully. You will be redirected to the log in page";
                            echo "<script>window.open('login.php','_self')</script>";
                            
                        } else {

                            echo "registration unsuccessful";
                            
                        }

                    }

                }
            ?>    


            <form action="register.php" method="post" enctype="multipart/form-data">            
                
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 col-form-label" style="color:grey;">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="fname">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 col-form-label" style="color:grey;">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="lname" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label" style="color:grey;">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label" style="color:grey;">Password</label>
                    <div class="col-sm-9">
                    <input type="password" class="form-control" name="password" required>
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0" style="color:grey;">Gender</legend>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender"  value="male" checked>
                                <label class="form-check-label" for="gender1" style="color:grey;">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender"  value="female">
                                <label class="form-check-label" for="gender2" style="color:grey;">
                                    Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="notsay">
                                <label class="form-check-label" for="gender3" style="color:grey;">
                                    Prefer not to Say
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="mb-3">
                    <label for="ppic" class="col-form-label" style="color:grey;"> Your Picture </label>
                    <input type="file" class="form-control" name="ppic" required>
                </div>

                
                <div class="col-auto">
                    
                    <button type="submit" name="register" class="btn btn-outline-dark">
                        <i class="fa fa-user-md"></i> Sign Up
                    </button>

                    <p class="text-muted" style="text-align:center;">Already have an account? <a href="login.php">Login here ... </a></p>

                </div>
            </form>

        </div>
    </div>


</body>
</html>