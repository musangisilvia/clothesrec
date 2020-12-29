<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=" width=device-width, initial-scale=1.0">

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
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
</head>
</head>
<body style=" background-color: lightblue; ">
   
    <div class="container"> 
        <div class="col-md-offset-4 col-md-5 logForm shadow-lg p-3 mb-5 bg-white rounded">

            <h2>Log In</h2>

            <form method="post" action="index.php"> <!--log in form start!-->

                <div class="col-auto">

                    <label class="sr-only" for="email">Email</label>

                    <div class="input-group mb-2">

                        <div class="input-group-prepend">

                            <div class="input-group-text"><i class="fa fa-user-circle-o"></i></div>

                        </div>

                        <input type="text" class="form-control" name="email" placeholder="Email">

                        <p class="error"></p>

                    </div>

                </div>

                <div class="col-auto">

                    <label class="sr-only" for="password">Password</label>

                    <div class="input-group mb-2">

                        <div class="input-group-prepend">

                            <div class="input-group-text"><i class="fa fa-pencil"></i></div>

                        </div>

                        <input type="password" class="form-control" name="password" placeholder="Password">

                        <p class="error"></p>

                    </div>

                </div>

                <div class="col-auto">

                    <button type="submit" name="login" class="btn btn-outline-dark">Log in</button>

                    <p class="text-muted">Don't have an account? <a href="register.php"> Register here ...</a></p>

                </div>
                
               

            </form>
        </div>
    </div>

    <?php
            
    include('includes/db.php');

    if(isset($_POST['login'])){

        $email = $_POST['email'];

        $password = $_POST['password'];

        if(empty($email) || empty($password)) {

            echo "<script>alert('Fill out all fields! ')</script>";

        } else {

            $get_user = "SELECT * FROM user WHERE user_email = '$email' AND user_password = '$password'";

            $run_user = mysqli_query($con,$get_user);

            $check_user = mysqli_num_rows($run_user);

            if($check_user==1){

                $_SESSION['email'] = $email;

                echo "<script>alert('Welcome, you have logged in.')</script>";

                echo "<script>window.open('index.php','_self')</script>";

            } else {

                echo "<script>alert('Incorrect email or password')</script>";
            }

        }
         
    }

?>


</body>
</html>