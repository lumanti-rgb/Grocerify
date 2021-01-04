<?php 
$active='Home';
include("includes/header.php");


?>
   


<div class="container" id="slider">
       
       <div class="col-md-12">
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel">
               
               <ol class="carousel-indicators">
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   
               </ol>
               
               <div class="carousel-inner">
                   
               <?php 
                   
                   $get_slides = "select * from slider LIMIT 0,1";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                         
                        $silde_name = $row_slides['silde_name'];
                        $slide_image = $row_slides['slide_image'];
                       
                       echo "
                       
                       <div class='item active'>
                       
                       <img src='images/$slide_image'>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   $get_slides = "select * from slider LIMIT 1,3";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $silde_name = $row_slides['silde_name'];
                       $slide_image = $row_slides['slide_image'];
                       
                       echo "
                       
                       <div class='item'>
                       
                       <img src='images/$slide_image'>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   ?>

               </div>
               
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a>
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next">
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a>
               
           </div>
           
       </div>
       
   </div>
   
   <div id="advantages">
        <div class="container">
            <div class="same-height-row">
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                   
                        <i class="fa fa-heart"></i>


                        </div>

                        <h3><a href="">We Love To Serve You.</a></h3>
                        <p>We make life easier. </p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                   
                        <i class="fa fa-tag"></i>


                        </div>

                        <h3><a href="">Best Prices</a></h3>
                        <p>Feed your family the best. </p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                   
                        <i class="fa fa-thumbs-up"></i>


                        </div>

                        <h3><a href=""> Quality Products.</a></h3>
                        <p>Visit us for better products. </p>
                    </div>
                </div>


            </div>
        </div>

    </div>

<div id="hot">
    <div class="box">
        <div class="container">
            <div class="col-md-12">

            <h2>
            Top Products
            </h2>


        </div>
    </div>
</div>


<div id="content" class="container">
    <div class="row">
        <?php
        getPro();
        ?>
    
        </div>
</div>



<?php

include("includes/footer.php");

?>
    
</body>
</html>