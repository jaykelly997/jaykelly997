<?php

SESSION_START();

include "../../db.php";

$no = 1 ;
$service_name ="";
$service_description="";
$service_image="";
$error_message ="";
 

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
                        <h2>services page</h2>
                        <p class="error_message">
                            <?php   if(!empty ($error_message)) {echo "$error_message" ; }     ?> 
                        </p>
                    </div>
                    <div class="items" id="service-page">
                            
                            <form action="" method="post" enctype="multipart/form-data">
                                <?php
                                $service= "SELECT* FROM emmako_services ";
                                $show = mysqli_query($me, $service);
                                

                                ?>
                                <div class="serve">
                                    <p class="error_message">
                                        <?php   if(!empty ($error_message)) {echo "$error_message" ; }     ?> 
                                    </p>
                                    <table>
                                        <tr>
                                            <th>S/N</th>
                                            <th>service header</th>
                                            <th>service description</th>
                                            <th>service image</th>
                                            <th>action</th>
                                        </tr>
                                        <?php while($shows =mysqli_fetch_array($show)){ ; ?>
                                        
                                        <tr>
                                            <td><?php  echo $no   ?></td>
                                            <td><h3 style="text-transform:capitalize;"><?php  echo $shows['services_name'] ; ?></h3></td>
                                            <td><?php  echo $shows['services_description'] ; ?></td>
                                            <td>
                                                <div class="picture ui">
                                                    <img src="../../images/<?php echo $shows['services_image'] ; ?>" alt="" id="fair" onclick="photo()">
                                                </div>
                                            </td>
                                            <td id="pull"><a href="../dashbord_component/edit-service.php?edit=<?php echo $shows['id'] ; ?>">edit</a></td>
                                        </tr>
                                        
                                            <?php $no ++; } ?>
                                        </tr>
                                    </table>
                                </div>
                                
                            </form>
                            <p class="adds">
                                add more service
                            </p>
                            
    <!-- service addition pop-up -->
    <?php  include "../dashbord_component/service-addition.php" ; ?>

                        </div>
                    </div>
            </div>
        </div>
    <!-- footer -->
   
    <?php  include "../dashbord_component/footer.php" ; ?>


    <!-- using image avater to upload image in profile setting  -->    
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

        
    <!-- for toggle -->

     <!-- <script src='../../js/jquery.js'></script>
     <script> 
         $(document).ready(function() {
             
             $('#pull').click(function() {
                 $('.hidden').toggle('1000')
                
             })

         })
 
     </script> -->


<!-- for add admin page. image avater  -->    
<script> 
        function adminpics() {
        
            document.querySelector('#admin-photo').click();
        }
        function adminphoto(e){
    
            if(e.files[0]){
    
                var filereader = new FileReader();
    
                filereader.onload = function(e){
    
                    document.querySelector('#view').setAttribute('src', e.target.result );
                }
                filereader.readAsDataURL(e.files[0]) ;
            }
        }

        </script>


</body>
</html>