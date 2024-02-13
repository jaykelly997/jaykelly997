    
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
                    </div>
                    <div class="brands">
                        <div class="brand">
                             <ul>
                                <a href=""><li>mercerdez <i class="fa fa-angle-right"></i></li></a>
                                <a href=""><li>toyota <i class="fa fa-angle-right"></i></li></a>
                                <a href=""><li>nissan <i class="fa fa-angle-right"></i></li></a>
                                <a href=""><li>ford <i class="fa fa-angle-right"></i></li></a>
                                <a href=""><li>mazda <i class="fa fa-angle-right"></i></li></a>
                                <a href=""><li>volks-wagon <i class="fa fa-angle-right"></i></li></a>
                                <a href=""><li>audi <i class="fa fa-angle-right"></i></li></a>
                                <a href=""><li>chevrolet <i class="fa fa-angle-right"></i></li></a>
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
                            <select name="category" id="">
                                <option value="toyota">toyota</option> 
                                <option value="mercedez">mercedez</option> 
                                <option value="nissan">nissan</option> 
                                <option value="volks-wagon">volks-wagon</option> 
                                <option value="audi">audi</option> 
                                <option value="mazda">mazda</option>
                        </select>
                    </div>
                    <div class="add">
                        <span>add <i class="fa fa-add"></i></span>
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
                        <td>1</td>
                        <td>Toyota big daddy</td>
                        <td>2010 classic</td>
                        <td>1,200,000</td>
                        <td><img src="" alt="bigdady"></td>
                        <td>Lagos</td>
                        <td>2</td>
                        <td>Belgium</td>
                        <td>Available</td>
                        <td> <div class="act"><input type="button" value="edit" class="addme"> <a class="delete" href="">delete</a></div></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <!-- footer -->


    <?php  include "../dashbord_component/footer.php" ; ?>


    <!-- product addition pop-up -->
    <?php  include "../dashbord_component/product-addition-pop-up.php" ; ?>


    



    <script>
        addBtn = document.querySelector('.add');
        pop = document.querySelector('.pop');
        cancel = document.querySelector('#cancel');
        

        addBtn.onclick = function() {
            pop.classList.toggle('active');
            
        }
    </script>


<!-- for active class for sidebar -->

<script>
    $(document).ready(function (){
        $(".one").click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        });
    });
</script>


</body>
</html>