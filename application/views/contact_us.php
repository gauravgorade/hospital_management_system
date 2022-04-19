<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php   $this->load->view('layout/style');   ?>
    <title> JAJU – CONTACT | Hospital and Health </title>
    <meta name="description" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
    <meta name="keywords" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">

</head>

<body>
    <?php  
    $this->load->view('layout/header');   
    ?>

    <main>
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(<?php echo base_url(); ?>public/jaju/picture/bread/bread2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h2>Contact Us</h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section mt-60 mb-50 bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="title-wrap">
                            <h5>Clinic Location</h5>
                            <div class="h-decor"></div>
                        </div>
                        <ul class="icn-list-lg">
                            <li><i class="icon-placeholder2"></i>

                                <b>JAJU CLINIC</b><br>Opp. HDFC
                                Bank,Shivaji Nagar Road
                                Sutgirni Chowk,<br>
                                Aurangabad 431009
                            </li>
                        </ul>
                    </div>
                    <div class="col-md mt-3 mt-md-0">
                        <div class="title-wrap">
                            <h5>Contact Info</h5>
                            <div class="h-decor"></div>
                        </div>
                        <ul class="icn-list-lg">
                            <li><i class="icon-telephone"></i>Contact: <span class="theme-color"><span
                                        class="text-nowrap">
                                        <a href="tel:+91 844 606 0237">
                                            +91 844 606 0237</a></span>

                                </span>

                            </li>
                            <li><i class="icon-black-envelope"></i>Email:
                                <a href="mailto: jajuclinic@gmail.com">jajuclinic@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md mt-3 mt-md-0">
                        <div class="title-wrap">
                            <h5>Working Time</h5>
                            <div class="h-decor"></div>
                        </div>
                        <ul class="icn-list-lg">
                            <li><i class="icon-clock"></i>
                                <div>
                                    <div class="d-flex"><span>Monday-Sunday</span></div>
                                    <div class="d-flex"><span>9:00AM - 9:00PM</span></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md mt-3 mt-md-0">
                        <div class="title-wrap">
                            <h5>Social Links</h5>
                            <div class="h-decor"></div>
                        </div>
                        <ul class="icn-list-lg">
                            <div class="footer-social">
                                <a target="_blank" href="https://www.facebook.com/jajuendovascularclinic"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://www.instagram.com/jajuendovascularclinic/"><i
                                        class="fab fa-instagram "></i></a>
                                <a href="javascript:void(0);"><i class="fab fa-youtube"></i></a>
                                <a target="_blank"
                                    href="https://www.google.com/maps/place/Jaju+Clinic/@19.859294,75.347471,14z/data=!4m5!3m4!1s0x0:0x52e59df451bc8466!8m2!3d19.8592556!4d75.3474678?hl=en"><i
                                        class="fab fa-google"></i></a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="mapprop">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15010.170728704064!2d75.3474707!3d19.859294!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x52e59df451bc8466!2sJaju%20Clinic!5e0!3m2!1sen!2sin!4v1630492080039!5m2!1sen!2sin"
                style="border:0; width:100%; height: 500px;" allowfullscreen="" loading="lazy" aria-hidden="false"
                tabindex="0"></iframe>
        </div>


 
        <!-- contact-area -->
        <section id="contact" class="contact-area contact-bg pt-100 pb-70 p-relative fix"
            style="background-image:url(<?php echo base_url(); ?>public/jaju/img/an-bg/an-bg11.png); background-size: cover;background-repeat: no-repeat;">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-img">
                            <img src="<?php echo base_url(); ?>public/jaju/img/bg/touch-illustration.png"
                                alt="touch-illustration">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-title mb-60">
                            <span>Contact Us</span>
                            <h2>Get In Touch With Us</h2>
                        </div>
                        <!-- <form action="#contactForm" id="RegisterationForm" class="needs-validation" method="post"
                            novalidate> -->
                            <?php  echo form_open_multipart('Book_appointment/contact_form' ,'id="RegisterationForm" class="needs-validation" novalidate'); ?>
                        
                            <div class="successform">
                            </div>
                            <div class="errorform">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-field p-relative c-name mb-20">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Your name*" maxlength="50" required>
                                        <div class="invalid-feedback">Please enter your Name</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-field p-relative c-name mb-20">
                                        <input type="text" class="form-control" id="phone" name="mobile" placeholder="Mobile Number"
                                           data-error="Please enter valid mobile number" maxlength="10" minlength="10" 
										   onkeyup="this.value=this.value.replace(/[^\d]/,'')" pattern="[789][0-9]{9}" autocomplete="off"  required>
                                        <div class="invalid-feedback">Please enter Phone number</div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contact-field p-relative c-email mb-20">
                                        <input type="text" class="form-control" name="email" id="email"
                                            placeholder="Email*" maxlength="30" required>
                                        <div class="invalid-feedback">Please enter Email</div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contact-field p-relative c-subject mb-20">
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject*" maxlength="30" required>
                                        <div class="invalid-feedback">Please enter Subject</div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-field p-relative c-message mb-45">
                                            <textarea class="form-control txtarea" name="message" id="message"
                                                placeholder="Message" maxlength="250" required></textarea>
                                            <div class="invalid-feedback">Message for us..</div>
                                        </div>
                                        <!-- <div class="slider-btn">
                                        <a href="#" class="btn ss-btn" data-animation="fadeInRight"
                                            data-delay=".8s">Send Message</a>
                                    </div> -->
                                        <div class="slider-btn">
                                            <button type="submit" class="btn ss-btn" data-animation="fadeInRight"
                                                data-delay=".8s">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                        <?php  echo form_close();?>

                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->


    </main>

    <?php 
    $this->load->view('layout/footer');   
    $this->load->view('layout/script');
    ?>

</body>

</html>
