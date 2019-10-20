<?php

    $pageTitle="";
     $section=null;

include("inc/service_data.php");

// function for header title geting the section and category tag
if(isset($_GET["cat"])){

    if ($_GET["cat"] == "loan")
            {$pageTitle ="Heat Money";
             $section="loan";}

    else if($_GET["cat"] == "consultancy")
            {$pageTitle="Heat Consultancy";
            $section="consultancy";}

    else if($_GET["cat"] == "investment")
            {$pageTitle="Heat Realtors";
            $section="investment";}

    else if($_GET["cat"] == "realtor")
            {$pageTitle="Heat Realtors";
            $section="realtor";}
}

    

foreach ($serv_data as $item );

    
    


// $pageTitle = $item["title"];
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
    <!-- Major heading for site service data start -->
</br>

 <div class="container">

     <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="line"></div>
                        <p>Complete Exclusive Package on...</p>
                        <h2><?php echo "$pageTitle"; ?></h2>
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
                            <h2> <?php echo "$pageTitle"; ?></h2>
                        </div>

                        <h6 class="mb-4"><?php echo $item["sub_content"]; ?> </h6>

                        <p class="mb-0"><?php echo $item["content"]; ?></p>

                        <a href="inc/apply.php" class="btn credit-btn mt-50">Apply Now</a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-thumbnail mb-100">
                        <img src="img/bg-img/14.jpg" alt="">
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
                        <h2>Heat Money <small> (loan packs) </small> </h2>
                    </div>
                </div>

                <!-- ##### Accordians ##### -->
                <div class="col-12 col-lg-6">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">HEAT Salary Advance (HSA) 
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseOne" class="accordion-content collapse show">
                                <p>Provides salary advance or Cash Loans to salary and other income earners, you can get upto 300% of net monthly salary/income as loan, repayment is based on monthly income or salary deducted at source or via direct debit order or post-dated cheques. No collateral is required. Repayment durationupto 6 months.</p>
                            </div>
                        </div>


                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">HEAT Loan-2-Staff (HLS)
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseTwo" class="accordion-content collapse">
                                <p>This product is designed for organisations with minimum staff strength of 20 employees, it provides the staff of partner organisations with concessionary loans at reduced interest rate. The partner organization must be a CAC registered company, with characteristics of a going concern..</p>
                            </div>
                        </div>
                      <!--   <!- single accordian area ->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Pellentesque sit amet velit a libero viverra
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseTwo" class="accordion-content collapse">
                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante.</p>
                            </div>
                        </div>
                        <!- single accordian area ->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Quisque fringilla orci lacus, ut vestibulum
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante.</p>
                            </div>
                        </div> -->
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
                                <div class="credit-tab-content">
                                    <!-- Tab Text -->
                                    <div class="credit-tab-text">
                                        <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante.</p>
                                    </div>
                                </div>
                            </div>
                             <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="credit-tab-content">
                                  <!--   Tab Text -->
                                    <div class="credit-tab-text">
                                        <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                <div class="credit-tab-content">
                                   <!--  Tab Text -->
                                    <div class="credit-tab-text">
                                        <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante.</p>
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
