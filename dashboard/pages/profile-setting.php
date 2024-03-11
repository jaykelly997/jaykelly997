
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
                        <h2>profile setting</h2>
                    </div>
                    <div class="items">
                        
                        <form action="" method="post">
                            
                            <div class="add">
                                <a href="">add new admin  <i class="fa fa-add"></i></a>
                            </div>

                            <div class="entry">
                                <div class="picture">
                                    <img src="../../images/avater.jpg" alt="" id="pick" onclick="pics()">
                                </div>
                            </div>
                            <div class="entry">
                                <label for="">name*</label><br>
                                <input type="text" id="" value="">
                            </div>
                            <div class="entry">
                                <label for="">user*</label> <br>
                                <input type="text">
                            </div>
                            <div class="entry">
                                <label for="">image*</label> <br>
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
                    <div class="items admin-new" id="admin-new">
                        
                        <form action="" method="post">
                            
                            <div class="add">
                                <a href="">add new admin  <i class="fa fa-add"></i></a>
                            </div>

                            <div class="entry">
                                <div class="picture">
                                    <img src="../../images/avater.jpg" alt="" id="pick" onclick="pics()">
                                </div>
                            </div>
                            <div class="entry">
                                <label for="">name*</label><br>
                                <input type="text" id="" value="">
                            </div>
                            <div class="entry">
                                <label for="">user*</label> <br>
                                <input type="text">
                            </div>
                            <div class="entry">
                                <label for="">admin category*</label> <br>
                                <select name="admin category" id="">
                                    <option value="normal">normal</option>
                                    <option value="super">super-admin</option>
                                </select>
                            </div>
                            
                            <div class="entry">
                                <label for="">image*</label> <br>
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
                        
                        <button type="new_admin_submit">proceed</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- footer -->
   
    <?php  include "../dashbord_component/footer.php" ; ?>




    <!-- toggle add admin -->
    <script src='../../js/jquery.js'></script>
     <script> 
         $(document).ready(function() {
             
             $('.add').click(function() {
                 $('.admin-new').toggleClass('active')
 
             })
 
         })
 
     </script>

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