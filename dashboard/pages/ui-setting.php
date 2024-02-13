<?php




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
                        <h2>UI-setting</h2>
                    </div>
                    <div class="list">
                        <ul>
                            <li><a href="#background">background-setting</a></li>
                            <li><a href="#logo">logo</a></li>
                            <li><a href="#service-page">service-page</a></li>
                            <li><a href="#footer">footer</a></li>
                        </ul>
                    </div>

                    <div class="ui-element">
                        <!-- for background elements -->

                        <div class="items" id="background">
                            
                            <form action="" method="post">
                            

                                <div class="entry ui">
                                    <div class="picture ui">
                                        <img src="../../images/avater.jpg" alt="" id="pick" onclick="pics()">
                                        <label for="">current image</label>

                                    </div>
                                </div>
                                <div class="entry ui">
                                    <label for="">new_image*</label> <br>
                                    <input type="file" name="image" id="pict-file" onchange="loadimage(this)">
                                </div>
                                
                                <div class="entry">
                                    <label for="">password*</label><br>
                                    <input type="password" id="password" placeholder="Enter current password to save change" >
                                    <span id="eye" onclick="eyes()">
                                        <i class="fa fa-eye" id="show"></i> 
                                        <i class="fa fa-eye-slash" id="hide"></i>
                                    </span>
                                </div>
                            
                            <button type="submit">submit</button>
                            </form>
                        </div>

                        <!-- for logo -->

                        <div class="items" id="logo">
                            
                            <form action="" method="post">
                            

                                <div class="entry ui">
                                    <div class="picture ui">
                                        <img src="../../images/avater.jpg" alt="" id="pick" onclick="pics()">
                                        <label for="">current logo</label>

                                    </div>
                                </div>
                                <div class="entry ui">
                                    <label for="">new_logo*</label> <br>
                                    <input type="file" name="logo" id="pict-file" onchange="loadimage(this)">
                                </div>
                                
                                <div class="entry">
                                    <label for="">password*</label><br>
                                    <input type="password" id="password" placeholder="Enter current password to save change" >
                                    <span id="eye" onclick="eyes()">
                                        <i class="fa fa-eye" id="show"></i> 
                                        <i class="fa fa-eye-slash" id="hide"></i>
                                    </span>
                                </div>
                            
                            <button type="submit" name="submit_logo">submit</button>
                            </form>
                        </div>

                        <!-- for service section elements -->

                        <div class="items" id="service-page">
                            
                            <form action="" method="post">
                                
                                <div class="serve">
                                    <table>
                                        <tr>
                                            <th>services header</th>
                                            <th>services note</th>
                                            <th>services image</th>
                                        </tr>
                                        <tr>
                                            <td><textarea name="service_head" id="" cols="30" rows="10" placeholder="Belgium car"></textarea></td>
                                            <td><textarea name="service_note" id="" cols="30" rows="10"></textarea></td>
                                            <td>
                                                <div class="picture ui">
                                                    <img src="../../images/avater.jpg" alt="" id="pick" onclick="pics()">
                                                    <label for="">current logo</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                
                                <div class="entry">
                                    <label for="">password*</label><br>
                                    <input type="password" id="password" placeholder="Enter current password to save change" >
                                    <span id="eye" onclick="eyes()">
                                        <i class="fa fa-eye" id="show"></i> 
                                        <i class="fa fa-eye-slash" id="hide"></i>
                                    </span>
                                </div>
                            
                            <button type="submit" name="submit_logo">submit</button>
                            </form>
                        </div>

                        <!-- for footer element -->

                        <div class="items" id="footer">
                            
                            <form action="" method="post">
                                
                                <div class="serve">
                                    <table>
                                        <tr>
                                            <th>quick note</th>
                                            <th>terms and conditions</th>
                                            <th>social links</th>
                                        </tr>
                                        <tr>
                                            <td><textarea name="service_head" id="" cols="30" rows="10" placeholder="Belgium car"></textarea></td>
                                            <td><textarea name="service_note" id="" cols="30" rows="10"></textarea></td>
                                            <td>
                                                <input type="text" placeholder="whatsapp">
                                                <input type="text" placeholder="facebook">
                                                <input type="text" placeholder="instagram">
                                                <input type="text" placeholder="twitter">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                
                                <div class="entry">
                                    <label for="">password*</label><br>
                                    <input type="password" id="password" placeholder="Enter current password to save change" >
                                    <span id="eye" onclick="eyes()">
                                        <i class="fa fa-eye" id="show"></i> 
                                        <i class="fa fa-eye-slash" id="hide"></i>
                                    </span>
                                </div>
                            
                            <button type="submit" name="submit_logo">submit</button>
                            </form>
                        </div>
                    </div>

                       

                </div>
            </div>
        </div>
    </div>

    

    <!-- footer -->
    <?php  include "../dashbord_component/footer.php" ; ?>
   





    <!-- using image avater to upload image  -->    
    <script> 
        function pics() {
        
            document.querySelector('#pict-file').click();
        }
        function loadimage(e){
    
            if(e.files[0]){
    
                var filereader = new FileReader();
    
                filereader.onload = function(e){
    
                    document.querySelector('#pick').setAttribute('src', e.target.result );
                }
                filereader.readAsDataURL(e.files[0]) ;
            }
        }

        </script>

        <!-- for password eye -->

        <script>
            function eyes(){
                password = document.getElementById ("password");
                hide =document.getElementById ("hide");
                eye =document.getElementById ("show");

                if (password.type ==="password") {
                    password.type= "text";
                    hide.style.display="block";
                    eye.style.display="none";
                }else {
                    password.type="password";
                    hide.style.display="none";
                    eye.style.display="block";
                }
            }
        </script>
</body>
</html>