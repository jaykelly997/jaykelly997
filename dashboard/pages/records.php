

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
                                    <li><a href="">all</a></li>
                                    <li><a href="">sold</a></li>
                                    <li><a href="">bought</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="selectt">
                            <div class="me">
                                <h4>fairly used car</h4>
                            </div>
                            <div class="them">
                                <ul>
                                    <li><a href="">all</a></li>
                                    <li><a href="">sold</a></li>
                                    <li><a href="">bought</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="selectt">
                            <div class="me">
                                <h4>scrap car</h4>
                            </div>
                            <div class="them">
                                <ul>
                                    <li><a href="">all</a></li>
                                    <li><a href="">sold</a></li>
                                    <li><a href="">bought</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="selectt">
                            <div class="me">
                                <h4>pending transaction</h4>
                            </div>
                            <div class="them">
                                <ul>
                                    <li><a href="">all</a></li>
                                    <li><a href="">sold</a></li>
                                    <li><a href="">bought</a></li>
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
                        <td>1</td>
                        <td>tochukwu kalu</td>
                        <td>toyota big daddy</td>
                        <td>belgium car</td>
                        <td><img src="" alt="bigdady"></td>
                        <td>2,300,000</td>
                        <td>28-01-2024</td>
                        <td>emmako1111</td>
                        <td>complete</td>
                        <td> <div class="act"><a class="edit" href="">Edit</a> <a class="delete" href="">delete</a></div></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <!-- footer -->

    <?php  include "../dashbord_component/footer.php" ; ?>
