<?php
include "../../db.php";

$error_message = "";

    $no= 1;

    $list = "SELECT* FROM emmako_brands " ;
    $list1 = mysqli_query($me, $list);
    $list2 =mysqli_fetch_array($list1);

   
    
    if(isset($_GET['belgium'])){
        $product_category_order = $_GET['belgium'] ;
        

    $list= "SELECT product_name, product_price, product_brand_key, product_category, time, product_location, product_brand, product_quantity, product_image FROM emmako_brands WHERE product_category = '$product_category_order' ";
    $list1= mysqli_query ($me, $list);
    
    }


// for fairly used vehicles
    if(isset($_GET['fairly_used'])){
        $product_category_orders = $_GET['fairly_used'] ;
        

    $list= "SELECT product_name, product_price, product_brand_key, product_category, time, product_location, product_brand, product_quantity, product_image FROM emmako_brands WHERE product_category = '$product_category_orders' ";
    $list1= mysqli_query ($me, $list);
    
    }

// for scrapped vehicles
    if(isset($_GET['scrapped'])){
        $product_category_orders = $_GET['scrapped'] ;
        

    $list= "SELECT product_name, product_price, product_brand_key, product_category, time, product_location, product_brand, product_quantity, product_image FROM emmako_brands WHERE product_category = '$product_category_orders' ";
    $list1= mysqli_query ($me, $list);
    
    }


// for recent transaction
    if(isset($_GET['recent'])){
        $product_category_order = $_GET['recent'] ;
        

    $list= "SELECT product_name, product_price, product_brand_key, product_category, time, product_location, product_brand, product_quantity, product_image FROM emmako_brands WHERE product_category = '$product_category_order' ";
    $list1= mysqli_query ($me, $list);
    
    }
    $me -> close();



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
                    <div class="heading">
                        <h2>our service</h2>
                    </div>
                    <div class="items">
                        <ul>
                            <li><a href="dashboardhome.php?belgium=<?php echo "belgium" ?>">belgium cars <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="dashboardhome.php?fairly_used=<?php  echo "fairly used"  ?>">fairly used cars <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="dashboardhome.php?scrapped=<?php echo "Scrap" ?>">scrap cars <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="dashboardhome.php?recent=<?php echo $list2['product_category'] ?>">recent transactions <i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- overall -->
    <div class="full-content">
        <div class="container">
            <div class="element">
                <div class="heading">
                    <h3><?php echo $list2['product_category'] ?></h3>
                    <div class="come">
                        <input type="text" name="search" id="" placeholder= "search"><i class="fa fa-search"></i>
                    </div>
                </div>

                <table>
                    <tr>
                        <th>s/n</th>
                        <th>customer name</th>
                        <th>product name</th>
                        <th>item category</th>
                        <th>image</th>
                        <th>price</th>
                        <th>date</th>
                        <th>trans ID</th>
                        <th>trans status</th>
                    </tr>
                    <tr>
<?php  while ($list2 = mysqli_fetch_assoc ($list1)){  ?>

                        <td><?php  echo "$no" ; ?></td>
                        <td><?php  echo $list2['product_name']  ; ?></td>
                        <td><?php  echo $list2['product_name']  ; ?></td>
                        <td><?php  echo $list2['product_category']  ; ?></td>
                        <td><img src="../../images/<?php  echo $list2['product_image']  ; ?>" alt="bigdady"></td>
                        <td><?php  echo $list2['product_price']  ; ?></td>
                        <td><?php echo $list2['time']  ?></td>
                        <td>emmako1111</td>
                        <td>complete</td>
                    </tr>
<?php $no ++; }  ?>
                </table>
            </div>
        </div>
    </div>

    
    <!-- footer -->

    <?php include "../dashbord_component/footer.php" ;  ?>

    