<?php
    include "../../db.php";

    // to set them for values

    $service_name ="";
    $service_description="";
    $service_image="";

    
    $error_message ="";
    
        $collection ="SELECT* FROM emmako_services";
        $collections = mysqli_query($me, $collection);
        $carry = mysqli_fetch_array($collections);

    if(isset($_POST['add_service'])) {

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
        }
        else{
            $play = "INSERT INTO emmako_services(service_name, service_description, service_image) VALUES ('$service_name', '$service_description', '$service_image') ";
            $player = mysqli_query($me, $play);
            

            if($service_name == $carry['service_name']){
                $error_message= "service already exist";
            }else{

                echo "<script>alert('Service added successfully')</script>" ;
            }
            
        }
        
    }


?>

<div class="pop" id="pop">
        <div class="curtain">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="element">
                    <div class="title">
                        <h4>adding new service</h4>

                        <p class="error_message">
                            <?php   if(!empty ($error_message)) {echo "$error_message" ; }     ?> 
                        </p>
                    </div>
                    <div class="poptoggle">
                        <i class="fa fa-multiply" id="cancel"></i>
                    </div>
                    <div class="each">
                        <label for="">service name*</label>
                        <input type="text" name="service_name" id="cap" > <br>
                    </div>
                    <div class="each">
                        <label for="">service description*</label>
                        <textarea name="service_description" id="" cols="30" rows="5"></textarea>
                    </div>
                    <div class="each">
                        <label for="">service-image*</label>
                        <input type="file" name="service_photo" id="img" onchange="productphoto(this)"><br>
                    </div>
                    <div class="image" >
                        <img src="../../images/avater.jpg" id="pin" alt="" onclick="productimage()">
                    </div>
                    <button name="add_service">submit</button>
                </div>
            </form>
        </div>
        
    </div>


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