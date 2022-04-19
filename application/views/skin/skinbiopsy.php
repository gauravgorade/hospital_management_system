<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php   $this->load->view('layout/style');?>

    <title> JAJU – Skin Biopsy | Hospital and Health </title>
    <meta name="description" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
    <meta name="keywords" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">

</head>

<body>
    <?php   $this->load->view('layout/header2');   ?>
    <main>
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(<?php echo base_url();?>public/jaju/picture/bread/skinbiopsy.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h2 class="fs-24">Skin Biopsy</h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>skin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Skin Biopsy</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about-area about-p mt-50 pb-40 p-relative"
            style="background-image:url(<?php echo base_url();?>public/jaju/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="p-relative">
                            <img src="<?php echo base_url();?>public/jaju/picture/skin/skinbiopsy.png" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="about-content s-about-content pl-30">
                            <div class="section-title mb-20">
                                <span>Skin Biopsy</span>
                                <h2>Let’s Knock Out Skin Cancer. </h2>
                            </div>
                            <p>A skin biopsy is a procedure that removes a small sample of skin for testing.
                                The skin sample is looked at under a microscope to check for skin cancer,
                                skin infections, or skin disorders such as psoriasis.</p>
                            <ul>
                                <li>
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">Advantages of punch biopsy include ease of performance and
                                        obtaining uniformly shaped tissue.
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">A pathology report is highly dependent on the quality of the
                                        biopsy that is submitted.
                                    </div>
                                </li>
                            </ul>
                            <div class="slider-btn mt-30">
                            <a href="#ds6dsdf65d5g" data-toggle="modal" class="btn ss-btn w-215 buttonreg"
                                    data-animation="fadeInRight" data-delay=".8s">Book Appointment <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php $this->load->view('skin/common'); ?>

    </main>
    <?php $this->load->view('layout/footer2'); ?>
    <?php $this->load->view('layout/script'); ?>


</body>

</html>