<?php
include "../db.php";

$error_message = "";
if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($me, $_POST['email']);
    $mango = "SELECT * FROM emmako_users WHERE email ='$email' ";
    $cashew = mysqli_query ($me, $mango);
    $apple = mysqli_fetch_array($cashew);
    if($apple['email']){

// sms API for verification will be appropriate here
    $error_message= $apple['password'];

    // header('location:dashboard/normal/changepassword.php');
    }else{
    $error_message = "Email is not on the database";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Css Framework amd libraries -->
    <link rel="stylesheet" href="aos/aos.css">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik+Iso">


    <title>forgetpassword</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>

    <!-- ========== Start Navbar ========== -->
    
    <nav class="navbar navbar-expand-sm navbar-dark" id="header">
        <a class="navbar-brand ms-4" href="#">
            <!-- <img src="favicon.jpg" alt=""  style="border-radius: 50%; width: 30px;"> -->
       Emmako
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item mx-auto">
                    <a class="nav-link defBtn active" href="index.html" aria-current="page">Home</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class="nav-link defBtn" href="service.html" target="_blank" >Service</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class="nav-link defBtn" href="brand.html" >Brands</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class="nav-link defBtn" href="about.html" >About</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class="nav-link defBtn" href="login.php" >Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- ========== End Navbar ========== -->
    <div class="background">
        <div class="text">
            <div class="pock">
                <i class="fa fa-lock"></i><h1>"FORGET PASSWORD" SYSTEM</h1>
            </div>
            <p>Input your email to retrieve your password.</p>

        </div>
        <div class="formal">
            <form action="" method="post">
                <div class="up">
                    <h1>Forgot Password?</h1>
                </div>
                <p class="error_message"><?php echo $error_message ; ?></p>
                <div class="duo">
                   <div class="span">
                        <i class="fa fa-user"></i><input type="text" name="email" id="" placeholder="Enter your Email Address">
                    </div>
                </div>
                <p><a href="index.php">Back to Homepage</a> Login>>><a href="login.php">Click here</a></p>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
    

      <!-- Pre Foooter -->
      <?php  include "normal_component/footer_section.php" ; ?>
</body>
</html>