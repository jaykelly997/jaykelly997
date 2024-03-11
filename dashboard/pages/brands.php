    <?php

    include "../../db.php";

    $error_message = "";


if(isset($_GET['mercedez'])){
    $brand=mysqli_real_escape_string($me, $POST['mercedez']);

    $list ="SELECT* FROM emmako_brand where $brand = 'product_brands' ";
    $list1 = mysqli_query($me, $list);
}

elseif(isset($_POST['toyota'])){
    $brand=mysqli_real_escape_string($me, $POST['toyota']);

    $list ="SELECT* FROM emmako_brand where $brand = 'product_brand' ";
    $list1 = mysqli_query($me, $list);
}

elseif(isset($_POST['nissan'])){
    $brand=mysqli_real_escape_string($me, $POST['nissan']);

    $list ="SELECT* FROM emmako_brand where $brand = 'product_brands' ";
    $list1 = mysqli_query($me, $list);
}

elseif(isset($_GET['ford'])){
    $brand=mysqli_real_escape_string($me, $POST['ford']);

    $list ="SELECT* FROM emmako_brand where $brand = 'product_brands' ";
    $list1 = mysqli_query($me, $list);
}

elseif(isset($_GET['mazda'])){
    $brand=mysqli_real_escape_string($me, $POST['mazda']);

    $list ="SELECT* FROM emmako_brand where $brand = 'product_brands' ";
    $list1 = mysqli_query($me, $list);
}

elseif(isset($_GET['volks'])){
    $brand=mysqli_real_escape_string($me, $POST['volks']);

    $list ="SELECT* FROM emmako_brand where $brand = 'product_brands' ";
    $list1 = mysqli_query($me, $list);
}

elseif(isset($_GET['audi'])){
    $brand=mysqli_real_escape_string($me, $POST['audi']);

    $list ="SELECT* FROM emmako_brand where $brand = 'product_brands' ";
    $list1 = mysqli_query($me, $list);
}

elseif(isset($_GET['chevrolet'])){
    $brand=mysqli_real_escape_string($me, $POST['chevrolet']);

    $list ="SELECT* FROM emmako_brand where $brand = 'product_brands' ";
    $list1 = mysqli_query($me, $list);
}
else{
    $list = "SELECT* FROM emmako_brands " ;
    $list1 = mysqli_query($me, $list);
    $list2 =mysqli_fetch_array($list1);
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
                        <h2>our brands</h2>
                        
                        <p class="error_message">
                            <?php   if(!empty ($error_message)) {echo "$error_message" ; }     ?> 
                        </p>
                    </div>
                    <div class="brands">
                        <div class="brand">
                             <ul>
                                <li><a href="local.php?mercedez=<?php echo $list2['product_brand'] ; ?>">mercedez <i class="fa fa-angle-right"></i></a></li>
                                <li><a href="">toyota <i class="fa fa-angle-right"></i></a></li>
                                <li><a href="">nissan <i class="fa fa-angle-right"></i></a></li>
                                <li><a href="">ford <i class="fa fa-angle-right"></i></a></li>
                                <li><a href="">mazda <i class="fa fa-angle-right"></i></a></li>
                                <li><a href="">volks-wagon <i class="fa fa-angle-right"></i></a></li>
                                <li><a href="">audi <i class="fa fa-angle-right"></i></a></li>
                                <li><a href="">chevrolet <i class="fa fa-angle-right"></i></a></li>
                             </ul>
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
                <div class="heading">
                    <div class="tree">
                        <h3>vehicle brands</h3> <span> >> 

                        
    <?php

$shows = $_GET["value"];
$sole =mysqli_real_escape_string($me, $shows);
$pick = "SELECT Product_brand FROM emmako_brands WHERE product_brand = 'brands'" ;
$pickup = mysqli_query($me, $pick);


?>
                            <select value="" name="category" id="">
                                <option value="toyota">toyota</option> 
                                <option value="mercedez">mercedez</option> 
                                <option value="nissan">nissan</option> 
                                <option value="volks-wagon">volks-wagon</option> 
                                <option value="audi">audi</option> 
                                <option value="mazda">mazda</option>
                        </select>
                    </div>
                    
                    <div class="add" >
                        <div class="come">
                            <input type="text" name="search" id="" placeholder= "search"><i class="fa fa-search"></i>
                        </div>
                        <span class="adds">add <i class="fa fa-add"></i></span>
                    </div>
                </div>

                <table>
                    <tr>
                        <th>s/n</th>
                        <th>product name</th>
                        <th>model</th>
                        <th>price</th>
                        <th>image</th>
                        <th>location</th>
                        <th>quantity</th>
                        <th>vehicle category</th>
                        <th>status</th>
                        <th>action</th>
                    </tr>
                    <tr>
                        

<?php  while ($list2 = mysqli_fetch_array ($list1)){  ?>
                        <td><?php  echo "++" ; ?></td>
                        <td><?php  echo $list2['product_name']  ; ?></td>
                        <td><?php  echo $list2['product_model']  ; ?></td>
                        <td><?php  echo $list2['product_price']  ; ?></td>
                        <td><img src="../../images/<?php  echo $list2['product_image']  ; ?>" alt="bigdady"></td>
                        <td><?php  echo $list2['product_location']  ; ?></td>
                        <td><?php  echo $list2['product_quantity']  ; ?></td>
                        <td><?php  echo $list2['product_category']  ; ?></td>
                        <td><?php  if ($list2['product_quantity'] > 0){ echo "Available" ;} else { echo "Unavailable";}   ?></td>
                        <td> <div class="act"><a class="edit" href="local.php?edit=<?php echo $list2['id']  ?>">edit</a> <a class="delete" href="local.php?delete=<?php echo $list2['id']  ?>">delete</a></div></td>
                        <!-- <td>1</td>
                        <td>Toyota big daddy</td>
                        <td>2010 classic</td>
                        <td>1,200,000</td>
                        <td><img src="../../images/acura-logo.png" alt="bigdady"></td>
                        <td>Lagos</td>
                        <td>2</td>
                        <td>Belgium</td>
                        <td>Available</td>
                        <td> <div class="act"><a class="edit" href="">edit</a> <a class="delete" href="">delete</a></div></td> -->
                    </tr>
<?php }   ?>
                </table>
            </div>
        </div>
    </div>

    <!-- footer -->


    <?php  include "../dashbord_component/footer.php" ; ?>


    <!-- product addition pop-up -->
    <?php  include "../dashbord_component/product-addition-pop-up.php" ; ?>


    



  

<!-- for active class for sidebar -->

<script>
    $(document).ready(function (){
        $(".one").click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        });
    });
</script>

<script>

    // for pop up (product addition)

        addBtn = document.querySelector('.adds');
        pop = document.querySelector('.pop');
        cancel = document.querySelector('#cancel');
        

        addBtn.onclick = function() {
            pop.classList.toggle('active');
            
        }

        cancel.onclick = function() {
                addBtn.classList.remove('active');
                pop.classList.remove('active');
        }
    </script>


</body>
</html>