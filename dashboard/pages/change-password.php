

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
                        <h2>change password</h2>
                    </div>
                    <div class="items">
                        <form action="" method="post">
                            
                            <div class="entry">
                                <label for="">old password*</label><br>
                                <input type="password" id="password" >
                                
                            </div>
                            <div class="entry">
                                <label for="">new password*</label> <br>
                                <input type="password" id="password" >
                            </div>
                            <div class="entry">
                                <label for="">confirm new password*</label> <br>
                                <input type="password" id="password" >
                            </div>
                            <div class="show-me">
                                <input type="checkbox" name="" id="see" onchange="show(this)">
                                <label for="">show password</label>
                            </div>
                        
                        <button type="submit">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- footer -->
    <?php  include "../dashbord_component/footer.php" ; ?>
   


      <!-- for password eye -->
      
      <script>
        function show(el){
            $('input').attr('type' ,el.checked ? 'text' : 'password');
        }
    </script>

    



</body>
</html>