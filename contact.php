<?php

$pageTitle="Contact";

include("inc/header.php"); 

?>
  <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <!-- Logo -->
                        <a href="loan_apply.php" class="d-block mb-50"><img src="img/core-img/cell.png" alt=""></a>
                        <p>Be sure to contact us VIA any of our social media handles, Email addresses &amp; Hotlines.</p>
                    </div>
                </div>

                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <div class="contact-advisor">

                          <!--  <h5>Contact an advisor</h5>
                             Single Advisor -->
                           <!-- <div class="single-advisor d-flex align-items-center">
                                <div class="advisor-img">
                                    <img src="img/bg-img/25.jpg" alt="">
                                </div>
                                <div class="advisor-info">
                                    <h6>James Smith</h6>
                                    <span>Advisor</span>
                                    <p>+456 347 53433</p>
                                </div>
                            </div>
                             Single Advisor -->

                            <div class="single-advisor d-flex align-items-center">
                                <div class="advisor-img">
                                    <img src="img/bg-img/25.jpg" alt="">
                                </div>
                                <div class="advisor-info">

                                    <h6>Mr. Heat</h6>
                                    <span></span>
                                    <p> +2348023611777 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Contact Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-area mb-100">
                        <div class="contact--area contact-page">
                            <!-- Contact Content -->
                            <div class="contact-content">
                                <h5>Get in touch</h5>

                                <!-- Single Contact Content -->
                                <div class="single-contact-content d-flex align-items-center">
                                    <div class="icon">
                                        <img src="img/core-img/location.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>Heat Place <br> 25b cooker road Ilupeju,Lagos Nigeria</p>
                                    </div>
                                </div>
                                <!-- Single Contact Content -->
                                <div class="single-contact-content d-flex align-items-center">
                                    <div class="icon">
                                        <!-- <img src="img/core-img/call.png" alt=""> -->
                                    </div>
                                    <div class="text">
                                        <p>+234 9072 994 726</p>
                                        <span>mon-fri , 08.am - 17 pm</span>
                                    </div>
                                </div>
                                <!-- Single Contact Content -->
                                <div class="single-contact-content d-flex align-items-center">
                                    <div class="icon">
                                        <img src="img/core-img/message2.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>heatfinancials@gmail.com</p>
                                        <span>we reply in 24 hrs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ##### Google Maps ##### -->
        <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7845465656083!2d3.359418914596191!3d6.548865424685272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d945610b999%3A0xe306efced2b7ff64!2s25b+Coker+Rd%2C+Ilupeju+100252%2C+Lagos!5e0!3m2!1sen!2sng!4v1563818620856!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- Contact Area -->
            <div class="contact---area">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                          
                          <!-- Creates an error or valdation message ##start-->

                           <!-- Creates an error or valdation message ##end-->
                           
                            <!-- Contact Area -->
                            <div class="contact-form-area contact-page">
                                <h4 class="mb-50">Send a message</h4>

                                <form action="mail_process.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Your E-mail" required=""> 
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Your Subject" required="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Your Message" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn credit-btn mt-30" name="submit" type="submit">Send</button>
                                        </div>
                                    </div>
                                </form>
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