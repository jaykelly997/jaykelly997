<?php
    include "../../db.php";

    // to set them for values

    $product_name ="";
    $product_model="";
    $product_brand="";
    $product_category="";
    $product_price="";
    $product_location="";
    $product_quantity="";
    $product_color="";
    $product_image="";

    
    $error_message ="";
    

        // $collection ="SELECT* FROM emmako_brands";
        // $collection = mysqli_query($me, $collection);
        // $carry = mysqli_fetch_array($collections);

    if(isset($_POST['product_submit'])) {

        $product_name =mysqli_real_escape_string($me, $_POST['product_name']);
        $product_model =mysqli_real_escape_string($me, $_POST['product_model']);
        $product_brand =mysqli_real_escape_string($me, $_POST['product_brand']);
        $product_category =mysqli_real_escape_string($me, $_POST['product_category']);
        $product_price =mysqli_real_escape_string($me, $_POST['product_price']);
        $product_location =mysqli_real_escape_string($me, $_POST['product_location']);
        $product_quantity =mysqli_real_escape_string($me, $_POST['product_quantity']);
        $product_color =mysqli_real_escape_string($me, $_POST['product_color']);
        $product_image =  $_FILES['product_photo']['name'] ;

        $photo= 'image/'.$product_image ;

        move_uploaded_file($_FILES['product_photo']['tmp_name'], $photo);


        if(empty($product_name) && empty($product_model) && empty($product_brands) && empty($product_category) && empty($product_price) && empty($product_location) && empty($product_quantity) && empty($product_color) && empty($product_image)) {
            $error_message ="all fields are required";
            echo "<script>alert('all fields are required')</script>" ;

        }elseif(empty($product_name)){
            $error_message ="product name required";
            echo "<script>alert('product name required')</script>" ;
            
        }elseif(empty($product_brand)){
            $error_message ="product_brand required";
            echo "<script>alert('product_brand required')</script>" ;
        }elseif(empty($product_category)){
            $error_message ="product category required!";
            echo "<script>alert('product category required')</script>" ;

        }elseif(empty($product_price)) {
            $error_message ="product price required!";
            echo "<script>alert('product price required')</script>" ;

        }elseif(empty($product_quantity)){
            $error_message = "product quantity required";
            echo "<script>alert('product quantity required')</script>" ;

        }
        else{
            $play = "INSERT INTO emmako_brands (product_name, product_model, product_brand, product_category, product_price, product_location, product_quantity, product_color, product_image) VALUES ('$product_name', '$product_model', '$product_brand', '$product_category', '$product_price', '$product_location', '$product_quantity', '$product_color', '$product_image') ";
            $player = mysqli_query($me, $play);

            
            $error_message = "product added successfully"  ;
            echo "<script>alert('product added successfully')</script>" ;

            
            // if($product_name == $carry['product_name']) {
            //     $addy ="UPDATE emmako_brands SET product_quantity= '+ $product_quantity', product_model ='$product_model', product_price ='product_price' ";
            //     $paddy ="mysqli_query($me, $addy)"

            // }
        }
        
    }


?>

<div class="pop" id="pop">
        <div class="curtain">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="element">
                    <div class="title">
                        <h4>adding new product</h4>

                        <p class="error_message">
                            <?php   if(!empty ($error_message)) {echo "$error_message" ; }     ?> 
                        </p>
                    </div>
                    <div class="poptoggle">
                        <i class="fa fa-multiply" id="cancel"></i>
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
                        <input type="text" name="product_brand" id="" value="<?php echo "$product_brand"; ?>"> <br>
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
                        <input type="file" name="product_photo" id="img" onchange="product_photo(this)"><br>
                    </div>
                    <div class="image" >
                        <img src="../../images/avater.jpg" id="pin" alt="" onclick="product_image()">
                    </div>
                    <input type="submit" name="product_submit" value="submit">
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