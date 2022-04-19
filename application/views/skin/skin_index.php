<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php   $this->load->view('layout/style');   ?>


    <title> JAJU – Skin | Hospital and Health </title>
    <meta name="description" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
    <meta name="keywords" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">

</head>

<body>
    <?php   
    $this->load->view('layout/header2');   
    ?>
    <main>
        <section id="home" class="slider-area fix p-relative">
            <div class="slider-active2">
                <div class="single-slider slider-bg d-flex align-items-center"
                    style="background-image:url(<?php echo base_url(); ?>public/jaju/img/an-bg/header-bg.png)">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="slider-content s-slider-content text-left">
                                    <h1 class="txtsize2 skinhead mt20" data-animation="fadeInUp" data-delay=".4s">Making Perfect Skin
                                        is
                                        <span>Possible!</span>
                                    </h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Skincare is the range of practices
                                        that support skin integrity, enhance its appearance, and relieve skin
                                        conditions.</p>
                                    <div class="slider-btn mt-25">
                                        <a href="#ds6dsdf65d5g" data-toggle="modal" class="btn ss-btn w-215 buttonreg"
                                            data-animation="fadeInRight" data-delay=".8s">Book Appointment <i
                                                class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="<?php echo base_url(); ?>public/jaju/picture/skin/skinhero2.png"
                                    alt="header-img" class="header-img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="team-area-content pt-30 p-0">
            <div class="container">
                <div class="lower-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                            <div class="team-img-box">
                                <img src="<?php echo base_url(); ?>public/jaju/picture/doctor/doctor2.png"
                                    alt="team-img">
                            </div>
                        </div>

                        <div class="text-column col-lg-8 col-md-12 col-sm-12 text-center">
                            <div class="s-about-content wow fadeInRight" data-animation="fadeInRight"
                                data-delay=".2s">
                                <h2>Dr. Ankita Maheshwari Jaju</h2>
                                <span><i>MBBS DDVL (K.E.M. Mumbai)</i></span>
                                <p>We promote interactions, production of most relevant ideas and we act to create high
                                    quality documents that sustain ideas with strength. Our Design Suite has been
                                    designed to allow each and every kind of skills and expertise to express themselves
                                    together, serving a common purpose. Simplicity and quality are truly our keywords to
                                    deliver a never lived before experience. We design with main focus, quick and
                                    natural handling by our users.</p>
                                <p>We promote interactions, production of most relevant ideas and we act to create high
                                    quality documents that sustain ideas with strength. Our Design Suite has been
                                    designed to allow each and every kind of skills and expertise to express themselves
                                    together, serving a common purpose. Simplicity and quality .</p>
                                <div class="social mt-30">
                                    <a target="_blank"
                                        href="https://www.facebook.com/Jaju-Skin-Clinic-100236868998068"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://www.instagram.com/jajuskinclinic/"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php   $this->load->view('skin/common');   ?>


        <section id="testimonios" class="testimonial-area testimonial-p pt-30 fix"
            style="background-image: url(<?php echo base_url(); ?>public/jaju/img/an-bg/an-bg07.png);background-position: center; background-repeat: no-repeat;background-size: contain;">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-8">
                        <div class="section-title center-align mb-60 text-center">
                            <span>TESTIMONIAL</span>
                            <h5 class="txtsize">What Our Patient’s Say’s</h5>
                            <p>What our Patient’s says about us. </p>
                        </div>
                    </div>
                </div>
     
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="testimonial-active">

                          <?php  	foreach ($testimonial as $row) {  
                      $t_id = $row->t_id ;  $status = $row->status;  ?>   

 
                            <div class="single-testimonial">
                                <div class="testi-img">
                                    <img src="<?php echo base_url(); ?>public/img/client/<?php echo $row->img_path ;?>"
                                        alt="testimonial-img">
                                </div>
                                <div class="single-testimonial-bg">
                                    <div class="com-icon"><img
                                            src="<?php echo base_url(); ?>public/jaju/img/testimonial/qutation.png"
                                            alt="testimonial-img">
                                    </div>
                                    <div class="testi-author">
                                        <div class="ta-info">
                                            <h6> <?php echo  $row->full_name ;?> </h6>
                                            <span><?php echo $row->c_desc ;?></span>
                                        </div>
                                    </div>
                                    <p><?php echo $row->thought;?>.</p>
                                </div>
                            </div>

			 <?php  } ?>


                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact-area contact-bg pb-30 p-relative fix mt-70"
            style="background-image:url(<?php echo base_url(); ?>public/jaju/img/an-bg/an-bg11.png); background-size: cover;background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-12"></div>
                    <div class="col-md-8 col-sm-12">
                        <div class="section-title text-center">
                            <span>Book Appointment</span>
                            <h5 class="txtsize">Book a Appointment</h5>
                        </div>
                        <?php  echo form_open_multipart('Book_appointment/skeen_book_appointment' ,'id="RegisterationForm" class="needs-validation" novalidate'); ?>

                        <input type="hidden" name="url" value="<?php echo base_url().$this->uri->uri_string();?>">
                        <div class="row">

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="name">Name<span class="red">*</span></label>
                                <span class="fa fa-user form-control-icon"></span>
                                <input type="text" class="form-control" name="name" id="name" class="form-control"
                                    placeholder="Name" required>
                                <div class="invalid-feedback">Please enter your name</div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="email">Email</label>
                                <span class="fa fa-envelope form-control-icon"></span>
                                <input type="text" id="email" name="email" class="form-control" placeholder="Email"
                                    required>
                                <div class="invalid-feedback">Please enter a valid email address</div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="age">Age<span class="red">*</span></label>
                                <span class="fa fa-users form-control-icon"></span>
                                <input type="number" id="age" name="age" class="form-control" placeholder="Age"
                                    required>
                                <div class="invalid-feedback">Please enter a age</div>
                            </div>

                            <div class="form-group col-md-6 col-sm-12"><br>
                                <label for="age">Gender :<span class="red">*</span></label>
                                <input type="radio" id="male" name="gender" value="Male"> Male
                                <input type="radio" id="female" name="gender" value="Female"> Female
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="mobile">Mobile<span class="red">*</span></label>
                                <span class="fa fa-mobile-alt form-control-icon"></span>
                                <input type="text" id="mobile" name="mobile" class="form-control" required
                                    onkeyup="if(!$.isNumeric(this.value)){this.value = this.value.slice(0,-1);}"
                                    pattern="[0-9]+" maxlength="10" minlength="10"
                                    title="Mobile number should contain only 10 digits!" placeholder="Mobile Number">
                                <div class="invalid-feedback">Please enter a mobile no.</div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="address">Your Address</label>
                                <span class="fa fa-map-marker form-control-icon"></span>
                                <input type="text" id="address" name="address" class="form-control"
                                    placeholder="Your Address" required>
                                <div class="invalid-feedback">Please enter address</div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="city">Your City<span class="red">*</span></label>
                                <span class="fas fa-city form-control-icon"></span>
                                <input type="text" id="city" name="city" class="form-control"
                                    placeholder="Enter Your City" required>
                                <div class="invalid-feedback">Please enter city</div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="Treatmentforskin">Select Skin Treatment<span class="red">*</span></label>
                                <span class="fa fa-clock form-control-icon"></span>
                                <select id="skinTreatments" name="skinTreatments" class="form-control mb-1 select">
                                    <option value="">Select Treatment</option>
                                    <option value="Skin Problem">Skin Problem</option>
                                    <option value="Cosmetic Treatment">Cosmetic Treatment</option>
                                    <option value="Hair Problem">Hair Problem</option>
                                    <option value="Skin Biopsy">Skin Biopsy</option>
                                </select>
                                <div class="invalid-feedback">Please select Treatment</div>
                            </div>

                            <div class="form-group col-md-6 col-sm-12 treatment">
                                <input type="hidden" name="selectspeciality" id="selectspeciality" class="form-control"
                                    value="Skin Speciality">
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="location">Select Location<span class="red">*</span></label>
                                <span class="fa fa-map-marker form-control-icon"></span>
                                <select id="skinlocations" name="skin_hospitallocation"
                                    class="form-control mb-1 select skin_hospitallocation">
                                    <option value="">Select Location</option>
                                    <option value="Auranagabad">Auranagabad</option>
                                </select>
                                <div class="invalid-feedback">Please select Location</div>
                            </div>

                            <div id="Auranagabad2" class="form-group col-md-6 col-sm-12 treatment">
                                <span class="fs-12 lh-16">Sut Girni Rd, Bhagatsingh Nagar, Kasliwal Nagar,
                                    Garkheda, Aurangabad.
                                </span>

                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="date">Select Date<span class="red">*</span></label>
                                <span class="fa fa-calendar-edit form-control-icon"></span>
                                <input id="skindate" name="skin_date" type="text" class="form-control datepicker" />
                                <div class="invalid-feedback">Please Select Date</div>
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="slot">Preferable Timing<span class="red">*</span></label>
                                <span class="fa fa-clock form-control-icon"></span>
                                <select id="skintiming" name="skin_sloat" class="form-control mb-1 select">
                                    <option value="" selected="selected" disabled="disabled">Preferable
                                        Timing</option>
                                    <option value="10:00am to 01:00pm">10:00am to 01:00pm</option>
                                    <option value="03:00pm to 09:00pm">03:00pm to 09:00pm</option>
                                </select>
                                <div class="invalid-feedback">Please Select Preferable Timing</div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="Message">Message</label>
                                <span class="fa fa-envelope-square form-control-icon"></span>
                                <textarea type="text" id="skinmsg" name="skin_msg" class="form-control"
                                    placeholder="your Message"></textarea>
                                <div class="invalid-feedback">Please enter message</div>
                            </div>
                        </div>

                        <center>
                            <div class="slider-btn">
                                <button type="submit" class="btn ss-btn w-215 buttonreg" data-delay=".8s">Book Appointment <i
                                        class="fas fa-chevron-right"></i></button>
                            </div>
                        </center>
                        <?php  echo form_close();?>
                    </div>
                </div>
            </div>
        </section>


        <div class="modal fade" id="ds6dsdf65d5g" style="z-index:10000;">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content form-wrapper">
                    <div class="close-box" data-dismiss="modal">
                        <i class="fa fa-times fa-2x"></i>
                    </div>
                    <div class="container-fluid mt-5">
                        <div class="form-group text-center pb-2 mt34">
                            <h4>Book a Appointment</h4>
                        </div>
                        <?php  echo form_open_multipart('Book_appointment/skeen_book_appointment' ,'id="RegisterationForm" class="needs-validation" novalidate'); ?>

                        <input type="hidden" name="url" value="<?php echo base_url().$this->uri->uri_string();?>">
                        <div class="row">

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="name">Name  <span class="red">*</span></label>
                                <span class="fa fa-user form-control-icon"></span>
                                <input type="text" class="form-control" name="name" id="name" class="form-control"
                                    placeholder="Name" required>
                                <div class="invalid-feedback">Please enter your name</div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="email">Email</label>
                                <span class="fa fa-envelope form-control-icon"></span>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                                    >
                                <div class="invalid-feedback">Please enter a valid email address</div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="age">Age<span class="red">*</span></label>
                                <span class="fa fa-users form-control-icon"></span>
                                <input type="number" id="age" name="age" class="form-control" placeholder="Age"
                                    required>
                                <div class="invalid-feedback">Please enter a age</div>
                            </div>

                            <div class="form-group col-md-6 col-sm-12"><br>
                                <label for="age">Gender :<span class="red">*</span></label><br><br>
                                <input type="radio" id="male" name="gender" value="Male"> Male
                                <input type="radio" id="female" name="gender" value="Female"> Female
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="mobile">Mobile<span class="red">*</span></label>
                                <span class="fa fa-mobile-alt form-control-icon"></span>
                                <input type="text" id="mobile" name="mobile" class="form-control" required
                                    onkeyup="if(!$.isNumeric(this.value)){this.value = this.value.slice(0,-1);}"
                                    pattern="[0-9]+" maxlength="10" minlength="10"
                                    title="Mobile number should contain only 10 digits!" placeholder="Mobile Number">
                                <div class="invalid-feedback">Please enter a mobile no.</div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="address">Your Address</label>
                                <span class="fa fa-map-marker form-control-icon"></span>
                                <input type="text" id="address" name="address" class="form-control"
                                    placeholder="Your Address">
                                <div class="invalid-feedback">Please enter address</div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="city">Your City<span class="red">*</span></label>
                                <span class="fas fa-city form-control-icon"></span>
                                <input type="text" id="city" name="city" class="form-control"
                                    placeholder="Enter Your City" required>
                                <div class="invalid-feedback">Please enter city</div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="Treatmentforskin">Select Skin Treatment<span class="red">*</span></label>
                                <span class="fa fa-clock form-control-icon"></span>
                                <select id="skinTreatments" name="skinTreatments" class="form-control mb-1 select">
                                    <option value="">Select Treatment</option>
                                    <option value="Skin Problem">Skin Problem</option>
                                    <option value="Cosmetic Treatment">Cosmetic Treatment</option>
                                    <option value="Hair Problem">Hair Problem</option>
                                    <option value="Skin Biopsy">Skin Biopsy</option>
                                </select>
                                <div class="invalid-feedback">Please select Treatment</div>
                            </div>

                            <div class="form-group col-md-6 col-sm-12 treatment">
                                <input type="hidden" name="selectspeciality" id="selectspeciality" class="form-control"
                                    value="Skin Speciality">
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="location">Select Location<span class="red">*</span></label>
                                <span class="fa fa-map-marker form-control-icon"></span>
                                <select id="skinlocations" name="skin_hospitallocation"
                                    class="form-control mb-1 select skin_hospitallocation">
                                    <option value="">Select Location</option>
                                    <option value="Auranagabad">Auranagabad</option>
                                </select>
                                <div class="invalid-feedback">Please select Location</div>
                            </div>

                            <div id="Auranagabad2" class="form-group col-md-6 col-sm-12 treatment">
                                <span class="fs-12 lh-16">Sut Girni Rd, Bhagatsingh Nagar, Kasliwal Nagar,
                                    Garkheda, Aurangabad.
                                </span>

                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="date">Select Date<span class="red">*</span></label>
                                <span class="fa fa-calendar-edit form-control-icon"></span>
                                <input id="datepicker" name="skin_date" type="text" class="form-control datepicker" />
                                <div class="invalid-feedback">Please Select Date</div>
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="slot">Preferable Timing<span class="red">*</span></label>
                                <span class="fa fa-clock form-control-icon"></span>
                                <select id="skintiming" name="skin_sloat" class="form-control mb-1 select">
                                    <option value="" selected="selected" disabled="disabled">Preferable
                                        Timing</option>
                                    <option value="10:00am to 01:00pm">10:00am to 01:00pm</option>
                                    <option value="03:00pm to 09:00pm">03:00pm to 09:00pm</option>
                                </select>
                                <div class="invalid-feedback">Please Select Preferable Timing</div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="Message">Message</label>
                                <span class="fa fa-envelope-square form-control-icon"></span>
                                <textarea type="text" id="skinmsg" name="skin_msg" class="form-control"
                                    placeholder="your Message"></textarea>
                                <div class="invalid-feedback">Please enter message</div>
                            </div>
                        </div>

                        <center>
                            <div class="slider-btn pb-20">
                                <button type="submit" class="btn ss-btn w-215" data-delay=".8s">Book Appointment <i
                                        class="fas fa-chevron-right"></i></button>
                            </div>
                        </center>
                        <?php  echo form_close();?>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php   $this->load->view('layout/footer2');   ?>
    <?php   $this->load->view('layout/script');   ?>

    <script>
    $(function() {
        $("#datepicker").datepicker({
            minDate: 0
        });
    });
    </script>
    <script>
    $(function() {
        $("#skindate").datepicker({
            minDate: 0
        });
    });
    </script>
    <script>
    $(function() {
        $(".skin_hospitallocation").change(function() {
            var val = $(this).val();
            if (val === "Auranagabad") {
                $("#Auranagabad2").show();
            } else {
                $("#Auranagabad2").hide();
            }
        });
    });
    </script>
</body>

</html>
