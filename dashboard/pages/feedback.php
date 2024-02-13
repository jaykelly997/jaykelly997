

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
                        <h2>feedbacks</h2>
                    </div>
                    
                    <div class="element feedback">
                                
                        <table>
                            <tr>
                                <th>s/n</th>
                                <th>name</th>
                                <th>email</th>
                                <th>location</th>
                                <th>message</th>
                                <th>action</th>
                                
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>tochukwu kalu</td>
                                <td>tochukwu@gmail.com</td>
                                <td>Lagos</td>
                                <td>i need Belgium Benz jeep GLK 350</td>
                                <td><a class="delete" href="">delete</a></td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

   

    <!-- footer -->
    <?php  include "../dashbord_component/footer.php" ; ?>
    

</body>
</html>