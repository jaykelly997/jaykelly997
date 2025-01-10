<?php

include "db.php";

$feel ="SELECT* FROM emmako_brands LIMIT 9";
$felt =mysqli_query ($me, $feel);
$folk= mysqli_fetch_array($felt);

?>

<!-- Navbar starts -->

<?php   include "section_component/top_section.php";        ?>
<!-- ========== End Navbar ========== -->


  <!-- ========== Start Brand ========== -->

    <div class="section" id="brand">
        <div class="section-header">
            <h2>Our Brands</h2>
            <p>What we do, and how we can help you</p>
        </div>
        <div class="brand-container">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <select name="brands" id="">
                        <option value="mercedez">mercedez</option>
                        <option value="nissan">nissan</option>
                        <option value="toyota">toyota</option>
                        <option value="mazda">mazda</option>
                        <option value="ford">ford</option>
                        <option value="honda">honda</option>
                        <option value="volks-wagon">volks-wagon</option>
                    </select>
                </div>
                <div class="come">
                    <input type="text" name="search" id="live_search" placeholder="search" autocomplete="off"><i class="fa fa-search"></i>
                </div>
            </nav>
            <div class="tab-content " id="nav-tabContent">
                <div class="tab-pane fade show active " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <!-- content-1-start-->
                        <!-- <div class="box" >
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
                    </a>
                    <div class="box" >
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
                    <div class="box" >
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
                    <div class="box" >
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
                    <div class="box" >
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
                    <!-- content-1-end-->
                    <?php while($folk = mysqli_fetch_array($felt)) {    ?>
                        <div class="box" >
                        <a href="selling_page.php?sell=<?php echo $folk['id'] ?>">
                            <img src="images/<?php echo $folk['product_image'] ; ?>" alt="" class="img-fluid"/>
                            <div class="overview">
                                <h5 class="overview-header"><?php  echo $folk['product_name']  ?> </h5>
                                <div class="overview-text">
                                    <p class=""> <i class="fas fa-map-marker-alt"></i> <?php  echo $folk['product_location']  ?> </p>
                                    <p>&#8358;<?php echo $folk['product_price']  ?></p>
                                </div>
                            </div>
                        </a>
                    </div>

                        <?php } ?>
                </div>
               
            </div>
        </div>    
    </div> 

  
<div class="section" id="brands">
    
<?php  include "section_component/brands_collection.php" ; ?>

  <!-- ========== End Brand ========== -->

    <!-- footer section -->
      <?php  include "section_component/footer_section.php" ; ?>

    <!-- ajax for searching  -->

    <script src="../js/jquery.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

           $("#live_search").keyup(function(){

                var input = $(this).val();
                // alert(input);

                if(input != ""){
                    $.ajax({
                        url: "search.php",
                        method: "POST",
                        data: {input:input},
                        
                        success:function(data){
                            $("#searchresult").html(data);
                            $("#searchresult").css("display","block");

                        }
                    });
                }
                
                // else {
                //     $("#searchresult").css("display", "none");
                // }
           }); 
        });
    </script>
