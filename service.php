<?php

include "db.php";

$feel ="SELECT* FROM emmako_users ";
$felt =mysqli_query ($me, $feel);
$folk= mysqli_fetch_array($felt);



?>

<!-- Navbar starts -->

<?php   include "section_component/top_section.php";        ?>

<!-- ========== End Navbar ========== -->


       <!-- ========== Start Service ========== -->

       <div class="section">
    <div class="section-header">
        <h2>Our Service</h2>
        <p>What we do, and how we can help you</p>
    </div>
    <div class="container pt-5">
        <?php      
            $services= "SELECT * FROM emmako_services" ;
            $output= mysqli_query($me, $services) ;

           while ($outputs = mysqli_fetch_assoc ($output)){
        ?>
            <a href="service-selling.php">
                <div class="row m-2">
                    <div class="col-sm-6 imag">
                        <img src="images/<?php echo $outputs['services_image']  ?>" alt="" class="img-fluid">
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-center flex-column h-100 service-content ">
                            <h5><?php echo $outputs['services_name']  ?></h5>
                            <p><?php echo $outputs['services_description']  ?></p>
                            <!-- <p>We are your plug for premium imported vehicles of various brands, with complete papers at affordable price. we sell Belgium car of various brands with guarantee.</p> -->
                        </div>
                    </div>
                </div>
            </a>
            <!-- <a href="service-selling.php">
                <div class="row m-2 back">
                    <div class="col-sm-6 imag oppo">
                        <img src="images/white-offroader-jeep-parking.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col opp">
                        <div class="d-flex justify-content-center flex-column h-100 service-content ">
                            <h5>Fairly used Cars</h5>
                            <p>We are your plug for clean, sound and affordable used vehicles of various brands, with complete papers. We sell Nigeria-used car of various brands.</p>
                        </div>
                    </div>
                    
                </div>
            </a>
            <a href="service-selling.php">
                <div class="row m-2">
                    <div class="col-sm-6 imag">
                        <img src="images/white-offroader-jeep-parking.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-center flex-column h-100 service-content ">
                            <h5>Scrapped Cars</h5>
                            <p>We buy condemned vehicles, accidented vehicle, motocycles, metallic parts, metallic items, engines and gearbox for recycling. You can partner with us.</p>
                        </div>
                    </div>
                </div>
            </a> -->

            <?php  } ?>
      
        </div>
    </div>
</div>

    <!-- ========== End Service ========== -->


<!-- <div class="section" >
    <div class="section-header">
        <h2>Our Service</h2>
        <p>What we do, and how we can help you</p>
    </div>
    <div class="container p-5">
        <a href="service-selling.php">
            <div class="row m-2">
                <div class="col-sm-6 imag">
                    <img src="../images/white-offroader-jeep-parking.jpg" alt="" class="img-fluid">
                </div>
                <div class="col">
                    <div class="d-flex justify-content-center flex-column h-100 service-content ">
                        <h5>Belgium Cars</h5>
                        <p>We are your plug for premium imported vehicles of various brands, with complete papers at affordable price. we sell Belgium car of various brands with guarantee.</p>
                    </div>
                </div>
            </div>
        </a>
        <a href="service-selling.php">
            <div class="row m-2 back">
                <div class="col-sm-6 imag oppo">
                    <img src="../images/white-offroader-jeep-parking.jpg" alt="" class="img-fluid">
                </div>
                <div class="col opp">
                    <div class="d-flex justify-content-center flex-column h-100 service-content ">
                        <h5>Fairly used Cars</h5>
                        <p>We are your plug for clean, sound and affordable used vehicles of various brands, with complete papers. We sell Nigeria-used car of various brands.</p>
                    </div>
                </div>
                
            </div>
        </a>
        <a href="service-selling.php">
            <div class="row m-2">
                <div class="col-sm-6 imag">
                    <img src="../images/white-offroader-jeep-parking.jpg" alt="" class="img-fluid">
                </div>
                <div class="col">
                    <div class="d-flex justify-content-center flex-column h-100 service-content ">
                        <h5>Scrapped Cars</h5>
                        <p>We buy condemned vehicles, accidented vehicle, motocycles, metallic parts, metallic items, engines and gearbox for recycling. You can partner with us.</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    
</div> -->

    <!-- ========== End Service ========== -->

    
    <!-- ========== End Vehicle__Alert ========== -->

<?php   include "section_component/vehicle_alert.php";        ?>


    <!-- ========== End Vehicle__Alert ========== -->
 
    
    <!-- ========== Start Brands ========== -->   

<?php  include "section_component/brands_collection.php" ; ?>
    

    <!-- ========== End Brands ========== -->

    
      <!-- Pre Foooter -->
<?php  include "section_component/footer_section.php" ; ?>