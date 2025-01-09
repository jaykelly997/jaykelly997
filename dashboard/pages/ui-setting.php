<?php

include "../../db.php";

$service_name= "";
$service_description="";


$call= "SELECT* FROM emmako_ui_element " ;
$calle= mysqli_query($me, $call);
$calls = mysqli_fetch_array($calle);


if(isset($_POST['background'])){

    $background_image = $_FILES['backg_image']['name'] ;

        $photo= '../../images/'.$background_image ;

        move_uploaded_file($_FILES['backg_image']['tmp_name'], $photo);

    $password = mysqli_real_escape_string($me, $_POST['password']);

    if(empty($background_image)){
        $error_message = "field cannot be empty";
    }else {
        $ray= "UPDATE emmako_ui_element SET image= '$background_image' WHERE id='1' " ;
        $rays = mysqli_query($me, $ray) ;

        if ($rays){
                echo "<script>alert('update successful')</script>";
                $error_message = "update success";
        }else {
                echo "<script>alert('update unsuccessful')</script>";
                $error_message ="update fail";
        }
    }
}

if(isset($_POST['submit_logo'])){

    $logos = $_FILES['logo']['name'] ;

        $photo= '../../images/'.$logos ;

        move_uploaded_file($_FILES['logo']['tmp_name'], $photo);

    $password = mysqli_real_escape_string($me, $_POST['password']);

    if(empty($logos)){
        $error_message = "field cannot be empty";
    }else {
        $ray= "UPDATE emmako_ui_element SET image= '$logos' WHERE id= '2' " ;
        $rays = mysqli_query($me, $ray) ;

        if ($rays){
            $error_message = "update success";
        }else {
            $error_message ="update fail";
        }
    }
}

if(isset($_GET['edit'])){
    $service_id = $_GET['edit'];

    $input= "DELETE FROM emmako_services WHERE id = '$service_id' ";
    $input1= mysqli_query ($me, $input);
    if($input1) {
        echo "<script>alert('service deleted')</script>" ;

    }else {

        $message= "fail to delete";

    }

    // $service_pics = $_FILES['service_photo']['name'] ;
    // $service_head = mysqli_real_escape_string($me, $_POST['head']) ;
    // $service_desc = mysqli_real_escape_string($me, $_POST['description']) ;


    // // this is for moving the files into the image folders
    //     $service_image= '../../images/'.$service_pics ;

    //     move_uploaded_file($_FILES['service_photo']['tmp_name'], $service_image);



    // if(empty($service_head) && empty($service_desc) ){
    //     $error_message = "fields cannot be empty";
    // }
    // elseif(empty($service_pics)){

    //     $no_image_update= "UPDATE emmako_services SET services_name= '$service_head', services_description ='$service_desc' WHERE id= '$service_id' ";
    //     $error_message= "update successful";

    // }
    // else {
    //     $ray= "UPDATE emmako_services SET services_name= '$service_head', services_description ='$service_desc' services_image= '$service_pics') WHERE id= '$service_id' " ;
    //     $rays = mysqli_query($me, $ray) ;

    //     if ($rays){
    //         $error_message = "update success";
    //     }else {
    //         $error_message ="update fail";
    //     }
    // }
}

if(isset($_POST['submit_footer'])){

    $address = mysqli_real_escape_string($me, $_POST['address']) ;
    $terms = mysqli_real_escape_string($me, $_POST['terms']) ;
    $whatsapp = mysqli_real_escape_string($me, $_POST['whatsapp']) ;
    $facebook = mysqli_real_escape_string($me, $_POST['facebook']) ;
    $instagram = mysqli_real_escape_string($me, $_POST['instagram']) ;
    $twitter = mysqli_real_escape_string($me, $_POST['twitter']) ;
    $linkedin = mysqli_real_escape_string($me, $_POST['linkedin']) ;

    $password = mysqli_real_escape_string($me, $_POST['password']);

    if(empty($address) && empty($terms) && empty($whatsapp) && empty($facebook) && empty($instagram) && empty($twitter) && empty($linkedin)){
        $error_message = "field cannot be empty";
    }else {
        $ray= "UPDATE emmako_ui_element SET address= '$address', terms= '$terms', whatsapp= '$whatsapp', facebook= '$facebook', instagram= '$instagram', twitter= '$twitter', linkedin='$linkedin')" ;
        $rays = mysqli_query($me, $ray) ;

        if ($rays){
            $error_message = "update success";
        }else {
            $error_message ="update fail";
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
                        <h2>UI-setting</h2>
                        <p class="error_message">
                            <?php   if(!empty ($error_message)) {echo "$error_message" ; }     ?>
                        </p>
                    </div>
                    <div class="list">
                        <ul>
                            <li><a href="#background">background-setting</a></li>
                            <li><a href="#logo">logo</a></li>
                            <li><a href="#service-page">service-page</a></li>
                            <li><a href="#footer">footer</a></li>
                        </ul>
                    </div>

                    <div class="ui-element">
                        <!-- for background elements -->

                        <div class="items" id="background">
                            
                            <form action="" method="post" enctype="multipart/form-data">
                            

                                <div class="entry ui">
                                    <div class="picture ui">
                                        <img src="../../images/<?php echo $calls['image'] ;?>" alt="" id="pick" value="<?php echo $calls['image'] ;?>" onclick="pics()">
                                        <label for="">current image</label>

                                    </div>
                                </div>
                                <div class="entry ui">
                                    <label for="">new_image*</label> <br>
                                    <input name="backg_image" type="file" id="pict-file" onchange="loadimage(this)">
                                </div>
                                
                                <div class="entry">
                                    <label for="">password*</label><br>
                                    <input type="password" name="password" id="password" placeholder="Enter current password to save change" >
                                    <span id="eye" onclick="eyes()">
                                        <i class="fa fa-eye" id="show"></i> 
                                        <i class="fa fa-eye-slash" id="hide"></i>
                                    </span>
                                </div>
                            
                            <button type="submit" name="background">submit</button>
                            </form>
                        </div>

                        <!-- for logo -->

                        <div class="items" id="logo">
                            
                            <form action="" method="post" enctype="multipart/form-data">
                            

                                <div class="entry ui">
                                    <div class="picture ui">
                                        <img src="../../images/<?php echo $calls['image'] ;?>" alt="" id="logopick" onclick="logopics()">
                                        <label for="">current logo</label>

                                    </div>
                                </div>
                                <div class="entry ui">
                                    <label for="">new_logo*</label> <br>
                                    <input type="file" name="logo" id="logopict" onchange="logoimage(this)">
                                </div>
                                
                                <div class="entry">
                                    <label for="">password*</label><br>
                                    <input type="password" id="password" placeholder="Enter current password to save change" >
                                    <span id="eye" onclick="eyes()">
                                        <i class="fa fa-eye" id="show"></i> 
                                        <i class="fa fa-eye-slash" id="hide"></i>
                                    </span>
                                </div>
                            
                            <button type="submit" name="submit_logo">submit</button>
                            </form>
                        </div>

                        <!-- for service section elements -->

                        <div class="items" id="service-page">
                            
                            <form action="" method="post" enctype="multipart/form-data">
                                <?php
                                $service= "SELECT* FROM emmako_services ";
                                $show = mysqli_query($me, $service);
                                

                                ?>
                                <div class="serve">
                                    <p class="error_message">
                                        <?php   if(!empty ($error_message)) {echo "$error_message" ; }     ?> 
                                    </p>
                                    <table>
                                        <tr>
                                            <th>service header</th>
                                            <th>service description</th>
                                            <th>service image</th>
                                            <th>action</th>
                                        </tr>
                                        <?php while($shows =mysqli_fetch_array($show)){ ; ?>
                                        
                                        <tr>
                                            <td><textarea name="head" id="" value="" cols="auto" rows="10" ><?php  echo $shows['services_name'] ; ?></textarea></td>
                                            <td><textarea name="description" id="" value=""cols="auto" rows="10"><?php  echo $shows['services_description'] ; ?></textarea></td>
                                            <td>
                                                <div class="picture ui">
                                                    <img src="../../images/<?php echo $shows['services_image'] ; ?>" alt="" id="fair" onclick="photo()">
                                                    <input type="file" name="service_photo" id="service_photo" onchange="serviceimage(this)" >
                                                </div>
                                            </td>
                                            <td><a href="service.php">edit</a></td>
                                        </tr>
                                        
                                            <?php  } ?>
                                        </tr>
                                    </table>
                                </div>
                                
                            </form>
                            <p class="adds">
                                add more service
                            </p>
                            
    <!-- service addition pop-up -->
    <?php  include "../dashbord_component/service-addition.php" ; ?>

                        </div>

                        <!-- for footer element -->

                        <div class="items" id="footer">
                            
                            <form action="" method="post" enctype="multipart/form-data">
                                
                                <div class="serve">
                                    <table>
                                        <tr>
                                            <th>quick note</th>
                                            <th>terms and conditions</th>
                                            <th>social links</th>
                                        </tr>
                                        <tr>
                                            <td><textarea name="address" id="" cols="auto" rows="auto" placeholder="Address" value="<?php echo $calls['company_address']  ; ?>"></textarea></td>
                                            <td><textarea name="terms" id="" cols="auto" rows="10" value="<?php echo $calls['company_policy']  ; ?>"></textarea></td>
                                            <td>
                                                <p>WhatsApp</p>
                                                <input type="text" name="whatsapp" placeholder="whatsapp" value="<?php echo $calls['whatsapp']  ; ?>"> <br>
                                                <p>Facebook</p>
                                                <input type="text" name="facebook" placeholder="facebook" value="<?php echo $calls['facebook']  ; ?>"><br>
                                                <p>Instagram</p>
                                                <input type="text" name="instagram" placeholder="instagram" value="<?php echo $calls['instagram']  ; ?>"><br>
                                                <p>Twitter</p>
                                                <input type="text" name="twitter" placeholder="twitter" value="<?php echo $calls['twitter']  ; ?>">
                                                <p>Linkedin</p>
                                                <input type="text" name="linkedin" placeholder="linkedin" value="<?php echo $calls['linkedin'] ;  ?>">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                
                                <div class="entry">
                                    <label for="">password*</label><br>
                                    <input type="password"  name="password" id="password" placeholder="Enter current password to save change" >
                                    <span id="eye" onclick="eyes()">
                                        <i class="fa fa-eye" id="show"></i> 
                                        <i class="fa fa-eye-slash" id="hide"></i>
                                    </span>
                                </div>
                            
                            <button type="submit" name="submit_footer">submit</button>
                            </form>
                        </div>
                    </div>

                       

                </div>
            </div>
        </div>
    </div>

    

    <!-- footer -->
    <?php  include "../dashbord_component/footer.php" ; ?>
   





    <!-- using image avater for backimage preview -->    
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

 <!-- logo preview -->    
 <script> 
        function logopics() {
        
            document.querySelector('#logopict').click();
        }
        function logoimage(e){
    
            if(e.files[0]){
    
                var filereader = new FileReader();
    
                filereader.onload = function(e){
    
                    document.querySelector('#logopick').setAttribute('src', e.target.result );
                }
                filereader.readAsDataURL(e.files[0]) ;
            }
        }


        // for service ui element on image preview

        function seviceimage() {
            
            document.querySelector('#service_photo').click();
        }
        function belgiumimage(e){

            if(e.files[0]){

                var filereader = new FileReader();

                filereader.onload = function(e){

                    document.querySelector('#photo').setAttribute('src', e.target.result );
                }
                filereader.readAsDataURL(e.files[0]) ;
            }
        }


      // for service ui element on image preview gairly used

      function fairlyused() {
            
            document.querySelector('#fairly').click();
        }
        function fairlyusedimage(e){

            if(e.files[0]){

                var filereader = new FileReader();

                filereader.onload = function(e){

                    document.querySelector('#fair').setAttribute('src', e.target.result );
                }
                filereader.readAsDataURL(e.files[0]) ;
            }
        }


    // for service ui element on image preview scrap

        function scrap() {
            
            document.querySelector('#scrapped').click();
        }
        function scrapimage(e){

            if(e.files[0]){

                var filereader = new FileReader();

                filereader.onload = function(e){

                    document.querySelector('#scraps').setAttribute('src', e.target.result );
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

<script>
        function show(el){
            $('input').attr('type' ,el.checked? 'text' : 'password');
        }
    </script>
</body>
</html>