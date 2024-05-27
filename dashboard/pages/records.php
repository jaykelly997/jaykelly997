<?php
include "../../db.php";
$no = 1 ;

$error_message = "";

    $list = "SELECT id, product_name, product_price, product_brand_key, product_location, product_brand, product_model, product_category,time, product_quantity, product_image FROM emmako_brands " ;
    $list1 = mysqli_query($me, $list);

    $flood= "SELECT id, product_name, product_price, product_brand_key, product_location, product_brand, product_model, product_category,time, product_quantity, product_image FROM sold_belgium_vehicles " ;
    $floor = mysqli_query($me, $flood);

    // fetching for belgium vehicles sold and bought respectively 
    if(isset($_GET['sold'])) {
        $category = $_GET['sold'] ;
    
        $list = "SELECT* FROM emmako_users WHERE product_category= '$category'" ;
        $list1 = mysqli_query($me, $list);
    }

    if(isset($_GET['bought'])) {
        $category = $_GET['bought'] ;
    
        $list = "SELECT id, product_name, product_price, product_brand_key, product_location, product_brand, product_model, product_category,time, product_quantity, product_image FROM emmako_brands WHERE product_category= '$category'" ;
        $list1 = mysqli_query($me, $list);
    }


    // fetching data for fairly used vehicles sold and boughr respectively
    if(isset($_GET['sold'])) {
        $category = $_GET['sold'] ;
    
        $list = "SELECT id, product_name, product_price, product_brand_key, product_location, product_brand, product_model, product_category,time, product_quantity, product_image FROM sold_fairly_used_vehicles WHERE product_category= '$category'" ;
        $list1 = mysqli_query($me, $list);
    }

    if(isset($_GET['bought'])) {
        $category = $_GET['bought'] ;
    
        $list = "SELECT id, product_name, product_price, product_brand_key, product_location, product_brand, product_model, product_category,time, product_quantity, product_image FROM emmako_brands WHERE product_category= '$category'" ;
        $list1 = mysqli_query($me, $list);
    }

// fetching data for scrap vehicles sold and bought respectively
    if(isset($_GET['sold'])) {
        $category = $_GET['sold'] ;
    
        $list = "SELECT id, product_name, product_price, product_brand_key, product_location, product_brand, product_model, product_category,time, product_quantity, product_image FROM emmako_brands WHERE product_category= '$category'" ;
        $list1 = mysqli_query($me, $list);
    }

    if(isset($_GET['sold'])) {
        $category = $_GET['sold'] ;
    
        $list = "SELECT id, product_name, product_price, product_brand_key, product_location, product_brand, product_model, product_category,time, product_quantity, product_image FROM emmako_brands WHERE product_category= '$category'" ;
        $list1 = mysqli_query($me, $list);
    }



    // for deleting data from the displayed list
    if(isset($_GET['delete'])){
        $id = $_GET['delete'] ;

        echo "<script>alert('Product deleted')</script>" ;

        // $input= "DELETE FROM emmako_brands WHERE id = '$id' ";
        // $input1= mysqli_query ($me, $input);
        // if($input1) {
        //     echo "<script>alert('Product deleted')</script>" ;

        // }else {

        //     $message= "fail to delete";

        // }

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
                    <div class="heading">
                        <h2>records</h2>
                    </div>
                    <div class="items">
                        <div class="selectt">
                            <div class="me">
                                <h4>belgium car</h4>
                            </div>
                            <div class="them">
                                <ul>
                                    <li><a href="records.php?sold=<?php echo "belgium"  ?>">sold</a></li>
                                    <li><a href="records.php?bought=<?php echo "belgium"  ?>">bought</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="selectt">
                            <div class="me">
                                <h4>fairly used car</h4>
                            </div>
                            <div class="them">
                                <ul>
                                    <li><a href="records.php?sold=<?php echo "fairly used"  ?>">sold</a></li>
                                    <li><a href="records.php?bought=<?php echo "fairly used"  ?>">bought</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="selectt">
                            <div class="me">
                                <h4>scrap car</h4>
                            </div>
                            <div class="them">
                                <ul>
                                    <li><a href="records.php?sold=<?php echo "scrap"  ?>">sold</a></li>
                                    <li><a href="records.php?bought=<?php echo "scrap"  ?>">bought</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="selectt">
                            <div class="me">
                                <h4>pending transaction</h4>
                            </div>
                            <div class="them">
                                <ul>
                                    <li><a href="records.php">sold</a></li>
                                    <li><a href="records.php">bought</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- overall -->
    <div class="full-content">
        <div class="container">
            <div class="element">
<?php





?>
                <div class="heading">
                    <div class="tree">
                        <h3>records</h3> <span> >> </span> 
                        <select name="category" id="">
                            <option value="">belgium</option> 
                            <option value="fairly used">fairly_used</option> 
                            <option value="scrap">scrap</option>
                        </select> 
                        
                        <span> >> </span> 
                        
                        <select name="" id=""> 
                            <option value="">all</option> 
                            <option value="">sold</option>
                            <option value="">bought</option>
                        </select>
                    </div>
                    <div class="add">
                        <div class="come">
                            <input type="text" name="search" id="" placeholder= "search"><i class="fa fa-search"></i>
                        </div>
                        <span>add <i class="fa fa-add"></i></span>
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
                        <th>action</th>
                    </tr>
                    <tr>
<?php  while ($list2 = mysqli_fetch_array($list1)){  ?>

                        <td><?php echo $no  ?></td>
                        <td>tochukwu kalu</td>
                        <td><?php echo $list2['product_name']  ?></td>
                        <td><?php echo $list2['product_category']  ?></td>
                        <td><img src="../../images/<?php echo $list2['product_image'] ?>" alt="bigdady"></td>
                        <td><?php echo $list2['product_price'] ?></td>
                        <td><?php echo $list2['time']  ?></td>
                        <td>emmako1111</td>
                        <td>complete</td>
                        <td> <div class="act"><a class="edit" href="edit-product.php?edit=<?php echo $list2['id']  ?>">Edit</a> <a class="delete" href="records.php?delete=<?php  echo $list2['id']  ?>">delete</a></div></td>
                    </tr>
<?php $no++ ;  }  ?>
                </table>
            </div>
        </div>
    </div>

    <!-- footer -->

    <?php  include "../dashbord_component/footer.php" ; ?>
