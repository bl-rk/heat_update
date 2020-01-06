<?php
    
     $pageTitle="Products & Services";
     $section=null;



 include("inc/header.php"); 

?>


    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Services</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

       <!-- ##### Services Area Start ###### -->
    <section class="services-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="line"></div>
                        <p>Take a look at our</p>
                        <h2>Our services</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="200ms">

                    <a href="serv_details.php?cat=loan">
                        <div class="icon">
                            <i class="icon-money-1"></i>
                        </div>
                    </a>
                        <div class="text">
                            <a href="serv_details.php?cat=loan"><h5>Heat Money</h5>
                            <p>We give out loans as fast as you can expect with low interest rate.</p>
                            </a>
                        </div>
                    </div>
                </div>


                   <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <a href="serv_details.php?cat=realtor">
                        <div class="icon">
                            <i class="icon-piggy-bank"></i>
                        </div>
                    </a>
                        <div class="text">
                            <a href="serv_details.php?cat=realtor"><h5>Heat Realtors</h5>
                            <p>Facilitating Housing Services: We buy, sell, develop and Manage real estate, You can also get a space in our estate.</p>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <a href="serv_details.php?cat=consultancy">
                        <div class="icon">
                            <i class="icon-profits"></i>
                        </div>
                    </a>
                        <div class="text">
                            <a href="serv_details.php?cat=consultancy"><h5>Heat Consults</h5>
                            <p>we provide bespoke and tailored end-to-end financial advisory and consultancy services to our customers.</p>
                            </a>
                        </div>
                    </div>
                </div>


             
            </div>
        </div>
    </section>
    <!-- ##### Services Area End ###### -->


  <?php
 include("inc/footer.php"); 
?>


