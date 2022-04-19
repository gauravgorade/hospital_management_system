<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php   $this->load->view('layout/style');   ?>
    <title> JAJU – Home | Hospital and Health </title>
    <meta name="description"
        content="Jaju Clinic - Skin, Endovascular and Varicose veins | Best Skin, Hair, Laser, Acne treatment by Specialist Doctor in Aurangabad | Best Endovascular, Vascular, Varicose Veins - Laser Surgery and Treatment in Aurangabad">
    <meta name="keywords"
        content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST Jaju Clinic - Skin, Endovascular and Varicose veins | Best Skin, Hair, Laser, Acne treatment by Specialist Doctor in Aurangabad | Best Endovascular, Vascular, Varicose Veins - Laser Surgery and Treatment in Aurangabad">

<style> 
.clip-star {
  background: gold;
  clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
  display: inline-block;
  height: 20px;
  width: 20px;
}

</style>
    </head>

<body>
    <?php   $this->load->view('layout/header');   ?>
    <!-- <?php   //$this->load->view('modal');   ?> -->

    <main>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
				    <?php   $i=0; foreach ($slider_data as $ssrow) { ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i;?>"<?php if ($i==0) { echo 'class="active"'; }?>></li>
				  <?php $i++; } ?>
               
            </ol>
            <div class="carousel-inner">
 <?php  $k=0; foreach ($slider_data as $ssrow) {
            $slider_path = $ssrow->img_path;
                        $link_url = $ssrow->button_link1;
                        ?>
 			  <div class="carousel-item <?php if ($k==0) { echo 'active'; }?>">
				   <img src="<?php echo base_url().'public/img/slider/'.$slider_path ?>"
                        class="d-block w-100 slider-img-height" alt="JAJU CLINIC">
                </div>

<?php $k++;   }  ?>

                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <section id="booking" class="booking-area p-relative">
            <div class="container">
                <!-- <form method="post" class="contact-form needs-validation" id="smallAppointment" novalidate> -->
                <?php  echo form_open_multipart('Book_appointment/homeshortappointment' ,'class="contact-form needs-validation" id="smallAppointment" novalidate'); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <ul>
                            <li>
                                <div class="contact-field p-relative c-name">
                                    <input name="yname" type="text" class="form-control" placeholder="Enter Your Name"
                                        required>
                                    <div class="invalid-feedback">Please enter name</div>
                                </div>
                            </li>
                            <li> 
                                <div class="contact-field p-relative c-name">
                                    <input name="mobileno" type="text" class="form-control"
                                        placeholder="Enter Your Mobile No"  maxlength="10" minlength="10"
										   onkeyup="this.value=this.value.replace(/[^\d]/,'')" pattern="[789][0-9]{9}" autocomplete="off"  required>
                                    <div class="invalid-feedback">Please enter Mobile No</div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-field p-relative c-name">
                                    <input name="city" id="city" type="text" class="form-control"
                                        placeholder="Enter City" required>
                                    <div class="invalid-feedback">Please enter Your City</div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-field p-relative c-name enquirylastfiled">
                                    <select name="servicesname" class="form-control br-22 fs-16" required>
                                        <option value="">Select Speciality</option>
                                        <option value="Endovascular">Endovascular Speciality
                                        </option>
                                        <option value="Skin">Skin Speciality</option>
                                    </select>
                                    <div class="invalid-feedback">Please select Speciality</div>
                                </div>
                            </li>

                            <li>
                                <div class="slider-btn">
                                    <button type="submit" class="btn ss-btn" data-delay=".8s">Enquire Now<i
                                            class="fas fa-chevron-right"></i></button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php  echo form_close();?>
                <!-- </form> -->
            </div>
        </section>
        <section id="services" class="services-area services-bg services-two pt-40 mt-20"
            style="background-image:url<?php echo base_url(); ?>public/jaju/picture/an-bg/an-bg02.png); background-size: contain; background-repeat: no-repeat;background-position: center center;"
            title="JAJU CLINIC" alt="JAJU CLINIC">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section-title text-center pl-40 pr-40 mb-50">
                            <span title="JAJU CLINIC">OUR SPECIALITIES</span>
                            <h1 class="txtsize" title="JAJU CLINIC">Our Specialities</h1>
                            <p class="mt-10">At Jaju Clinic, the individual needs of our patients and their families are
                                our first priority. Skin Care, Minimally invasive endovascular treatment of Varicose
                                Veins as well as all vascular disorders are the specialties of our clinic.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row sr-line">
                    <div class="col-lg-4 col-md-12">
                        <div class="s-single-services text-center active">
                            <div class="services-icon">
                                <img src="<?php echo base_url(); ?>public/jaju/picture/icon/skin.png" alt="JAJU CLINIC"
                                    title="JAJU CLINIC">
                            </div>
                            <div class="second-services-content">
                                <h5><a href="javascript:void(0);">Skin Care</a></h5>
                                <p>Skin care is a range of methods that support the integrity of
                                    the skin, enhance its appearance, and alleviate skin conditions. These may include
                                    nutrition, protection from excessive sunlight, and proper use of emollient.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 topbot">
                        <div class="s-single-services text-center">
                            <div class="services-icon">
                                <img src="<?php echo base_url(); ?>public/jaju/picture/icon/endo.png" alt="JAJU CLINIC"
                                    title="JAJU CLINIC">
                            </div>
                            <div class="second-services-content">
                                <h5><a href="javascript:void(0);">Endovascular Treatment</a></h5>
                                <p>We specialize in treating diseases that have the vascular disorder as their core
                                    issue using a minimally invasive endovascular (through the blood vessel) approach
                                    through just a small needle prick without the need to perform any major surgery.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="s-single-services text-center">
                            <div class="services-icon">
                                <img src="<?php echo base_url(); ?>public/jaju/picture/icon/vericose.png"
                                    alt="JAJU CLINIC" title="JAJU CLINIC">
                            </div>
                            <div class="second-services-content">
                                <h5><a href="javascript:void(0);">Varicose Veins</a></h5>
                                <p>Those big swollen tortuous veins under your leg skin must be treated before it’s too
                                    late !! We specialize in treating these using high-end Endovascular Minimally
                                    invasive Laser technology to completely treat them so that these won't ever bother
                                    you again.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about-area about-p pt-65 pb-30 aboutspace"
            style="background-image:url(<?php echo base_url(); ?>public/jaju/picture/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-12">
                        <div class="p-relative">
                            <img src="<?php echo base_url(); ?>public/jaju/picture/bread/about2.jpg" alt="JAJU CLINIC">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="about-content s-about-content pl-30">
                            <div class="section-title mb-20">
                                <span class="abouthomespace">About Us</span>
                                <h2 class="fs-40">Our Specialities Skin & Endovascular Treatments</h2>
                            </div>
                            <p> Jaju clinic is a unique and well-equipped Interventional Radiology clinic with
                                Endovascular treatment options for all diseases that can be treated by an endovascular
                                approach. Here patients are provided with unique needle-guided treatments for their
                                illnesses without the requirement of undergoing any major surgery. Minimally invasive
                                and Maximally effective treatment is the best way to treat patients.</p>
                            <ul>
                                <li>
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">
                                        Minimally invasive - All treatment is done through just a small needle prick. No
                                        cuts or stitches are required.
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">
                                        Quality of life of patient - Significantly improved quality of life of the
                                        patient because of all the above factors.
                                    </div>
                                </li>
                            </ul>

                            <div class="slider-btn mt-30">
                                <a href="<?php echo base_url(); ?>about-us" class="btn ss-btn"
                                    data-animation="fadeInRight" data-delay=".8s">Read More
                                    <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="department-area deptarea cta-bg pb-30 mt-10 fix"
            style="background-image:url(<?php echo base_url(); ?>public/jaju/picture/an-bg/an-bg05.png); background-size: contain;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-30  ">
                            <span title="JAJU CLINIC | WHY JAJU CLINIC">Why Choose Us</span>
                            <h3 class="txtsize" title="JAJU CLINIC">Our services are best as they are </h3>
                        </div>
                        <ul>
                            <li class="p-5">
                                <div class="icon">
                                    <div><img src="<?php echo base_url(); ?>public/jaju/picture/icon/cunt-icon01.png"
                                            alt="JAJU CLINIC | SKIN">
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="text">
                                    <h3 title="JAJU CLINIC | SKIN">Patient-Specific</h3>
                                    <h3 class="lihover">We realize that every disease and patient is different. We
                                        provide a treatment plan that is tailored as per the need of each patient. </h3>
                            </li>
                            <li class="p-5">
                                <div class="icon">
                                    <div><img src="<?php echo base_url(); ?>public/jaju/picture/icon/practise.png"
                                            alt="JAJU CLINIC | SKIN">
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="text">
                                    <h3 title="JAJU CLINIC | SKIN">Our Experience </h3>
                                    <h3 class="lihover">Vast experience in their respective specialties has enabled us
                                        to provide robust and specific specialty care to our patients. </h3>
                            </li>

                            <li class="p-5">
                                <div class="icon">
                                    <div><img src="<?php echo base_url(); ?>public/jaju/picture/icon/commitment.png"
                                            alt="JAJU CLINIC | ENDOVASCULAR">
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="text">
                                    <h3 title="JAJU CLINIC | ENDOVASCULAR">Our Compassion</h3>
                                    <h3 class="lihover">We work with compassion towards our patients and believe in
                                        serving people the best we can.</h3>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-6">
                        <div class="s-d-img p-relative mt30">
                            <img src="<?php echo base_url(); ?>public/jaju/picture/bg/de-illustration.png"
                                alt="JAJU CLINIC" class="imgwidth1">
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
	
			
        <div class="counter-area pb-50" style="background-image:url(<?php echo base_url(); ?>public/jaju/picture/an-bg/an-bg04.png); background-repeat: no-repeat; background-size: contain; ">
            <div class="container">
                <div class="section-title mb-50 mt30 txtcenter">
                    <span>Treatments offered</span>
                    <h3 class="txtsize5">Treatments offered</h3>
                </div>
						
			<div class="counter-area pt-100 pb-100" style="background-image:url(img/an-bg/an-bg04.png); background-repeat: no-repeat; background-size: contain; ">
                <div class="container">
                    <div class="row align-items-end">
                         <div class="col-lg-3 col-md-6 col-sm-12">
                           <div class="single-counter text-center" >
							 <img src="<?php echo base_url(); ?>public/jaju/picture/icon/happypatient.png" alt="img">
                                <div class="counter p-relative">
                                    <span class="count">1000</span><small>+</small>                                   
                                </div>
                                <p>Happy patients</p>                               
                            </div>
                        </div>
                      <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="single-counter text-center" >
								<img src="<?php echo base_url(); ?>public/jaju/picture/icon/procedure.png" alt="img">
                                <div class="counter p-relative">
                                    <span class="count">300</span><small>+</small>                                   
                                </div>
                                <p>Procedures</p>                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="single-counter text-center" >
								   <img src="<?php echo base_url(); ?>public/jaju/picture/icon/experience.png"  alt="img">
                                <div class="counter p-relative">
                                   <span class="count">4</span><small>+</small>                       
                                </div>
                                <p>Years of Experience</p>                      
                            </div>
                        </div>
                         <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="single-counter text-center" >
								   <img src="<?php echo base_url(); ?>public/jaju/picture/icon/specialist2.png" alt="img">
                                <div class="counter p-relative">
                                    <span class="count">10</span><small>+</small>                      
                                </div>
                             <p>Speciality services</p>                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- counter-area-end -->	
           
            </div>
        </div>

        <section class="department-area deptarea cta-bg pb-60 mt-10 fix"
            style="background-image:url(<?php echo base_url(); ?>public/jaju/picture/an-bg/an-bg05.png); background-size: contain;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-50 mt30">
                            <span>OUR SPECIALITIES</span>
                            <h3 class="txtsize5">Specialities in our Clinic</h3>
                        </div>
                        <ul>
                            <li class="p-7">
                                <a href="<?php echo base_url(); ?>endovascular">
                                    <div class="icon">
                                        <div><img src="<?php echo base_url(); ?>public/jaju/picture/icon/endo.png"
                                                alt="JAJU ENDOVASCULAR CLINIC">
                                        </div>
                                    </div>
                                    <a href="<?php echo base_url(); ?>endovascular" class="text">
                                        <h3 class="fs-20">Endovascular Speciality</h3>
                                        <h3 class="lihover">Well-equipped state-of-the-art department with minimally
                                            invasive treatments available for all Vascular diseases and those diseases
                                            that
                                            can be treated by an Endovascular approach.</h3>
                                    </a>
                                </a>
                            </li>
                            <li class="p-7">
                                <a href="<?php echo base_url(); ?>endovascular">
                                    <div class="icon">
                                        <div><img src="<?php echo base_url(); ?>public/jaju/picture/icon/skin.png"
                                                alt="JAJU SKIN CLINIC">
                                        </div>
                                    </div>
                                    <a href="<?php echo base_url(); ?>skin" class="text">
                                        <h3 class="fs-20">Skin Speciality</h3>
                                        <h3 class="lihover"> Skincare is the range of practices that support skin
                                            integrity,
                                            enhance its appearance, and relieve skin conditions.</h3>
                                    </a>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="s-d-img p-relative">
                            <img src="<?php echo base_url(); ?>public/jaju/picture/bread/tratment.png" alt="JAJU CLINIC"
                                class="imgwidth3">
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="call-area pb-50 pt-50 bgimgset ptb" id="callmodal">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="single-counter-img fadeInUp animated">
                            <img src="<?php echo base_url(); ?>public/jaju/picture/bg/ap-illustration.png"
                                alt="JAJU CLINIC" class="img">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="section-title pt-50">
                            <span>APPOINTMENT</span>
                            <h5 class="fs-34 mb-20" title="JAJU CLINIC">Make An Appointment For Speciality Treatments
                            </h5>
                            <h5 class="fs-28 txtcenter txtleft callcolor"> Call us Now: <br><i
                                    class="fa fa-phone callicon" aria-hidden="true"></i> <a
                                    href="tel:+91 844 606 0237">+91 844 606
                                    0237</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12">
                        <div class="slider-btn mt-130 mb-0">
                            <a href="#mainappointment" data-toggle="modal" class="btn ss-btn w-215 buttonreg"
                                data-animation="fadeInRight" data-delay=".8s">Book Appointment <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="team" class="pb-20 pt-40"
            style="background-image:url(<?php echo base_url(); ?>public/jaju/picture/an-bg/an-bg13.png); background-size: contain;background-position: center center;background-repeat: no-repeat;">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section-title text-center pl-40 pr-40 mb-20">
                            <span>Our Reviews</span>
                            <h6 class="txtsize" title="JAJU CLINIC">Reviews From Patients</h6>
                            <p class="mt-10">what our patients are saying about us.</p> 

                        </div>
                    </div>
                </div>
                <div class="row team-active">

 				<?php  	foreach ($review as $row) {  
                      $t_id = $row->t_id ;  $status = $row->status;  ?>

                    <div class="col-xl-4">
                        <div class="single-team mb-30">
                            <div class="team-thumb">
                                <div class="brd">
                                    <img src="<?php echo base_url(); ?>public/img/client/<?php echo $row->img_path ;?>"
                                        alt="JAJU CLINIC Reviews" class="wpx-100 img-round mgb-20">
                                </div>
                            </div>
                            <div class="team-info team-info-p text-center">
                                <p class="txtblack">"<?php echo $row->thought;?>"
                                </p>

<div>     
<?php  $rating = $row->rating;  if( $rating=="" or $rating==0){$rating=5;  }

for ($i=0; $i <  $rating; $i++) { 
   echo ' <div class="clip-star"></div>';
}
?>                
 
</div>     
                                <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false"> <?php echo  $row->full_name ;?> </h5>
                                <small class="font-cond case-u lts-sm fs-80 fg-text-l"
                                    contenteditable="false"> <?php echo $row->c_desc ;?></small>  <br>
                                   
                            </div>
                        </div>
                    </div>

 		 <?php  } ?>
            <div class="col-xl-4">
                        <div class="single-team mb-30">
                            <div class="team-thumb">
                                <div class="brd">
                                    <img src="<?php echo base_url(); ?>public/img/client/Male.jpg"
                                        alt="JAJU CLINIC Reviews" class="wpx-100 img-round mgb-20">
                                </div>
                            </div>
                            <div class="team-info team-info-p text-center">
                                <p class="txtblack">"मला Dvt (deep ven thrombosis) हा आजार डाव्या पायाला पाच वर्षांपासून
                                आहे...
                                मि औरंगाबाद येथे बऱ्याच दवाखान्यात दाखवले परंतु फरक पडला नाही...पायावर सुज येत होती..
                                नंतर मला डॉ जाजू सरांचा पत्ता मिळाला .. ट्रीटमेंट सुरू आहे...
                                आजार आज घडीला ७०% कमी झाला आहे."
                                </p>
                                <div><div class="clip-star"></div><div class="clip-star"></div><div class="clip-star"></div><div class="clip-star"></div><div class="clip-star"></div> </div>
                                <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Bhagwan Deshmukh </h5>
                                <small class="font-cond case-u lts-sm fs-80 fg-text-l"
                                    contenteditable="false"> Endovascular Patient 
                                
                                </small>
                            </div>
                        </div>
                    </div>

         
                     
                   
                    
                </div>
            </div>
            </div>
        </section>

        <div class="modal fade" id="mainappointment" style="z-index:10000;">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content form-wrapper">
                    <div class="close-box" data-dismiss="modal">
                        <i class="fa fa-times fa-2x"></i>
                    </div>
                    <div class="container-fluid mt-5" style="background-color:#fff; ">
                        <?php  echo form_open_multipart('Book_appointment/skeen_endo' ,'id="RegisterationForm" class="needs-validation" novalidate'); ?>
                        <div class="form-group text-center pb-2 mt34">
                            <h4>Book a Appointment</h4>
                        </div>
                        <div class="row">
                            <input type="hidden" name="url" value="<?php echo base_url().$this->uri->uri_string();?>">

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="name">Full Name<span class="red">*</span></label>
                                <span class="fa fa-user form-control-icon"></span>
                                <input type="text" class="form-control" name="name" id="name" class="form-control"
                                    placeholder="Enter Name" required>
                                <div class="invalid-feedback">Please enter your name</div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="email">Your Email</label>
                                <span class="fa fa-envelope form-control-icon"></span>
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Enter Email">
                                <div class="invalid-feedback">Please enter a valid email address</div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="age">Age<span class="red">*</span></label>
                                <span class="fa fa-users form-control-icon"></span>
                                <input type="text" id="age" name="age" class="form-control" placeholder="Your Age"
                                    required   onkeyup="if(!$.isNumeric(this.value)){this.value = this.value.slice(0,-1);}"
                                    pattern="[0-9]+" maxlength="3" minlength="1">
                                <div class="invalid-feedback">Please enter a age</div>
                            </div>

                            <div class="form-group col-md-6 col-sm-12"><br>
                                <label for="age">Gender<span class="red">*</span></label><br><br><br>
                                <input type="radio" id="male" name="gender" value="Male"> Male
                                <input type="radio" id="female" name="gender" value="Female"> Female
                                <div class="invalid-feedback">Please select Gender</div>
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
                                <label for="location">Select Speciality<span class="red">*</span></label>
                                <span class="fa fa-map-marker form-control-icon"></span>
                                <select name="selectspeciality" id="sdfnsfgfgjgnf" class="form-control mb-1 select"
                                    required>
                                    <option value="" selected disabled>Select Speciality</option>
                                    <option value="Endovascular">Endovascular Speciality
                                    </option>
                                    <option value="Skin">Skin Speciality</option>
                                </select>
                                <div class="invalid-feedback">Please select Speciality</div>
                            </div>
                        </div>

                        <div id="skin" class="treatment">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="location">Select Location<span class="red">*</span></label>
                                    <span class="fa fa-map-marker form-control-icon"></span>
                                    <select id="skinlocations" name="skin_hospitallocation"
                                        class="form-control mb-1 select skin_hospitallocation">
                                        <option value="" disabled selected>Select Location</option>
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
                                    <label for="Treatmentforskin">Select Skin Treatment<span
                                            class="red">*</span></label>
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
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="date">Select Date<span class="red">*</span></label>
                                    <span class="fa fa-calendar-edit form-control-icon"></span>
                                    <input id="skindate" name="skin_date" type="text" class="form-control datepicker" />
                                    <div class="invalid-feedback">Please Select Date</div>
                                </div>

                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="slot">Preferable Timing</label>
                                    <span class="fa fa-clock form-control-icon"></span>
                                    <select id="skintiming" name="skin_sloat" class="form-control mb-1 select">
                                        <option value="" disabled selected>Preferable
                                            Timing</option>
                                        <option value="10:00am to 01:00pm">10:00am to 01:00pm</option>
                                        <option value="03:00pm to 09:00pm">03:00pm to 09:00pm</option>
                                    </select>
                                    <div class="invalid-feedback">Please Select Preferable Timing</div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="Message">Message</label>
                                    <span class="fa fa-envelope-square form-control-icon"></span>
                                    <textarea id="skinmsg" name="skin_msg" class="form-control"
                                        placeholder="Message"></textarea>
                                    <div class="invalid-feedback">Please enter message</div>
                                </div>
                            </div>
                        </div>

                        <div id="endovascular" class="treatment">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="location">Select Location<span class="red">*</span></label>
                                    <span class="fa fa-map-marker form-control-icon"></span>
                                    <select id="endolocations" name="endo_hospitallocation"
                                        class="form-control mb-1 select fetchdatebylocation">
                                        <option value="" disabled selected>Select Location</option>
                                        <option value="Auranagabad">Auranagabad</option>
                                        <option value="Majalgaon">Majalgaon </option>
                                        <option value="Nanded">Nanded </option>
                                    </select>
                                    <div class="invalid-feedback">Please select Location</div>
                                </div>

                                <div class="form-group col-md-6 col-sm-12">
                                    <span id="abad" class="treatment fs-12 lh-16">
                                        Sut Girni Rd, Bhagatsingh Nagar, Kasliwal Nagar, Garkheda, Aurangabad.
                                    </span>
                                    <span id="majalgoan" class="treatment fs-12 lh-16">
                                        Jaju Hospital and Maternity Home, in front of the new bus stand,
                                        Shivaji Nagar, Beed Road, Majalgon, Dist. Beed
                                    </span>
                                    <span id="nanded" class="treatment fs-12 lh-16">
                                        Narayan Superspeciality Hospital (Kabade Hospital Complex)
                                        Near Mahavir Society, Shivaji Nagar, Nanded.
                                    </span>
                                </div>

                                <div class="form-group col-md-6 col-sm-12 fs-12"><br>
                                    <label for="age">Disease/Treatment<span class="red">*</span></label><br><br><br>
                                    <input type="radio" id="Disease" name="services" value="Disease"> Disease
                                    <input type="radio" id="Treatment" name="services" value="Treatment"> Treatment
                                </div>
                                <div class="form-group col-md-6 col-sm-12 treatment" id="endoTreatment">
                                    <label for="Treatmentforendovascular">Select Treatment<span
                                            class="red">*</span></label>
                                    <span class="fa fa-clock form-control-icon"></span>
                                    <select id="endovascularTreatment" name="endovascularTreatment"
                                        class="form-control mb-1 select">
                                        <option value="">Select Treatment</option>
                                        <optgroup label="Leg Treatment">
                                            <option value="Varicose veins">Varicose veins</option>
                                            <option value="Deep Vein Thrombosis (DVT)">Deep Vein Thrombosis (DVT)
                                            </option>
                                            <option value="Peripheral Artery Disease (PAD)">Peripheral Artery Disease
                                                (PAD)</option>
                                            <option value="Diabetic Foot Ulcer">Diabetic Foot Ulcer</option>
                                            <option value="Gangrene">Gangrene</option>
                                            <option value="Knee Osteoarthritis (Knee Arthritis)">Knee Osteoarthritis
                                                (Knee Arthritis)</option>
                                            <option value="Plantar Fascitis">Plantar Fascitis</option>
                                            <option value="Osteoid Osteoma">Osteoid Osteoma</option>
                                        </optgroup>
                                        <optgroup label="Lung Treatment">
                                            <option value="Pulmonary Embolism">Pulmonary Embolism</option>
                                        </optgroup>
                                        <optgroup label="Men's Treatment">
                                            <option value="BPH (Benign Prostatic Hypertrophy)">BPH (Benign Prostatic
                                                Hypertrophy)</option>
                                        </optgroup>
                                        <optgroup label="Women's Treatment">
                                            <option value="Uterus Fibroids">Uterus Fibroids</option>
                                            <option value="Adenomyosis">Adenomyosis</option>
                                            <option value="Post partal hemorrhage">Post partal hemorrhage</option>
                                            <option value="Uterus AVM (Arterio-Venous Malformation)">Uterus AVM
                                                (Arterio-Venous Malformation)</option>
                                            <option value="Pelvic Congestion Syndrome">Pelvic Congestion Syndrome
                                            </option>
                                            <option value="Placenta Accreta and Percreta">Placenta Accreta and
                                                Percreta
                                            </option>
                                        </optgroup>
                                        <optgroup label="Other Treatment">
                                            <option value="other">Other Treatment</option>
                                        </optgroup>
                                    </select>
                                    <div class="invalid-feedback">Please select Treatment</div>
                                </div>

                                <div class="form-group col-md-6 col-sm-12 treatment" id="endoDisease">
                                    <label for="Treatmentforendovascular">Select Disease<span
                                            class="red">*</span></label>
                                    <span class="fa fa-clock form-control-icon"></span>
                                    <select id="endovascularDiseaseTreatment" name="endovascularDisease"
                                        class="form-control mb-1 select">
                                        <option value="">Select Disease</option>
                                        <optgroup label="Leg Diseases">
                                            <option value="Varicose veins">Varicose veins</option>
                                            <option value="Deep Vein Thrombosis (DVT)">Deep Vein Thrombosis (DVT)
                                            </option>
                                            <option value="Peripheral Artery Disease (PAD)">Peripheral Artery Disease
                                                (PAD)</option>
                                            <option value="Diabetic Foot Ulcer">Diabetic Foot Ulcer</option>
                                            <option value="Gangrene">Gangrene</option>
                                            <option value="Knee Osteoarthritis (Knee Arthritis)">Knee Osteoarthritis
                                                (Knee Arthritis)</option>
                                            <option value="Plantar Fascitis">Plantar Fascitis</option>
                                            <option value="Osteoid Osteoma">Osteoid Osteoma</option>
                                        </optgroup>
                                        <optgroup label="Lung Diseases">
                                            <option value="Pulmonary Embolism">Pulmonary Embolism</option>
                                        </optgroup>
                                        <optgroup label="Men's Diseases">
                                            <option value="BPH (Benign Prostatic Hypertrophy)">BPH (Benign Prostatic
                                                Hypertrophy)</option>
                                        </optgroup>
                                        <optgroup label="Women's Diseases">
                                            <option value="Uterus Fibroids">Uterus Fibroids</option>
                                            <option value="Adenomyosis">Adenomyosis</option>
                                            <option value="Post partal hemorrhage">Post partal hemorrhage</option>
                                            <option value="Uterus AVM (Arterio-Venous Malformation)">Uterus AVM
                                                (Arterio-Venous Malformation)</option>
                                            <option value="Pelvic Congestion Syndrome">Pelvic Congestion Syndrome
                                            </option>
                                            <option value="Placenta Accreta and Percreta">Placenta Accreta and
                                                Percreta
                                            </option>
                                        </optgroup>
                                        <optgroup label="Other Diseases">
                                            <option value="other">Other Diseases</option>
                                        </optgroup>

                                    </select>
                                    <div class="invalid-feedback">Please select Treatment</div>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">

                                    <label for="date">Select Date<span class="red">*</span></label>
                                    <span class="fa fa-calendar-edit form-control-icon"></span>
                                    <input id="defaultdate" type="text" class="form-control" />
                                    <input id="endodate1" name="endodate1" type="text" class="form-control treatment" />
                                    <input id="endodate2" name="endodate2" type="text" class="form-control treatment" />
                                    <input id="endodate3" name="endodate3" type="text" class="form-control treatment" />
                                    <div class="invalid-feedback">Please Select Date</div>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="slot">Preferable Timing</label>
                                    <span class="fa fa-clock form-control-icon"></span>
                                    <select id="slot1254" name="endo_time" class="form-control mb-1 select">
                                        <option value="" disabled="disabled">Preferable Timing
                                        </option>
                                        <option id="first" value="10:00am to 01:00pm">10:00am to 01:00pm</option>
                                        <option id="second" value="03:00pm to 09:00pm">03:00pm to 09:00pm</option>
                                        <option id="third" value="10:00am to 05:00pm">10:00am to 05:00pm</option>
                                        <option id="fourth" value="10:00am to 04:00pm">10:00am to 04:00pm</option>
                                    </select>
                                    <div class="invalid-feedback">Please Preferable Timing</div>
                                </div>

                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="Message">Your Message</label>
                                    <span class="fa fa-envelope-square form-control-icon"></span>

                                    <textarea class="form-control" id="endo_msg" name="endo_msg"
                                        placeholder="message"></textarea>
                                </div>
                            </div>

                        </div>
                        <center>
                            <div class="slider-btn">
                                <button type="submit" id="submit" class="btn ss-btn w-215 buttonreg" data-delay=".8s"
                                    style="margin-bottom:10px !important;" onclick='validate()'>Book
                                    Appointment <i class="fas fa-chevron-right"></i></button>
                            </div>
                        </center>
                        <?php  echo form_close();?>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalLoginForm121" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="email" id="defaultForm-email" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                        </div>

                        <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input type="password" id="defaultForm-pass" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                        </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-default">Login</button>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once 'layout/footer.php'; ?>

        <?php require_once 'layout/script.php'; ?>

</body>

</html>
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$(function() {
    $("#sdfnsfgfgjgnf").change(function() {
        var val = $(this).val();
        if (val === "Endovascular") {
            $('#slot1254').attr('required', 'required');
            $('#endo_msg').attr('required', 'required');
            $('#endolocations').attr('required', 'required');

            $("#skinlocations").removeAttr("required");
            $("#skinTreatments").removeAttr("required");
            $("#skindate").removeAttr("required");
            $("#skintiming").removeAttr("required");
        } else if (val === "Skin") {
            $('#skinlocations').prop('required', 'required');
            $('#skinTreatments').prop('required', 'required');
            $('#skindate').attr('required', 'required');
            $('#skintiming').attr('required', 'required');

            $("#slot1254").removeAttr("required");
            $("#endo_msg").removeAttr("required");
            $("#endolocations").removeAttr("required");
        }
    });
});
</script>


<script>
$(function() {
    $("input[name='services']").change(function() {
        var val = $(this).val();
        if (val === "Disease") {
            $("#endoDisease").show();
            $("#endoTreatment").hide();
            $('#endovascularDiseaseTreatment').attr('required', 'required');
            $("#endovascularTreatment").removeAttr("required");
        } else if (val === "Treatment") {
            $("#endoTreatment").show();
            $("#endoDisease").hide();
            $('#endovascularTreatment').attr('required', 'required');
            $("#endovascularDiseaseTreatment").removeAttr("required");
        }
    });
});
</script>

<script>
$(function() {
    $("#sdfnsfgfgjgnf").change(function() {
        var val = $(this).val();
        if (val === "Endovascular") {
            $("#endovascular").show();
            $("#skin").hide();
        } else if (val === "Skin") {
            $("#skin").show();
            $("#endovascular").hide();
        }
    });
});


$(function() {
    $("#endolocations").change(function() {
        var val = $(this).val();
        if (val === "Auranagabad") {
            $("#abad, #first, #second, #endodate1").show();
            $("#nanded, #majalgoan, #third, #fourth, #endodate2, #endodate3, #defaultdate").hide();
            $('#endodate1').attr('required', 'required');

        } else if (val === "Majalgaon") {
            $("#majalgoan, #fourth, #endodate2").show();
            $("#abad, #nanded, #third, #abad, #first, #second, #endodate1, #endodate3, #defaultdate")
                .hide();
            $('#endodate2').attr('required', 'required');

        } else if (val === "Nanded") {
            $("#nanded, #third, #endodate3").show();
            $("#abad, #majalgoan, #first, #second, #fourth, #endodate1, #endodate2, #defaultdate")
                .hide();
            $('#endodate3').attr('required', 'required');

        } else {
            $("#defaultdate").show();
        }

    });
});
</script>

<script>
$(function() {
    $("#mainDate").datepicker({
        minDate: 0
    });
});
</script>


<script>
$("#endodate1").datepicker({
    minDate: 0,
    dateFormat: "mm-dd-yy",
    beforeShowDay: $.datepicker.noWeekends,
});

$("#endodate2").datepicker({
    dateFormat: 'dd-mm-yy',
    minDate: 0,
    beforeShowDay: enableSUNDAYS
})

function enableSUNDAYS(date) {
    var day = date.getDay();
    return [(day == 0), ''];
}

$("#endodate3").datepicker({
    beforeShowDay: nonWorkingDays,
    minDate: 0,
    firstDay: 1
});

function nonWorkingDays(date) {

    var day = date.getDay(),
        Sunday = 0,
        Monday = 1,
        Tuesday = 2,
        Wednesday = 3,
        Thursday = 4,
        Friday = 5,
        Saturday = 6;
    var week = 0 | date.getDate() / 7

    if (week == 2 || week == 4) {
        if (day == 6) {
            return [false];
        }
    }

    if (day == 0) {
        return [false];
    }
    if (day == 1) {
        return [false];
    }
    if (day == 2) {
        return [false];
    }
    if (day == 3) {
        return [false];
    }
    if (day == 4) {
        return [false];
    }
    if (day == 5) {
        return [false];
    }

    return [true];
}
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
<script type="text/javascript">
$(document).ready(function() {

    $("#male").prop("checked", true);

});
</script>
