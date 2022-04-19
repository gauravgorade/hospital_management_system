<section class="shop-area pt-70 pb-30 p-relative wow fadeInUp animated" data-animation="fadeInUp animated"
    data-delay=".2s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title center-align mb-60 text-center">
                    <span>Our Treatments</span>
                    <h5 class="txtsize">Our Treatments</h5>
                    <p>We perform a wide range of treatments and procedures to treat the health, function and
                        beauty of skin throughout every stage of life.</p>
                </div>
            </div>
        </div>
        <div class="row txtcenter">
            <div class="col-md-4 col-sm-12 mb-30">
                <div class="card card-body shadow p-0">
                    <div class="endotreatment">
                        <a href="<?php echo base_url();?>skin/skindisorder"><img
                                src="<?php echo base_url();?>public/jaju/picture/skin/skinproblem.png"></a>
                    </div>
                    <h4 class="imagetxt"><a href="<?php echo base_url();?>skin/skindisorder">Skin Problems</a>
                    </h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-12  mb-30">
                <div class="card card-body shadow p-0">
                    <div class="endotreatment">
                        <a href="<?php echo base_url();?>skin/hairdisorder"><img
                                src="<?php echo base_url();?>public/jaju/picture/skin/hairproblem.png"></a>
                    </div>
                    <h4 class="imagetxt"><a href="<?php echo base_url();?>skin/hairdisorder">Hair Problems</a>
                    </h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-12  mb-30">
                <div class="card card-body shadow p-0">
                    <div class="endotreatment">
                        <a href="<?php echo base_url();?>skin/acnescar"><img
                                src="<?php echo base_url();?>public/jaju/picture/skin/acnescar2.png"></a>
                    </div>
                    <h4 class="imagetxt"><a href="<?php echo base_url();?>skin/acnescar">Acne Scar
                            Management</a></h4>
                </div>
            </div>
        </div>
        <div class="row txtcenter pt-20">
            <div class="col-md-4 col-sm-12  mb-30">
                <div class="card card-body shadow p-0">
                    <div class="endotreatment">
                        <a href="<?php echo base_url();?>skin/leprosy"><img
                                src="<?php echo base_url();?>public/jaju/picture/skin/leprosy2.png"></a>
                    </div>
                    <h4 class="imagetxt"><a href="<?php echo base_url();?>skin/leprosy">Leprosy</a></h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-12  mb-30">
                <div class="card card-body shadow p-0">
                    <div class="endotreatment">
                        <a href="<?php echo base_url();?>skin/skinbiopsy"><img
                                src="<?php echo base_url();?>public/jaju/picture/skin/skinbiopsy2.png"></a>
                    </div>
                    <h4 class="imagetxt"><a href="<?php echo base_url();?>skin/skinbiopsy">Skin Biopsy
                        </a></h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-12  mb-30">
                <div class="card card-body shadow p-0">
                    <div class="endotreatment">
                        <a href="<?php echo base_url();?>skin/chemicalpeeling"><img
                                src="<?php echo base_url();?>public/jaju/picture/skin/chemicalpeel.png"></a>
                    </div>
                    <h4 class="imagetxt"><a href="<?php echo base_url();?>skin/chemicalpeeling">Chemical
                            Peeling</a></h4>
                </div>
            </div>
        </div>
        <div class="row txtcenter pt-20">
            <div class="col-md-4 col-sm-12  mb-30">
                <div class="card card-body shadow p-0">
                    <div class="endotreatment">
                        <a href="<?php echo base_url();?>skin/cosmetictreatment"><img
                                src="<?php echo base_url();?>public/jaju/picture/skin/cosmetic.png"></a>
                    </div>
                    <h4 class="imagetxt"><a href="<?php echo base_url();?>skin/cosmetictreatment">Cosmetic
                            Treatments</a></h4>
                </div>
            </div>
            <div class="col-md-4 col-sm-12  mb-30">
                <div class="card card-body shadow p-0">
                    <div class="endotreatment">
                        <a href="<?php echo base_url();?>skin/sexuallytrasmitted"><img
                                src="<?php echo base_url();?>public/jaju/picture/skin/std.png"></a>
                    </div>
                    <h4 class="imagetxt"><a href="<?php echo base_url();?>skin/sexuallytrasmitted">Sexually
                            Transmitted Diseases</a></h4>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

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
                        <label for="name">Name <span class="red">*</span></label>
                        <span class="fa fa-user form-control-icon"></span>
                        <input type="text" class="form-control" name="name" id="name" class="form-control"
                            placeholder="Name" required>
                        <div class="invalid-feedback">Please enter your name</div>
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="email">Email</label>
                        <span class="fa fa-envelope form-control-icon"></span>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                        <div class="invalid-feedback">Please enter a valid email address</div>
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="age">Age<span class="red">*</span></label>
                        <span class="fa fa-users form-control-icon"></span>
                        <input type="number" id="age" name="age" class="form-control" placeholder="Age" required>
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
                        <input type="text" id="address" name="address" class="form-control" placeholder="Your Address">
                        <div class="invalid-feedback">Please enter address</div>
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="city">Your City<span class="red">*</span></label>
                        <span class="fas fa-city form-control-icon"></span>
                        <input type="text" id="city" name="city" class="form-control" placeholder="Enter Your City"
                            required>
                        <div class="invalid-feedback">Please enter city</div>
                    </div>
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="Treatmentforskin">Select Skin Treatment<span class="red">*</span></label>
                        <span class="fa fa-clock form-control-icon"></span>
                        <select id="skinTreatments" name="skinTreatments" class="form-control mb-1 select" required>
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
                            class="form-control mb-1 select skin_hospitallocation" required>
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
                        <input id="dateID1" name="skin_date" type="text" class="form-control" required />
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
                        <button type="submit" class="btn ss-btn w-215 buttonreg" data-delay=".8s">Book Appointment <i
                                class="fas fa-chevron-right"></i></button>
                    </div>
                </center>
                <?php  echo form_close();?>

            </div>
        </div>
    </div>
</div>



<script>
$(function() {
    $("#dateID1").datepicker({
        minDate: 0
    });
});
</script>
<script>
$(function() {
    $("#sadsdd").datepicker({
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