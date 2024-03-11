<?php
include "../../db.php";

$error_message = "";

    $list = "SELECT* FROM emmako_brands " ;
    $list1 = mysqli_query($me, $list);
    $list2 =mysqli_fetch_array($list1);

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
                            <li><a href="">belgium cars <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="">fairly used cars <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="">scrap cars <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="">recent transactions <i class="fa fa-angle-right"></i></a></li>
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
                    <h3>recent transactions</h3>
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
<?php  while ($list2 = mysqli_fetch_array ($list1)){  ?>

                        <td>1</td>
                        <td>tochukwu kalu</td>
                        <td>toyota big daddy</td>
                        <td>belgium car</td>
                        <td><img src="" alt="bigdady"></td>
                        <td>2,300,000</td>
                        <td>28-01-2024</td>
                        <td>emmako1111</td>
                        <td>complete</td>
                    </tr>
<?php  }  ?>
                </table>
            </div>
        </div>
    </div>

    
    <!-- footer -->

    <?php include "../dashbord_component/footer.php" ;  ?>

    