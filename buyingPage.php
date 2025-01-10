<?php

include "db.php";

$feel ="SELECT* FROM emmako_users ";
$felt =mysqli_query ($me, $feel);
$folk= mysqli_fetch_array($felt);



?>

<!-- Navbar starts -->

<?php   include "section_component/top_section.php";        ?>
<!-- ========== End Navbar ========== -->


    <div class="h-100 bg-light-subtle d-flex align-items-center justify-content-center flex-column " style="padding: 150px;">
        <h3 class="text-center">Do you have all the necessary document of the vehicle</h3>
        <form action="" class="pt-3 d-flex align-items-center justify-content-between">
            <div class="form-check m-3">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
            No
            </label>
            </div>
            <div class="form-check m-3">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
            Yes
            </label>
            </div>
            
            
        </form>

    </div>


    </body>

   
 
      <!-- Pre Foooter -->
<?php  include "section_component/footer_section.php" ; ?>
</html>