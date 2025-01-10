<div class="section" id="vehicle__alert">
    <div class="section-header">
        <h2>Vehicle Alert</h2>
        <p>Available vehicle for sale >>></p>
    </div>
    <div class="container pt-5">
        <?php
            $list = "SELECT id, product_name, product_price, product_brand_key, product_location, product_brand, product_model, product_category, product_quantity, product_image FROM emmako_brands LIMIT 8" ;
            $list1 = mysqli_query($me, $list);
            

        ?>
        <div class="row">
          <?php while ($list2 = mysqli_fetch_assoc ($list1)){   ?>

            <div class="col-lg-3 col-sm-6 mb-2 box">
                <a href="selling_page.php?sell=<?php echo $list2['id'] ?>">
                    <img src="images/<?php echo $list2['product_image']  ?>" alt="" class="img-fluid"/>
                    <div class="overview">
                        <h1 class="overview-header"><?php echo $list2['product_name']    ?></h1>
                        <div class="overview-text">
                            <p class=""> <i class="fas fa-map-marker-alt"></i> <?php echo $list2['product_location']   ?></p>
                            <p>&#8358;<?php echo $list2['product_price']  ?></p>
                        </div>
                    </div>
                </a>
            </div>
            
            <?php  } ?>

            <!-- <div class="col-lg-3 col-sm-6 mb-2 box">
                
                <a href="selling_page.php">
                    <img src="../images/white-offroader-jeep-parking.jpg" alt="" class="img-fluid"/>
                    <div class="overview">
                        <h1 class="overview-header">Honda</h1>
                        <div class="overview-text">
                            <p class=""> <i class="fas fa-map-marker-alt"></i> Onitsha</p>
                            <p>&#8358;700,000</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 mb-2 box">
                <a href="selling_page.php">
                    <img src="../images/white-offroader-jeep-parking.jpg" alt="" class="img-fluid"/>
                    <div class="overview">
                        <h1 class="overview-header">Honda</h1>
                        <div class="overview-text">
                            <p class=""> <i class="fas fa-map-marker-alt"></i> Onitsha</p>
                            <p>&#8358;700,000</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 mb-2 box">
                <a href="selling_page.php">
                    <img src="../images/white-offroader-jeep-parking.jpg" alt="" class="img-fluid"/>
                    <div class="overview">
                        <h1 class="overview-header">Honda</h1>
                        <div class="overview-text">
                            <p class=""> <i class="fas fa-map-marker-alt"></i> Onitsha</p>
                            <p>&#8358;700,000</p>
                        </div>
                    </div>
                </a>
            </div> -->
            
        </div>
    </div>
</div>
