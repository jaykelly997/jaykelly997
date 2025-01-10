<?php

include "db.php";

if(isset($_GET['sell'])){
    $vehicle_id = $_GET['sell'];

    $feel ="SELECT* FROM emmako_brands where id= '$vehicle_id' ";
    $felt =mysqli_query ($me, $feel);
    $folk= mysqli_fetch_array($felt);
    
  }


?>

<!-- Navbar starts -->

<?php   include "section_component/top_section.php";        ?>

    <!-- ========== End Navbar ========== -->

    <div class="container d-flex flex-column align-items-center justify-content-center pt-5 pb-5">
        <div class="w-50">
            <img src="images/<?php  echo $folk['product_image'] ?>" alt="" class="img-fluid img-rounded">
        </div>
        <form action="" class="pt-4 pb-1">
            <div class="form-group d-flex">
                <label for="">Vehicle Name</label>
                <input type="text"
                  class="form-control" name="" value="<?php  echo $folk['product_name'] ?>" id="" aria-describedby="helpId" placeholder="">
              </div>
              <div class="form-group d-flex">
                <label for="">Model</label>
                <input type="text"
                  class="form-control" name="" value="<?php  echo $folk['product_model'] ?>" id="" aria-describedby="helpId" placeholder="">
              </div>
              <div class="form-group d-flex">
                <label for="">Location</label>
                <input type="text"
                  class="form-control" name="" value="<?php  echo $folk['product_location'] ?>" id="" aria-describedby="helpId" placeholder="">
              </div>
              <div class="form-group d-flex">
                <label for="">Price</label>
                <input type="text"
                  class="form-control" name="" value="<?php  echo $folk['product_price'] ?>" id="" aria-describedby="helpId" placeholder="">
              </div>
              <div class="d-flex justify-content-center">
                <button class="defBtn"><a href="login.html">proceed</a></button>
              </div>
        </form>
    </div>

      <!-- Pre Foooter -->
<?php  include "section_component/footer_section.php" ; ?>