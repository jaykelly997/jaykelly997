<!--  -->
<?php

SESSION_START();

include "db.php";

$error_message ="";

if(isset($_POST['loginnow'])) {
    $email =mysqli_real_escape_string($me, $_POST['email']);
    $password= mysqli_real_escape_string($me, $_POST['password']);

    if(empty($email) && empty($password)){
        $error_message= "all field requied!";
    }elseif(empty($email)){
        $error_message ="email required!";
    }elseif(empty($password)){
        $error_message ="password cannot be empty!";
    }else{

        $feel ="SELECT* FROM emmako_users WHERE email='$email' AND password='$password' ";
        $felt =mysqli_query ($me, $feel);
        $folk= mysqli_fetch_array($felt);

        if($folk){
            $_SESSION['user_id'] =  $folk['id'];

            echo 
            header('location:../dashboard/pages/dashboardhome.php');
        }else {
            $error_message="account does not exist";
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
    
    <title>LoginPage</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>

    <!-- ========== Start Navbar ========== -->
    
    <?php  include "section_component/top_section.php" ; ?>
   

    <!-- ========== End Navbar ========== -->
    <div class="background">
        <div class="text">
            <div class="pock">
                <i class="fa fa-lock"></i><h1>SECURE LOGIN SYSTEM</h1>
            </div>
            <p>Input your Username and Password if you are an existing User.</p>

        </div>
        <div class="form">
            <form action="" method="post">

                <div class="up">
                    <h1>Login</h1>
                    <p class="error_message"><?php if(!empty($error_message)){echo "$error_message" ;}   ?></p>

                </div>
               
                <div class="duo">
                   <div class="span">
                        <i class="fa fa-user"></i><input type="text" name="email" id="" placeholder="Email">
                    </div>
                </div>
                <div class="duo">
                    <div class="span">
                        <i class="fa fa-key"></i><input type="password" class="password" name="password" id="password" placeholder="Password">
                    </div>
                </div>
                <p>If you do not have an account already, kindly <a href="signup.php">sign up</a></p>
                <p> <a href="index.php">Back to Homepage</a> Forget password <a href="forgetpassword.php">click here</a></p>

                
                <button type="submit" name="loginnow">Login</button>
            </form>
        </div>
    </div>

         <!-- ==========  End Contact Us========== --> 

      <!-- Pre Foooter -->
      <?php  include "section_component/footer_section.php" ; ?>
    
</body>
</html>