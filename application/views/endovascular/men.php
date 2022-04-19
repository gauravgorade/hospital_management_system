<!DOCTYPE html>
<html lang="zxx">

<head>
<?php   $this->load->view('layout/style');   ?>


    <title> JAJU – Mens | Hospital and Health </title>
    <meta name="description" content="JAJU – Home | Hospital and Health| ENDOVASCULAR">
    <meta name="keywords" content="JAJU – Home | Hospital and Health | ENDOVASCULAR">
    <link rel="stylesheet" href="<?php echo base_url();?>public/jaju/css/styles.css" />

</head>

<body>
<?php   
    $this->load->view('layout/header3'); 
    $this->load->view('layout/modals');   
    ?>

    <main>
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(<?php echo base_url();?>public/jaju/picture/bread/men.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h2 class="fs-24">Men Diseases </h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="<?php echo base_url();?>endovascular/endovascular.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Men Diseases</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="department">
            <div class="container mt-50">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section-title text-center pl-40 pr-40 mb-80">
                            <span>Men Treatments</span>
                            <h2>Men Treatments</h2>
                            <p class="mt-10">Fusce pharetra odio in urna laoreet laoreet. Aliquam erat volutpat.
                                Phasellus nec ligula arcu. Aliquam eu urna pulvinar, iaculis ipsum in, porta massa.</p>
                        </div>
                    </div>
                </div>
                <section class="about-area about-p pb-40 p-relative"
                    style="background-image:url(<?php echo base_url();?>public/jaju/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="p-relative">
                                    <img src="<?php echo base_url();?>public/jaju/picture/endo/mentreatment.png" alt="img">

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="about-content s-about-content pl-30">
                                    <div class="section-title mb-20">
                                        <span>Men Diseases</span>
                                        <h2>BPH (Benign Prostatic Hypertrophy)</h2>
                                    </div>
                                    <p>This type of prostate enlargement is not considered a precursor to prostate
                                        cancer.
                                        With this condition, urine flow may weaken or stop and start. In some cases,
                                        this can lead to infection, bladder stones, and decreased kidney function.
                                        Treatments include prostate, surgery, and minimally invasive surgery to relieve
                                        or compress the drug.</p>

                                    <ul class="nav text-center nav-pills" id="myTab" role="tablist">
                                        <li class="nav-item pillsbtn pillsbtn mr-4">
                                            <a class="nav-link" id="desc-tab" data-toggle="tab"
                                                href="#id-desc1" role="tab" aria-controls="home"
                                                aria-selected="true">Symptoms </a>
                                        </li>
                                        <li class="nav-item pillsbtn pillsbtn mr-4">
                                            <a class="nav-link" id="id-add-in" data-toggle="tab" href="#id-add1"
                                                role="tab" aria-controls="profile" aria-selected="false">Treatment</a>
                                        </li>
                                        <li class="nav-item pillsbtn pillsbtn">
                                            <a class="nav-link" id="id-r" data-toggle="tab" href="#id-rev1"
                                                role="tab" aria-controls="profile" aria-selected="false">Aim</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="id-desc1" role="tabpanel"
                                            aria-labelledby="desc-tab">
                                            <div class="event-text mb-40">
                                                <ul>
                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;Prostate Gland Becomed
                                                        big</li>
                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;Big prostate gland
                                                        causes urine obstruction</li>
                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;Sense of incomplete
                                                        urination after coming out from toilet</li>
                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;Drop by drop or narrow
                                                        stream of urine while urination</li>
                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;Having to go to toilet
                                                        many times in a day for urination</li>
                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;Having to wake up many
                                                        times at night for urination</li>
                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;Continuous dull pain in
                                                        lower abdomen</li>
                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;Sometimes, bleeding in
                                                        urine.</li>
                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;Sometimes nurine flow
                                                        is so much reduced that it stops completely.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="id-add1" role="tabpanel"
                                            aria-labelledby="id-add-in">
                                            <div class="additional-info">
                                                <div class="table-responsive">
                                                    <ul>
                                                        <li class="fas fa-chevron-right">
                                                            &nbsp;&nbsp;Prostatic Artery Embolization (PAE)
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="id-rev1" role="tabpanel" aria-labelledby="id-r">
                                            <div class="additional-info">
                                                <div class="event-text mb-40">
                                                    <ul>
                                                        <li class="fas fa-chevron-right">&nbsp;&nbsp; Block the blood supply to the prostate gland.</li>
                                                        <li class="fas fa-chevron-right">&nbsp;&nbsp; By doing so, it shrinks in size and symptoms reduce significantly.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-btn ">
                                        <a href="#diseasesappointment" data-toggle="modal" class="btn ss-btn w-232"
                                            data-animation="fadeInRight" data-delay=".8s">Book Appointment
                                            <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>



            </div>

            </div><!-- .st-tabs -->
            </div>
            <!-- <div class="st-height-b120 st-height-lg-b80"></div> -->
        </section>

        <?php   $this->load->view('endovascular/common');   ?>

</main>
<?php   $this->load->view('layout/footer3');   ?>
<?php   $this->load->view('layout/script');   ?>


<script src="<?php echo base_url();?>public/jaju/js/counter2.min.js"></script>

<script src="<?php echo base_url();?>public/jaju/js/main2.js"></script>
</body>

</html>