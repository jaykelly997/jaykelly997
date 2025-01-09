<?php
    include "../../db.php";

    // to set them for values

    $service_name ="";
    $service_description="";
    $service_image="";
    
    $error_message ="";

        if(isset($_GET['edit'])){
            $services_id = $_GET['edit'];
        
            $input= "SELECT* FROM emmako_services WHERE id ='$services_id' ";
            $input1= mysqli_query ($me, $input);
            $shows= mysqli_fetch_array($input1);
        
            $head= $shows['services_name'] ;
        }
            if(isset($_POST['edit_service'])) {
        
                $service_name =mysqli_real_escape_string($me, $_POST['service_name']);
                $service_description =mysqli_real_escape_string($me, $_POST['service_description']);
                $service_image = $_FILES['service_photo']['name'] ;
        
                $photo= '../../images/'.$service_image ;
        
                move_uploaded_file($_FILES['service_photo']['tmp_name'], $photo);
        
        
                if(empty($service_name) && empty($service_description) && empty($service_image)) {
                    $error_message ="all fields are required";
                    echo "<script>alert('all fields are required')</script>" ;
        
                }elseif(empty($service_name)){
                    $error_message ="service name required";
                    echo "<script>alert('Service name required')</script>" ;
                    
                }elseif(empty($service_description)){
                    $error_message ="service description required";
                    echo "<script>alert('Service description required')</script>" ;
                }elseif(empty($service_images)){
                    $play = "UPDATE emmako_services SET services_name='$service_name', services_description='$service_description' WHERE id= '$services_id' ";
                    $player = mysqli_query($me, $play);
                    header('location:../pages/service.php');
                    echo "<script>alert('updated without image')</script>" ;
                    
                }
                else{
                    $play = "UPDATE emmako_services SET services_name='$service_name', services_description='$service_description', services_image='$service_image' WHERE id= '$services_id' ";
                    $player = mysqli_query($me, $play);
                    
        
                    if($service_name == $carry['service_name']){
                        $error_message= "service already exist";
                    }else{
                        header('location:../pages/service.php');
                        echo "<script>alert('Service added successfully')</script>" ;

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
        
                <!-- product update page or edit page -->

                <div class="edit-page pop" id="pop">
                    <div class="curtain">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="element">
                                <div class="title">
                                    <h4>editing setting</h4>

                                    <p class="error_message">
                                        <?php   if(!empty ($error_message)) {echo "$error_message" ; }     ?> 
                                    </p>
                                </div>
                                <div class="poptoggle">
                                    <a href="../pages/service.php"><i class="fa fa-multiply" id="cancel"></i></a>
                                </div>
                                <div class="each">
                                    <label for="">service name*</label>
                                    <input type="text" name="service_name" id="" value="<?php echo $shows['services_name']; ?>"> <br>
                                </div>
                                <div class="each">
                                    <label for="">service Description*</label>
                                    <textarea name="service_description" id="" cols="30" rows="10"><?php echo $shows['services_description']  ?></textarea>
                                </div>
                                <div class="each">
                                    <label for="">product-image*</label>
                                    <input type="file" name="service_photo" value="<?php echo "$product_image"; ?>" id="img" onchange="product_photo(this)"><br>
                                </div>
                                <div class="image" >
                                    <img src="../../images/<?php echo $shows['services_image'] ?>"  id="pin" alt="no image" onclick="product_image()">
                                </div>
                                <button name="edit_service">update</button>
                            </div>
                            
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

        

<!-- footer -->


<?php  include "../dashbord_component/footer.php" ; ?>


    <script>
        addBtn = document.querySelector('.adds');
        pop = document.querySelector('.pop');
        cancel = document.getElementById('cancel');
        

        addBtn.onclick = function() {
            pop.classList.toggle('active');
            
        }

        cancel.onclick = function() {
                addBtn.classList.remove('active');
                pop.classList.remove('active');
        }
    </script>
    

 <!-- image preview -->    
 <script> 
        function productimage() {
        
            document.querySelector('#img').click();
        }
        function productphoto(e){
    
            if(e.files[0]){
    
                var filereader = new FileReader();
    
                filereader.onload = function(e){
    
                    document.querySelector('#pin').setAttribute('src', e.target.result );
                }
                filereader.readAsDataURL(e.files[0]) ;
            }
        }
</script>