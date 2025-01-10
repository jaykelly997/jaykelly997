     <!-- Pre Foooter -->

<?php

     $check ="SELECT* FROM emmako_ui_element";
     $list=mysqli_query($me, $check);
     $lists= mysqli_fetch_array($list);

?>
     <div class="pre-footer ">
    <div class="container ">
        <div class="row">
            <div class="col-sm">
                <ul>
                    <li>Quick Note</li>
                    <li>15, Old part Road, Nkpor, Anambra</li>
                </ul>
            </div>
            <div class="col-sm">
                <ul>
                    <li>Terms & Condition</li>
                    <li>Products and Refund</li>
                </ul>
            </div>
            <div class="col-sm">
                <ul>
                    <li> Contacts</li>
                    <li > 
                        <a href="">
                            <i class="fab fa-linkedin-in"></i>
                            &ThickSpace; <span> Linkedin</span>
                        </a>
                       </li>
                    <li>
                        <a href="">
                            <i class="fab fa-xbox"></i>
                             &ThickSpace; X
                        </a></li>
                    <li>
                        <a href=""><i class="fab fa-facebook-f"></i>
                            &ThickSpace; Facebook
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>




    <footer class="container-fluid p-4 ">
        <p class="text-center">Copywright &copy; emmako, Designed by jaykelly </p>
</footer>

<div id="preloader"></div>
<a href="#" class="back-to-top  d-flex align-items-center justify-content-center"><i class="fa fa-arrow-up"></i></a>


    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="main.js"></script>

    
</body>

</html>