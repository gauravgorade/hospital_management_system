<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php   $this->load->view('layout/style');?>


    <title> JAJU – Leprosy | Hospital and Health </title>
    <meta name="description" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
    <meta name="keywords" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">

</head>

<body>
    <?php   $this->load->view('layout/header2');   ?>

    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(<?php echo base_url(); ?>public/jaju/picture/bread/leprosy.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h2 class="fs-24">Leprosy</h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>skin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Leprosy</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <section id="about" class="about-area about-p mt-50 pb-40 p-relative"
            style="background-image:url(<?php echo base_url(); ?>public/jaju/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="p-relative">
                            <!-- <img src="<?php echo base_url(); ?>public/jaju/img/bg/illlustration.png" alt="img"> -->
                            <img src="<?php echo base_url(); ?>public/jaju/picture/skin/leprosy.png" alt="img">

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="about-content s-about-content pl-30">
                            <div class="section-title mb-20">
                                <span>Leprosy</span>
                                <h2>Beat Leprosy, Care for Mental Wellbeing.</h2>
                            </div>
                            <p>Hansen's disease (also known as leprosy) is an infection caused by
                                slow-growing bacteria called Mycobacterium leprae. It can affect
                                the nerves, skin, eyes, and lining of the nose (nasal mucosa).
                                With early diagnosis and treatment, the disease can be cured.
                                It can affect the skin, nerves of the hands and feet as well as eyes and the lining of
                                the nose.</p>

                            <ul>
                                <li>
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">Leprosy can be cured with 6-12 months of multi-drug therapy. An
                                        Early treatment avoids disability.
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">Spreads by airborne droplets.
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">Fewer than 100 thousand cases per year in India.
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