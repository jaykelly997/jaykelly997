<div class="footer">
        <div class="container">
            <div class="element">
                <div class="aspect">
                    <h3>quick note</h3>
                    <p>15, Old part road, Nkpor, Anambra</p>
                </div>
                <div class="aspect">
                    <h3>terms and conditions</h3>
                    <p>Product sales and Refund</p>
                    <p>policy</p>
                </div>
                <div class="aspect">
                    <h3>contacts</h3>
                    <ul>
                        <li><a href=""><i class="fab fa-whatsapp"></i> whatsapp</a></li>
                        <li><a href=""><i class="fab fa-facebook"></i> facebook</a></li>
                        <li><a href=""><i class="fab fa-twitter"></i> X</a></li>
                        <li><a href=""><i class="fab fa-instagram"></i> instagram</a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i> linkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <h4>Copyright &copy emmaco. Designed by jaykelly.</h4>
    </div>


    <!--preloader section  -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top  d-flex align-items-center justify-content-center"><i class="fa fa-arrow-up"></i></a>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


     <!-- for toggle -->
<!-- for sidebar -->

     <script src='../../js/jquery.js'></script>
     <script> 
         $(document).ready(function() {
             
             $('.toggle').click(function() {
                 $('.sidebar').toggleClass('appear')
 
             })
 
         })
 
     </script>

    <script>
        
        //  preloader js
        
            function preload() {
        
            var a= document.getElementById('preloader');
        
            a.style.display= "none";
        
        }
        
    </script>

<script>

// for pop up (product addition)

    addBtn = document.querySelector('.adds');
    pop = document.querySelector('.pop');
    cancel = document.querySelector('#cancel');
    

    addBtn.onclick = function() {
        pop.classList.toggle('active');
        
    }

    cancel.onclick = function() {
            addBtn.classList.remove('active');
            pop.classList.remove('active');
    }
</script>




<!-- ajax for searching  -->
    <script type="text/javascript">
        $(document).ready(function(){

           $("#live_search").keyup(function(){

                var input = $(this).val();
                // alert(input);

                if(input != ""){
                    $.ajax({
                        url: "livesearch.php",
                        method: "POST",
                        data: {input:input},
                        
                        success:function(data){
                            $("#searchresult").html(data);
                            $("#searchresult").css("display","block");

                        }
                    });
                }
                // else {
                //     $("#searchresult").css("display", "none");
                // }
           }); 
        });
    </script>


</body>
</html>