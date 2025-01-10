<?php

include "db.php";

$error_message ="";

$email= "";
$username="";


// to fetch from database

if(isset($_POST['registernow'])) {
    $email =mysqli_real_escape_string($me, $_POST['email']);
    $username =mysqli_real_escape_string($me, $_POST['username']);
    $password= mysqli_real_escape_string($me, $_POST['password']);
    $comfirm_password= mysqli_real_escape_string($me, $_POST['confirmpassword']);

    if(empty($email) && empty($username) && empty($password) && empty($comfirm_password)){
        $error_message= "all field requied!";
    }elseif(empty($email)){
        $error_message ="email required!";
    }elseif(empty($username)){
        $error_message ="username required!";
    }elseif(empty($password)){
        $error_message ="password required!";
    }elseif($password !== $comfirm_password){
        $error_message ="password do not match!";
    }else{

        $feel ="SELECT* FROM emmako_users WHERE email = '$email' ";
        $felt =mysqli_query ($me, $feel);
        $folk= mysqli_fetch_array($felt);

        if($folk['email'] == $email){
            $error_message ="email already exist!";

        }else {

            $por ="INSERT INTO emmako_users (email, username, password) VALUES ('$email', '$username', '$password') ";
            $port =mysqli_query($me, $por);
            // header('location:login.php');
            echo "<script>alert('Registration successful, pls login!')</script>" ;

        }
    }


}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>signup</title>
    <link rel="stylesheet" href="style.css">
    
     

</head>
<body>
    <!-- ========== Start Navbar ========== -->
    
    <?php  include "section_component/top_section.php" ; ?>
    
    <!-- ========== End Navbar ========== -->
    <div class="background">
        <div class="text">
            <div class="pock">
                <i class="fa fa-lock"></i><h1>SECURE SIGNUP SYSTEM</h1>
            </div>
            <p>Input the requested information if you are a new user.</p>

        </div>
        <div class="form">
            <form action="" method="post">
                <div class="up">
                    <h1>Signup</h1>
                    <p class="error_message"><?php if(!empty($error_message)){ echo $error_message; } ?></p>
                </div>
                <div class="duo">
                   <div class="span">
                        <i class="fa fa-user"></i><input type="text" name="email" id="" placeholder="Email" value="<?php echo $email ; ?>">
                    </div>
                </div>
                <div class="duo">
                   <div class="span">
                        <i class="fa fa-user"></i><input type="text" name="username" id="" placeholder="Username" value="<?php echo $username ; ?>">
                    </div>
                </div>
                <div class="duo">
                    <div class="span">
                        <i class="fa fa-key"></i><input type="password" class="password" name="password" id="password" placeholder="Password">
                    </div>
                </div>
                <div class="duo">
                    <div class="span">
                        <i class="fa fa-key"></i><input type="password"  class="password" name="confirmpassword" id="password" placeholder="Confirm password">
                    </div>
                </div>
                <p>kindly login if you already have an account <a href="login.php">Log in</a></p>
                <button type="submit" name="registernow">Signup</button>
            </form>
        </div>
    </div>

         <!-- ==========  End Contact Us========== --> 

      <!-- Pre Foooter -->
      <?php  include "section_component/footer_section.php" ; ?>