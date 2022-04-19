<header class="header-area">
    <div class="header-top second-header d-none d-md-block">
    <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8 d-none  d-md-block">
                    <div class="header-cta">
                        <ul>
                        <li>
                                <i class="icon dripicons-mail"></i>
                                <a href="mailto:jajuclinic@gmail.com" class="txtwhite">jajuclinic@gmail.com</a>
                            </li>
                            <li>
                                <i class="icon dripicons-phone"></i>
                                <a href="tel:+91 844 606 0237" class="txtwhite">+91 844 606 0237</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-3 d-none d-lg-block">
                    <div class="header-social text-right">
                        <span>
                            <a target="_blank" href="https://www.facebook.com/jajuendovascularclinic"
                                title="Facebook"><i class="fab fa-facebook"></i></a>
                            <a target="_blank" href="https://www.instagram.com/jajuendovascularclinic/" title="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="javascript:void(0);" title="Youtube"><i class="fab fa-youtube"></i></a>
                            <a target="_blank" href="https://www.google.com/maps/place/Jaju+Clinic/@19.859294,75.347471,14z/data=!4m5!3m4!1s0x0:0x52e59df451bc8466!8m2!3d19.8592556!4d75.3474678?hl=en" title="Youtube"><i class="fab fa-google"></i></a>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="header-sticky" class="menu-area menu-area2">
        <div class="container">
            <div class="second-menu">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                    <div class="navbottm">
                            <a href="<?php echo base_url();?>"><img class="logoimg"
                                    src="<?php echo base_url();?>public/jaju/picture/logo/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="main-menu text-right pr-15">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="navbg"><a href="<?php echo base_url();?>endovascular">Endovascular</a>
                                    </li>
                                    <li class="navbg"><a href="<?php echo base_url();?>endovascular-treatment">Services</a></li>
                                    <li class="navbg"><a href="<?php echo base_url();?>endo-gallery">Gallery</a></li>
                                    <li class="navbg"><a href="<?php echo base_url();?>endovascular-blogs">Blog</a></li>
                                    <li style="background-color:#fff;" class="btn-none">
                                    <a href="#enquiry" data-toggle="modal" class="top-btn appointmentbtn fw w-215" style="margin-top:5px;"> Book Appointment <i
                                class="fas fa-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                    <a href="#enquiry" data-toggle="modal" class="top-btn appointmentbtn fw">Enquire Now<i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="modal fade" id="enquiry" style="z-index:10000;">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content form-wrapper">
            <div class="close-box" data-dismiss="modal">
                <i class="fa fa-times fa-2x"></i>
            </div>
            <div class="container-fluid mt-5" style="background-color:#fff; ">
            <?php  echo form_open_multipart('Book_appointment/homeshortappointment' ,'class="contact-form needs-validation" id="EndovascularEnquiry" novalidate'); ?>
                
                <div class="form-group text-center pb-2 mt34">
                    <h4>Enquire Now</h4>
                </div>
                <div class="row">
                    <div class="form-group col-md-12 col-sm-12">
                        <label for="name">Name<span class="red">*</span></label>
                        <span class="fa fa-user form-control-icon"></span>
                        <input type="text" name="yname" class="form-control" id="yname" class="form-control" placeholder="Name"
                            required>
                        <div class="invalid-feedback">Please enter your name</div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12">
                        <label for="mobile">Mobile<span class="red">*</span></label>
                        <span class="fa fa-mobile-alt form-control-icon"></span>
                        <input type="text" id="mobile" name="mobileno" class="form-control"
                            onkeyup="if(!$.isNumeric(this.value)){this.value = this.value.slice(0,-1);}"
                            pattern="[0-9]+" maxlength="10" minlength="10"
                            title="Mobile number should contain only 10 digits!" placeholder="Mobile Number"
                            required>
                        <div class="invalid-feedback">Please enter a mobile no.</div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12">
                        <label for="city">Your City<span class="red">*</span></label>
                        <span class="fas fa-city form-control-icon"></span>
                        <input type="text" name="city" id="city" class="form-control" placeholder="Enter Your City" required>
                        <div class="invalid-feedback">Please enter city</div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12">
                        <input type="hidden" name="servicesname" id="hospitaltreatment" class="form-control" value="Endovascular Speciality" required>
                        <div class="invalid-feedback">Please enter city</div>
                    </div>
                </div>
                <div class="slider-btn" style="margin:0px 0px 20px 50px;">
                    <button type="submit" class="btn ss-btn" data-delay=".8s">Enquire Now <i
                            class="fas fa-chevron-right"></i></button>
                </div>
            <?php  echo form_close();?>
            </div>
        </div>
    </div>
</div>


