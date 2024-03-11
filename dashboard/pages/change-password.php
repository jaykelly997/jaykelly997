<?php
include "../../db.php";

$error_message ="";

if(isset($_POST['submit_password'])){
    
    $password = mysqli_real_escape_string($me, $_POST['password']) ;
    $new_password = mysqli_real_escape_string($me, $_POST['new_password']) ;
    $confirm_password = mysqli_real_escape_string($me, $_POST['confirm_password']) ;

    if(empty($password) && empty($new_password) && empty($confirm_password)) {
        $error_message = "all field required!" ;
    
    }elseif(empty($password)){
        $error_message="old password required";
    }elseif (empty($new_password)){
        $error_message="new_passwork column cannot be empty!" ;
    }elseif(empty($confirm_password)){
        $error_message= "confirm_password column cannot be empty";
    }
    else{
        $play ="SELECT *FROM emmako_user WHERE email = '$email' password= '$password' " ;
        $player = "mysqli_query($me, $play)";
        $players = "mysqli_fetch_array($player)";


        if($password == $player['password']) {
            $error_message= "password change successful";
        }else {
            $error_message= "incorrect password";
        }
    }

}

?>

  <!-- topbar section -->

  <?php include "../dashbord_component/topbar.php" ;  ?>



    <!-- main content -->
    <div class="all">
        <div class="responsive">

            <div class="toggle">
                <i class="fa fa-bars"></i>
            </div>
            
            <!-- for sidebar of the main component -->

            <?php include "../dashbord_component/sidebar.php" ;  ?>
            

            <div class="content-side">
                <div class="content">
                    <div class="heading">
                        <h2>change password</h2>

                        <p class="error_message">
                            <?php   if(!empty ($error_message)) {echo "$error_message" ; }     ?> 
                        </p>

                    </div>
                    <div class="items">
                        <form action="" method="post">
                            
                            <div class="entry">
                                <label for="">old password*</label><br>
                                <input type="password" name="password" >
                                
                            </div>
                            <div class="entry">
                                <label for="">new password*</label> <br>
                                <input type="password" name="new_password" >
                            </div>
                            <div class="entry">
                                <label for="">confirm new password*</label> <br>
                                <input type="password" name="confirm_password" >
                            </div>
                            <div class="show-me">
                                <input type="checkbox" name="" id="see" onchange="show(this)">
                                <label for="">show password</label>
                            </div>
                        
                        <button type="submit" name="submit_password">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- footer -->
    <?php  include "../dashbord_component/footer.php" ; ?>
   


      <!-- for password eye -->
      
      <script>
        function show(el){
            $('input').attr('type' ,el.checked? 'text' : 'password');
        }
    </script>

    



</body>
</html>