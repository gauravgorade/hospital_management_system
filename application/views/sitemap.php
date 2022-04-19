<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php   $this->load->view('layout/style');   ?>

    <title> JAJU – Sitemap | Hospital and Health </title>
    <meta name="description" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
    <meta name="keywords" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
</head>
<style>
a {
    color: #000;
}
</style>

<body>
    <?php  
    $this->load->view('layout/header');   
    ?>
    <main>
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(<?php echo base_url(); ?>public/jaju/picture/bread/bread2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h2>Sitemap</h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sitemap</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mt-50">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <h3>Jaju clinic</h3>
                    <ul class="list-style-one">
                        <li><a href="<?php echo base_url(); ?>"> Home</a></li>
                        <li><a href="<?php echo base_url(); ?>about-us">About</a></li>
                        <li><a href="<?php echo base_url(); ?>contact-us">Contact</a></li>

                    </ul>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <h3>Jaju Skin clinic</h3>
                    <ul class="list-style-one">
                        <li><a href="<?php echo base_url(); ?>skin"> Skin</a></li>
                        <li><a href="<?php echo base_url(); ?>skin/treatment">Treatments</a></li>
                        <li><a href="<?php echo base_url(); ?>skin/gallery">Gallery</a></li>
                        <li><a href="<?php echo base_url(); ?>skin-blog">Blog</a></li>

                    </ul>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <h3>Jaju Endovascular clinic</h3>
                    <ul class="list-style-one">
                        <li><a href="<?php echo base_url(); ?>endovascular">Endovascular</a></li>
                        <li><a href="<?php echo base_url(); ?>endovascular-treatment">Treatments</a></li>
                        <li><a href="<?php echo base_url(); ?>endo-gallery">Gallery</a></li>
                        <li><a href="<?php echo base_url(); ?>endovascular-blog">Blog</a></li>
                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <h3>Speciality Links</h3>
                    <ul class="list-style-one">
                        <li><a href="<?php echo base_url(); ?>skin/treatment">Skin Speciality</a></li>
                        <li><a href="<?php echo base_url(); ?>endovascular-treatment">Endovascular Speciality</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <h3>Other Links</h3>
                    <ul class="list-style-one">
                        <li><a href="<?php echo base_url(); ?>disclaimer">Disclaimer</a></li>
                        <li><a href="<?php echo base_url(); ?>privacyPolicy">Privacy Policy</a></li>
                        <li><a href="<?php echo base_url(); ?>termsncondition">Terms & Condition</a></li>
                    </ul>
                </div>
            </div>
        </section>

    </main>
    <?php 
    $this->load->view('layout/footer');   
    $this->load->view('layout/script');
    ?>
</body>

</html>