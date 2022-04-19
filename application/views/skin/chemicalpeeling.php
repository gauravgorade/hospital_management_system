<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php   $this->load->view('layout/style');?>
    <title> JAJU – Chemical Peeling | Hospital and Health </title>
    <meta name="description" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
    <meta name="keywords" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">

</head>

<body>
    <?php 
$this->load->view('layout/header2');     
?>

    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(<?php echo base_url(); ?>public/jaju/picture/bread/chemicalpeel.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h2 class="fs-24">Chemical Peeling</h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>skin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Chemical Peeling</li>
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
                            <img src="<?php echo base_url(); ?>public/jaju/picture/skin/chemicalpeeling3.png" alt="img">

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="about-content s-about-content pl-30">
                            <div class="section-title mb-20">
                                <span>Chemical Peeling</span>

                                <h2>Chemical solutions to improve your skin.</h2>
                            </div>
                            <p>Chemical peeling is a technique used to improve and smooth the texture of the skin.
                                Facial skin is mainly treated and blemishes can be corrected. Chemical peels are
                                intended to remove the outermost layers of the skin. To accomplish this task, the peel
                                of the selected fruit causes a controlled injury to the skin.</p>
                            <ul>
                                <li>
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">Fine lines under your eyes or around your mouth and wrinkling
                                        caused by sun damage, aging and hereditary factors.
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">Certain types of acne.
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">Dark patches (melasma) due to pregnancy or taking birth control
                                        pills.
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">Rough skin, scaly patches, dull complexion.

                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">Mild scarring.
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">Precancerous scaly spots called actinic keratosis.
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-chevron-right"></i></div>
                                    <div class="text">
                                        Sun spots, age spots, liver spots, freckles, uneven skin coloring.

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