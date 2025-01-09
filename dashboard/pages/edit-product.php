<?php

    include "../../db.php";


    $product_name ="";
    $product_model="";
    $product_brand="";
    $product_category="";
    $product_price="";
    $product_location="";
    $product_quantity="";
    $product_color="";
    $product_image="";
    
    

    $error_message = "";


    if(isset($_GET['edit'])){
        $id = $_GET['edit'];

        $input= "SELECT * FROM emmako_brands WHERE id = '$id' ";
        $input1 = mysqli_query ($me, $input);
        $input2 = mysqli_fetch_array($input1);

        $product_name = $input2['product_name'];
        $product_model= $input2['product_model'];
        $product_brand= $input2['product_brand'];
        $product_category= $input2['product_category'];
        $product_price= $input2['product_price'];
        $product_location= $input2['product_location'];
        $product_quantity= $input2['product_quantity'];
        $product_color= $input2['product_color'];
        $product_image= $input2['product_image'];
    

    }

    if(isset($_POST['product_update'])){
        $product_name =mysqli_real_escape_string($me, $_POST['product_name']);
        $product_model =mysqli_real_escape_string($me, $_POST['product_model']);
        $product_brand =mysqli_real_escape_string($me, $_POST['product_brand']);
        $product_category =mysqli_real_escape_string($me, $_POST['product_category']);
        $product_price =mysqli_real_escape_string($me, $_POST['product_price']);
        $product_location =mysqli_real_escape_string($me, $_POST['product_location']);
        $product_quantity =mysqli_real_escape_string($me, $_POST['product_quantity']);
        $product_color =mysqli_real_escape_string($me, $_POST['product_color']);
        $product_image =  $_FILES['product-photo']['name'] ;

        $photo= '../../images/'.$product_image ;

        move_uploaded_file($_FILES['product-photo']['tmp_name'], $photo);

        
        if(empty($product_image)){
            $no_image_update= "UPDATE emmako_brands SET product_name= '$product_name', product_model ='$product_model', product_brand='$product_brand', product_category= '$product_category', product_price= '$product_price', product_location= '$product_location', product_quantity= '$product_quantity', product_color= '$product_color' WHERE id= '$id' ";
            $no_image_update1=mysqli_query($me, $no_image_update);
            echo "<script>alert('updated successful without image changed')</script>" ;
        }
        else{
            $update= "UPDATE emmako_brands SET product_name= '$product_name', product_model ='$product_model', product_brand='$product_brand', product_category= '$product_category', product_price= '$product_price', product_location= '$product_location', product_quantity= '$product_quantity', product_color= '$product_color', product_image= '$product_image' WHERE id= '$id' ";
            $update1=mysqli_query($me, $update);
    
            if($update1){
                echo "<script>alert('update successful with image changed')</script>";
                
            }else {
                echo "<script>alert('update unsuccessful')</script>";
    
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
                                        <h4>editing product</h4>

                                        <p class="error_message">
                                            <?php   if(!empty ($error_message)) {echo "$error_message" ; }     ?> 
                                        </p>
                                    </div>
                                    <div class="poptoggle">
                                        <a href="brands.php"><i class="fa fa-multiply" id="cancel"></i></a>
                                    </div>
                                    <div class="each">
                                        <label for="">product name*</label>
                                        <input type="text" name="product_name" id="" value="<?php echo "$product_name"; ?>"> <br>
                                    </div>
                                    <div class="each">
                                        <label for="">model*</label>
                                        <input type="text" name="product_model" id="" value="<?php echo "$product_model" ; ?>"> <br>
                                    </div>
                                    <div class="each">
                                        <label for="">product brand*</label>
                                        <input type="text" name="product_brand" id="" value="<?php echo "$product_brand" ; ?>"> <br>
                                    </div>
                                    <div class="each">
                                        <label for="">product category*</label>
                                        <select name="product_category" id="" value="<?php echo "$product_category"; ?>">
                                            <option value="Belgium">Belgium</option>
                                            <option value="Fairly used">Fairly used</option>
                                            <option value="Scrap">Scrap</option>
                                        </select><br>
                                    </div>
                                    <div class="each">
                                        <label for="">price*</label>
                                        <input type="number" name="product_price" id="" value="<?php echo "$product_price"; ?>"> <br>
                                    </div>
                                    <div class="each">
                                        <label for="">location*</label>
                                        <input type="text" name="product_location" id="" value="<?php echo "$product_location" ; ?>"> <br>
                                    </div>
                                    <div class="each">
                                        <label for="">quantity*</label>
                                        <input type="number" name="product_quantity" id="" value="<?php echo "$product_quantity" ; ?>"> <br>
                                    </div>
                                    <div class="each">
                                        <label for="">product color*</label>
                                        <input type="text" name="product_color" id="" value="<?php echo "$product_color"; ?>" > <br>
                                    </div>
                                    <div class="each">
                                        <label for="">product-image*</label>
                                        <input type="file" name="product-photo" value="<?php echo "$product_image"; ?>" id="img" onchange="product_photo(this)"><br>
                                    </div>
                                    <div class="image" >
                                        <img src="../../images/<?php echo "$product_image"; ?>"  id="pin" alt="no image" onclick="product_image()">
                                    </div>
                                    <p style="color :white";>NOTE: Add image before updating</p>
                                    <button name="product_update">update</button>
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


<!-- image preview on change -->    
<script> 
        function product_image() {
        
            document.querySelector('#img').click();
        }
        function product_photo(e){
    
            if(e.files[0]){
    
                var filereader = new FileReader();
    
                filereader.onload = function(e){
    
                    document.querySelector('#pin').setAttribute('src', e.target.result );
                }
                filereader.readAsDataURL(e.files[0]) ;
            }
        }
</script>

  

<!-- for active class for sidebar -->

<script>
    $(document).ready(function (){
        $(".one").click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        });
    });
</script>


</body>
</html>