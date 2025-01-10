<?php

include "db.php";

if(isset($_GET['link'])){
    $category = $_GET['link'];

}

$feel ="SELECT* FROM emmako_brands limit 4 ";
$felt =mysqli_query ($me, $feel);
$folk =mysqli_fetch_array($felt);



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
    <div class="container p-4 border-1 bg-secondary " style="border-radius: 20px;" >
        <div class="row" >
            <div class="col-sm-2 ">
                <div class="side p-3">
                    <a class="defBtn active" href="service-selling.php?link=<?php echo 'Belgium'  ?>">Belgium</a>
                    <a class="defBtn" href="service-selling.php?link=<?php echo 'Fairly used'  ?>">Fairly used</a>
                    <a class="defBtn" href="service-selling.php?link=<?php echo 'Scrap'  ?>">Scrapped Cars</a>
                </div>
            </div>
            <div class="col-sm-8 offset-sm-1">
                <div class="right">
                <h4 class="p-2">View <?php if(!empty($category)){ echo $category ; }  ?> Cars</h4>
                    <div class="d-flex flex-wrap">
                        
                    <?php
                        if (!empty($category)){
                            $feel ="SELECT* FROM emmako_brands WHERE product_category='$category' limit 4 ";
                            $felt =mysqli_query ($me, $feel);
                            $folk =mysqli_fetch_array($felt);
                        
                    ?>
                    
            <?php while($folk= mysqli_fetch_assoc($felt)){ ?>

                        <a href="selling_page.php?sell=<?php echo $folk['id'] ?>">
                            <div class="product-details">
                                <img src="images/<?php echo $folk['product_image']  ?>" alt="">
                                <h5><?php echo $folk['product_name']  ?> </h5>
                                <p><?php echo $folk['product_location']  ?></p>
                                <b><?php echo $folk['product_price']  ?></b>
                            </div>
                        </a>


                        <?php  }  } else {
                            
                            $feel ="SELECT* FROM emmako_brands limit 4 ";
                            $felt =mysqli_query ($me, $feel);
                            $folk =mysqli_fetch_array($felt);
                        }
                            ?>
                            <?php while($folk= mysqli_fetch_assoc($felt)){ ?>

                        <a href="selling_page.php?sell=<?php echo $folk['id'] ?>">
                            <div class="product-details">
                                <img src="images/<?php echo $folk['product_image']  ?>" alt="">
                                <h5><?php echo $folk['product_name']  ?> </h5>
                                <p><?php echo $folk['product_location']  ?></p>
                                <b><?php echo $folk['product_price']  ?></b>
                            </div>
                        </a>


                        <?php  } ; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
      <!-- ========== End Vehicle__Alert ========== -->
<?php include "section_component/vehicle_alert.php"; ?>
  <!-- ========== End Service ========== -->

  </body>

  
      <!-- Pre Foooter -->

<?php  include "section_component/footer_section.php" ; ?>