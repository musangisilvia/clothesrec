<?php
    session_start();      
    
        if(isset($_POST['login'])){

            include('includes/db.php');
    
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
    
                   header("Location: index.php");
    
                } else {
    
                    echo "<script>alert('Incorrect email or password')</script>";
                }
    
            }
                
        }
        
        ?>