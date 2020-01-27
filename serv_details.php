<?php

    $pageTitle="";
     $section=null;


include("inc/service_data.php");
include("functions.php");



 include("inc/header.php"); 



?>

<html lang="en">


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

 <!-- 
  <?php 

    // print_r($_GET); 
        
         // print_r($money);
        
        // print_r($data);

          
    ?> -->

    <!-- Major heading for site service data start -->
</br>

 <div class="container">

     <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="line"></div>
                        <p>Complete Exclusive Package on...</p>
                        <h2><?php echo $data["title"]; ?></h2>
                    </div>
               

  <!-- ##### Service content Start ###### -->
    <section class="about-area section-padding-100-0">
       
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-content mb-100">
                        <!-- Section Heading -->
                        <div class="section-heading">
                        <div class="line"></div>
                            <p>Take look at our</p>
                            <h2> <?php echo $data["title"]; ?></h2>
                        </div>

                        <h6 class="mb-4"><?php echo $data["sub_content"]; ?> </h6>

                        <p class="mb-0"><?php echo $data["content"]; ?></p>

                        <a href="<?php echo $data['apply_link'] ?>" class="btn credit-btn mt-50">Apply Now</a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-thumbnail mb-100">
                        <img src="<?php echo $data['img'] ?>" alt="Loan Apply">
                    </div>
                </div>
            </div>
        </div>
 </section>
    <!-- ##### services content end here ###### -->

<section class="elements-area section-padding-100-0">  
         <div class="container">
            <div class="row">
            <!-- ========== Progress Bars & Accordions ========== -->
     
                <div class="col-12">
                    <div class="elements-title mb-30">
                        <div class="line"></div>
                        <h2><?php echo $data["title"]; ?><small> ( packs) </small> </h2>
                    </div>
                </div>

                <!-- ##### Accordians ##### -->
                <div class="col-12 col-lg-6">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> <?php echo $data["seg_a_title"]; ?>
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseOne" class="accordion-content collapse show">
                                <p><?php echo $data["seg_a_content"]; ?></p>
                            </div>
                        </div>


                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo"><?php echo $data["seg_b_title"]; ?>
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseTwo" class="accordion-content collapse ">
                                <p> <?php echo $data["seg_b_content"]; ?> </p>
                            </div>
                        </div>

                       
                       <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseThree" data-parent="#accordion" data-toggle="collapse" href="#collapseThree"><?php echo $data["seg_c_title"]; ?>
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <p> <?php echo $data["seg_c_content"]; ?> </p>
                            </div>
                        </div>
                        

                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseFour" data-parent="#accordion" data-toggle="collapse" href="#collapseFour"><?php echo $data["seg_d_title"]; ?>
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseFour" class="accordion-content collapse">
                                <p><?php echo $data["seg_d_content"]; ?></p>
                            </div>
                        </div>
                        
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseFive" data-parent="#accordion" data-toggle="collapse" href="#collapseFive"><?php echo $data["seg_e_title"]; ?>
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseFive" class="accordion-content collapse">
                                <p><?php echo $data["seg_e_content"]; ?></p>
                            </div>
                        </div>
                        
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseSix" data-parent="#accordion" data-toggle="collapse" href="#collapseSix"> <?php echo $data["seg_f_title"]; ?>
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseSix" class="accordion-content collapse">
                                <p><?php echo $data["seg_f_content"]; ?></p>
                            </div>
                        </div>
                         
                         <?php 
                         //code to determine if to diplaay a part of the code
                         // code much highight once it is a link from the index 

                         if($pageTitle == "Heat Money")
                            {?>
                         <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseSeven" data-parent="#accordion" data-toggle="collapse" href="#collapseSeven"> <?php echo $data["seg_g_title"]; ?>
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseSeven" class="accordion-content collapse">
                                <p><?php echo $data["seg_g_content"]; ?></p>
                            </div>
                        </div>


                         <?php }


                            //code ends
                            ?>
                    </div>
                </div>

                <!-- ##### Tabs ##### -->
                <div class="col-12 col-lg-6">
                    <div class="credit-tabs-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Procedure</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Duration</a>
                            </li>
                        </ul>

                        <div class="tab-content mb-100" id="myTabContent">
                            <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                               <!--  <div class="credit-tab-content"> -->
                                    <!-- Tab Text -->
                                    <div class="">
                                        <ol class="list-grioup">
                                            <li class="">Must be minimum of 22 years at time of applying .</li>

                                            <li>Must be in full-employment as a confirmed staff .</li>
                                            
                                            <li>  Must have a steady source of verifiable income .</li>
                                            
                                            <li>Must have a functional Bank Account .</li>
                                            
                                            <li>Must have a valid means of identification, driver&prime;s license, international passport, or national ID card</li>
                                        </ol>
                                    </div>
                                </div>
                           <!--  </div> -->
                             <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="credit-tab-content">
                                  <!--   Tab Text -->
                                    <div class="credit-tab-text">
                                        <p>Process and resuls pathways</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                <div class="credit-tab-content">
                                   <!--  Tab Text -->
                                    <div class="credit-tab-text">
                                        <p>Time Taken</p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
                </div>
</section>


  
    <?php
 include("inc/footer.php"); 
?>
