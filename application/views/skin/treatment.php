<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php   $this->load->view('layout/style');   ?>
    <title> JAJU – Skin Treatment | Hospital and Health </title>
    <meta name="description" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
    <meta name="keywords" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">

</head>

<body>
    <?php   $this->load->view('layout/header2');   ?>

    <main>
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(<?php echo base_url(); ?>public/jaju/picture/bread/skingeneral2.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h1 class="fs-24">Treatments</h1>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>skin"
                                            title="jaju endovascular clinic">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Treatments</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="shop-area pt-30 pb-30 p-relative wow fadeInUp animated" data-animation="fadeInUp animated"
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
                    <div class="col-md-4 col-sm-12 pt-20">
                        <div class="card card-body shadow p-0">
                            <div class="endotreatment">
                                <a href="<?php echo base_url(); ?>skin/skindisorder"><img
                                        src="<?php echo base_url(); ?>public/jaju/picture/skin/skinproblem.png"></a>
                            </div>
                            <h4 class="imagetxt"><a href="<?php echo base_url(); ?>skin/skindisorder">Skin Problems</a>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 pt-20">
                        <div class="card card-body shadow p-0">
                            <div class="endotreatment">
                                <a href="<?php echo base_url(); ?>skin/hairdisorder"><img
                                        src="<?php echo base_url(); ?>public/jaju/picture/skin/hairproblem.png"></a>
                            </div>
                            <h4 class="imagetxt"><a href="<?php echo base_url(); ?>skin/hairdisorder">Hair Problems</a>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 pt-20">
                        <div class="card card-body shadow p-0">
                            <div class="endotreatment">
                                <a href="<?php echo base_url(); ?>skin/sexuallytrasmitted"><img
                                        src="<?php echo base_url(); ?>public/jaju/picture/skin/std.png"></a>
                            </div>
                            <h4 class="imagetxt"><a href="<?php echo base_url(); ?>skin/sexuallytrasmitted">Sexually
                                    Transmitted Diseases</a></h4>
                        </div>
                    </div>
                </div>
                <div class="row txtcenter">
                    <div class="col-md-4 col-sm-12 pt-20">
                        <div class="card card-body shadow p-0">
                            <div class="endotreatment">
                                <a href="<?php echo base_url(); ?>skin/leprosy"><img
                                        src="<?php echo base_url(); ?>public/jaju/picture/skin/leprosy2.png"></a>
                            </div>
                            <h4 class="imagetxt"><a href="<?php echo base_url(); ?>skin/leprosy">Leprosy</a></h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 pt-20">
                        <div class="card card-body shadow p-0">
                            <div class="endotreatment">
                                <a href="<?php echo base_url(); ?>skin/skinbiopsy"><img
                                        src="<?php echo base_url(); ?>public/jaju/picture/skin/skinbiopsy2.png"></a>
                            </div>
                            <h4 class="imagetxt"><a href="<?php echo base_url(); ?>skin/skinbiopsy">Skin Biopsy
                                </a></h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 pt-20">
                        <div class="card card-body shadow p-0">
                            <div class="endotreatment">
                                <a href="<?php echo base_url(); ?>skin/chemicalpeeling"><img
                                        src="<?php echo base_url(); ?>public/jaju/picture/skin/chemicalpeel.png"></a>
                            </div>
                            <h4 class="imagetxt"><a href="<?php echo base_url(); ?>skin/chemicalpeeling">Chemical
                                    Peeling</a></h4>
                        </div>
                    </div>

                </div>
                <div class="row txtcenter">
                    <div class="col-md-4 col-sm-12 pt-20">
                        <div class="card card-body shadow p-0">
                            <div class="endotreatment">
                                <a href="<?php echo base_url(); ?>skin/acnescar"><img
                                        src="<?php echo base_url(); ?>public/jaju/picture/skin/acnescar2.png"></a>
                            </div>
                            <h4 class="imagetxt"><a href="<?php echo base_url(); ?>skin/acnescar">Acne Scar
                                    Management</a></h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 pt-20">
                        <div class="card card-body shadow p-0">
                            <div class="endotreatment">
                                <a href="<?php echo base_url(); ?>skin/cosmetictreatment"><img
                                        src="<?php echo base_url(); ?>public/jaju/picture/skin/cosmetic.png"></a>
                            </div>
                            <h4 class="imagetxt"><a href="<?php echo base_url(); ?>skin/cosmetictreatment">Cosmetic
                                    Treatments</a></h4>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <?php   $this->load->view('layout/footer2');   ?>
    <?php   $this->load->view('layout/script');   ?>

</body>

</html>