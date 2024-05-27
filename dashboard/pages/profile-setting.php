<?php

include "../../db.php";

    $list = "SELECT* FROM emmako_users" ;
    $list1 = mysqli_query($me, $list);
    $list2 = mysqli_fetch_array($list1);
    

// for saving of values for updating
 $admin_name= "";
 $new_admin_password="";

//  for adding section
$new_admin_username= "";
$admin_category ="";


 if(isset($_POST['update'])) {
    
    $admin_name = mysqli_real_escape_string($me, $_POST['admin_name']);
    $user_status = mysqli_real_escape_string($me, $_POST['user_stat']);
    $admin_password = mysqli_real_escape_string($me, $_POST['admin_password']);
    $admins_image= $_FILES['admin_image']['name'] ;

    $photo= '../../images/'.$admins_image ;

    move_uploaded_file($_FILES['admin_image']['tmp_name'], $photo);


    if(empty($admin_name) && empty($user_status)) {
        $error_message ="All Fields are required!";

    }elseif(empty($admin_name)){
        $error_message ="Admin name is required!";

    }else {
            $flow= "UPDATE emmako_users SET name= '$admin_name', admin_status ='$user_status', image= '$photo' WHERE id ='$user_id' ";
            $flows= mysqli_query($me, $flow);
            
            if($flows){
                $error_message = "update success";

        }else {
            echo "Failed to update" ;
        }
    }

 }

// for adding new admin
 if(isset($_POST['add_admin'])) {
    
    $new_admin_username = mysqli_real_escape_string($me, $_POST['new_admin_username']);
    $new_admin_password = mysqli_real_escape_string($me, $_POST['new_admin_password']);
    $user_status = mysqli_real_escape_string($me, $_POST['admin_category']);
    $admin_password = mysqli_real_escape_string($me, $_POST['admin_password']);
    
    $new_image = $_FILES['photo']['name'] ;

        $photo= '../../images/'.$new_image ;

        move_uploaded_file($_FILES['photo']['tmp_name'], $photo);


    if(empty($new_admin_name) && empty($new_admin_password)) {
        echo "<script>alert('Fields are required!')</script>";
    }elseif(empty($new_admin_username)){
        echo "<script>alert('Admin UserName Required')</script>";

    }elseif(empty($new_admin_password)){
        echo "<script>alert('input a password for new admin')</script>";
    }else {

// yet to add password cross examination

        $flow ="INSERT INTO emmako_users (username, password, admin_status, image) VALUES ('$new_admin_username', '$new_admin_password', '$user_status', '$photo')";
        $flows= mysqli_query($me, $flow);
        
        if($user_status== $list2['admin_status']){
            $flow ="UPDATE emmako_users SET (admin_status_id ='1')";
            $flows= mysqli_query($me, $flow);
        
        }else{
            $flow ="UPDATE emmako_users SET (admin_status_id ='0')";
            $flows= mysqli_query($me, $flow);
        
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
                        <h2>profile setting</h2>
                        <p class="error_message">
                            <?php   if(!empty ($error_message)) {echo "$error_message" ; }     ?> 
                        </p>
                    </div>
                    <div class="items">
                        
                        <form action="" method="post" enctype="multipart/form-data">
                            
                            <div class="add">
                                <span class="add" id="pull">add new admin  <i class="fa fa-add"></i></span>
                            </div>

                            <div class="entry">
                                <div class="picture">
                                    <img src="../../images/avater.jpg" alt="" id="pick" onclick="pics()">
                                </div>
                            </div>
                            <div class="entry">
                                <label for="">name*</label><br>
                                <input type="text" name="admin_name" id="" value="">
                            </div>
                            <div class="entry">
                                <label for="">user</label><br>
                                <select name="user_stat" id="">
                                    <option value="normal_admin">normal-admin</option>
                                    <option value="super_admin">super-admin</option>
                                </select>
                            </div>
                            <div class="entry">
                                <label for="">image*</label> <br>
                                <input type="file" name="admin_image" id="pict-file" onchange="loadimage(this)">
                            </div>
                            <div class="entry">
                                <label for="">password*</label><br>
                                <input type="password" id="password" name="admin_password" placeholder="Enter current password to save change" >
                                <span id="eye" onclick="eyes()">
                                    <i class="fa fa-eye" id="show"></i> 
                                    <i class="fa fa-eye-slash" id="hide"></i>
                                </span>
                            </div>
                        
                        <button type="submit" name="update">update</button>
                        </form>
                    </div>
                    
                    
                    
                    <!-- for addition of new admins -->
                    
                    <div class="admin-new items pop" id="admin-new">
                    <div class="cancel" id="cancel"><i class="fa fa-multiply"></i></div>

                        <div class="head"><h3>new admin</h3></div>
                        
                        <form action="" method="POST" enctype="multipart/form-data">
                            
                            <div class="entry">
                                <div class="picture">
                                    <img src="../../images/avater.jpg" alt="" id="view" onclick="adminpics()">
                                </div>
                            </div>
                            <div class="entry">
                                <label for="">username*</label><br>
                                <input type="text" name="new_admin_username" id="" value="">
                            </div>
                            <div class="entry">
                                <label for="">password*</label> <br>
                                <input type="password" name="new_admin_password">
                            </div>
                            <div class="entry">
                                <label for="">admin category*</label> <br>
                                <select name="admin_category" id="">
                                    <option value="normal_admin">normal</option>
                                    <option value="super_admin">super-admin</option>
                                </select>
                            </div>
                            
                            <div class="entry">
                                <label for="">images*</label> <br>
                                <input type="file" name="photo" id="admin-photo" onchange="adminphoto(this)">
                            </div>
                            <div class="entry">
                                <label for="">password*</label><br>
                                <input type="password" id="password" name="admin_password" placeholder="Enter current password to save change" >
                                <span id="eye" onclick="eyes()">
                                    <i class="fa fa-eye" id="show"></i> 
                                    <i class="fa fa-eye-slash" id="hide"></i>
                                </span>
                            </div>
                        
                            <button name="add_admin">add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- footer -->
   
    <?php  include "../dashbord_component/footer.php" ; ?>


    <!-- using image avater to upload image in profile setting  -->    
    <script> 
        function pics() {
        
            document.querySelector('#pict-file').click();
        }
        function loadimage(e){
    
            if(e.files[0]){
    
                var filereader = new FileReader();
    
                filereader.onload = function(e){
    
                    document.querySelector('#pick').setAttribute('src', e.target.result );
                }
                filereader.readAsDataURL(e.files[0]) ;
            }
        }

        </script>

        <!-- for password eye -->

        <script>
            function eyes(){
                password = document.getElementById ("password");
                hide =document.getElementById ("hide");
                eye =document.getElementById ("show");

                if (password.type ==="password") {
                    password.type= "text";
                    hide.style.display="block";
                    eye.style.display="none";
                }else {
                    password.type="password";
                    hide.style.display="none";
                    eye.style.display="block";
                }
            }
        </script>

        
    <!-- for toggle -->

     <script src='../../js/jquery.js'></script>
     <script> 
         $(document).ready(function() {
             
             $('#pull').click(function() {
                 $('.admin-new').toggleClass('active')
                
             })

         })
 
     </script>


<!-- for add admin page. image avater  -->    
<script> 
        function adminpics() {
        
            document.querySelector('#admin-photo').click();
        }
        function adminphoto(e){
    
            if(e.files[0]){
    
                var filereader = new FileReader();
    
                filereader.onload = function(e){
    
                    document.querySelector('#view').setAttribute('src', e.target.result );
                }
                filereader.readAsDataURL(e.files[0]) ;
            }
        }

        </script>


</body>
</html>