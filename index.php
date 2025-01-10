<?php

include "db.php";

$feel ="SELECT* FROM emmako_users ";
$felt =mysqli_query ($me, $feel);
$folk= mysqli_fetch_array($felt);



?>

<!-- Navbar starts -->

<?php   include "section_component/top_section.php";        ?>
<!-- ========== End Navbar ========== -->

    
 <!-- ========== Start Hero ========== -->

 <div class="hero">
    <img src="images/white-offroader-jeep-parking.jpg" alt="" class="img-fluid">
    <div class="hero-content contentment">
        <h3>Buying and Selling Cars with Customers Satisfaction in View</h3>
        <div class="options">
            <a href="brand.php">buy now</a>
            <a href="buyingPage.php">sell now</a>
        </div>
    </div>
 </div>
  <!-- ========== End Hero ========== -->

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
                        <img src="../images/white-offroader-jeep-parking.jpg" alt="" class="img-fluid">
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

    <!-- ========== Start Brands ========== -->   
    <?php   include "section_component/brands_collection.php";        ?>

    

    <!-- ========== End Brands ========== -->

    <!-- ========== Start Vehicle__Alert ========== -->
    
    <?php   include "section_component/vehicle_alert.php";        ?>

    <!-- ========== End Vehicle__Alert ========== -->
    

    <!-- ========== Start FeedBack ========== -->
    <div class="section" id="Feedback">
        <div class="section-header">
            <h2>Feedback</h2>
            <p>What customers says about us</p>
        </div>
        <div class="container p-5">
            <div class="row bg-secondary p-1 py-5 d-flex justify-content-center align-items-center">
                <div class="col-sm-3 testimonial m-1  ">
                    <p>
                        Emmako over the years have been a sure place for business.I am satisfied with their products, and generally their services.
                    </p>
                    <div class="profile">
                        <p class="text-end">- John Doe <br> <span> Onitsha</span> </p>
                        <img src="images/white-offroader-jeep-parking.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-3 testimonial m-1  ">
                    <p>
                        Emmako over the years have been a sure place for business.I am satisfied with their products, and generally their services.
                    </p>
                    <div class="profile">
                        <p class="text-end">- John Doe <br> <span> Onitsha</span> </p>
                        <img src="images/white-offroader-jeep-parking.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-3 testimonial m-1  ">
                    <p>
                        Emmako over the years have been a sure place for business.I am satisfied with their products, and generally their services.
                    </p>
                    <div class="profile">
                        <p class="text-end">- John Doe <br> <span> Onitsha</span> </p>
                        <img src="images/white-offroader-jeep-parking.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <!-- ========== End FeedBack ========== -->

       <!-- ==========  Start Contact Us========== -->
<div class="section" id="contact">
    <div class="section-header">
        <h2>Contact Us</h2>
        <p>We love to hear from you</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 second">
                
            </div>
            <div class="col-sm-6 order-sm-first">
                <form action="POST">
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text"
                          class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email"
                            class="form-control form-control-sm" name="" id="" aria-describedby="helpId" placeholder="Enter your name">
                      </div>
                      <div class="form-group">
                        <label for="my-textarea">Message</label>
                        <textarea id="my-textarea" class="form-control" name="" 
                        placeholder="Leave us a message..."
                        rows="3"></textarea>
                      </div>
                      <div class="btn btn-success mt-3">Send</div>
            
            
                </form>
            </div>
        </div>
    </div>
</div>

      <!-- ==========  End Contact Us========== --> 
 
      <!-- Pre Foooter -->
<?php  include "section_component/footer_section.php" ; ?>
</html>