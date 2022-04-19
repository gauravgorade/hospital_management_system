<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php   $this->load->view('layout/style');   ?>

    <title> JAJU – Women | Hospital and Health </title>
    <meta name="description" content="JAJU – Home | Hospital and Health| ENDOVASCULAR">
    <meta name="keywords" content="JAJU – Home | Hospital and Health | ENDOVASCULAR">
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>public/jaju/css/styles.css" /> -->

</head>

<body>
    <?php   
    $this->load->view('layout/header3'); 
    ?>
    <main>
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(<?php echo base_url();?>public/jaju/picture/bread/womens.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h2 class="fs-24">Women Diseases </h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="<?php echo base_url();?>endovascular/endovascular.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Women Diseases</li>
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
                            <span>Women Treatments</span>
                            <h2>Women Treatments</h2>
                            <p class="mt-10">Fusce pharetra odio in urna laoreet laoreet. Aliquam erat volutpat.
                                Phasellus nec ligula arcu. Aliquam eu urna pulvinar, iaculis ipsum in, porta massa.</p>
                        </div>
                    </div>
                </div>

                <div class="st-tabs st-fade-tabs st-style1">
                    <ul class="row st-tab-links st-mp">
                        <li class="col-md-5 col-sm-12 card st-tab-title legredius legcol active"
                            style="margin-right:50px;">
                            <a href="#Uterus" class="st-blue-box pleg legredius">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/uterusfib.png"
                                    class="legimgs"> &nbsp; &nbsp;
                                <span class="womensize">Uterus Fibroids</span>
                            </a>
                        </li><br>
                        <li class="col-md-5 col-sm-12 card st-tab-title legredius legcol">
                            <a href="#Adenomyosis" class="st-red-box pleg legredius">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/adenomyosis.png"
                                    class="legimgs"> &nbsp; &nbsp;
                                <span class="womensize">Adenomyosis </span>
                            </a>
                        </li><br>
                        <li class="col-md-5 col-sm-12 card st-tab-title legredius legcol">
                            <a href="#Post" class="st-green-box pleg legredius">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/Postpartal.png"
                                    class="legimgs">
                                &nbsp; &nbsp;
                                <span class="womensize">Post partal hemorrhage</span>
                            </a>
                        </li><br>
                        <li class="col-md-5 col-sm-12 card st-tab-title legredius legcol">
                            <a href="#AVM" class="st-dip-blue-box pleg legredius">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/uterus.png"
                                    class="legimgs">&nbsp; &nbsp;
                                <span class="womensize">Uterus AVM</span>
                            </a>
                        </li><br>
                        <li class="col-md-5 col-sm-12 card st-tab-title legredius legcol">
                            <a href="#Pelvic" class="st-orange-box pleg legredius">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/pelvis2.png"
                                    class="legimgs">&nbsp; &nbsp;
                                <span class="womensize">Pelvic Congestion Syndrome</span>
                            </a>
                        </li><br>
                        <li class="col-md-5 col-sm-12 card st-tab-title legredius legcol">
                            <a href="#Placenta" class="st-gray2-box pleg legredius">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/placenta.png"
                                    class="legimgs">&nbsp; &nbsp;
                                <span class="womensize">Placenta Accreta and Percreta</span>
                            </a>
                        </li><br>
                    </ul>
                    <ul class="st-tab-links st-style1 st-mp0">
                        <li class="st-tab-title active ">
                            <a href="#Uterus" class="st-blue-box">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/uterusfib.png">
                                <span>Uterus Fibroids</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Adenomyosis" class="st-red-box">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/adenomyosis.png">
                                <span>Adenomyosis </span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Post" class="st-green-box">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/Postpartal.png">
                                <span>Post partal hemorrhage</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#AVM" class="st-dip-blue-box">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/uterus.png">
                                <span>Uterus AVM</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Pelvic" class="st-gray-box">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/pelvis2.png">
                                <span>Pelvic Congestion Syndrome</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Placenta" class="st-orange-box">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/placenta.png">
                                <span>Placenta Accreta and Percreta</span>
                            </a>
                        </li>
                    </ul>
                    <div class="st-height-b25 st-height-lg-b25"></div>
                    <div class="tab-content">
                        <div id="Uterus" class="st-tab active">
                            <section id="nev2" role="tab" class="about-area about-p mt-50 pb-40 p-relative"
                                style="background-image:url(<?php echo base_url();?>public/jaju/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="p-relative">
                                                <img src="<?php echo base_url();?>public/jaju/picture/endo/uterinefibroid.png"
                                                    alt="img">

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="about-content s-about-content pl-30">
                                                <div class="section-title mb-20">
                                                    <span class="abouthomespace">Women Diseases</span>
                                                    <h2>Uterus Fibroids</h2>
                                                </div>
                                                <p>The cause of fibroids is not well understood. Risk factors include a
                                                    family history of fibroids, obesity, or early onset of puberty.
                                                    Symptoms include excessive menstrual bleeding, prolonged periods,
                                                    and abdominal pain. In some cases, no symptoms appear.
                                                    Treatment includes medication and fibroid removal.</p>

                                                <ul class="nav text-center nav-pills" id="myTab" role="tablist">
                                                    <li class="nav-item pillsbtn mr-10">
                                                        <a class="nav-link tabsize active" id="desc-tab"
                                                            data-toggle="tab" href="#id-desc2" role="tab"
                                                            aria-controls="home" aria-selected="true">Symptoms </a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-10">
                                                        <a class="nav-link tabsize" id="id-add-in" data-toggle="tab"
                                                            href="#id-add2" role="tab" aria-controls="profile"
                                                            aria-selected="false">Treatment</a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-10">
                                                        <a class="nav-link tabsize" id="id-r" data-toggle="tab"
                                                            href="#id-rev2" role="tab" aria-controls="profile"
                                                            aria-selected="false">Aim</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="id-desc2" role="tabpanel"
                                                        aria-labelledby="desc-tab">
                                                        <div class="event-text mb-40">
                                                            <ul>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Benign
                                                                    tumors in uterus ("Garbha pishvi madhil gaath" in
                                                                    marathi)</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Excessive
                                                                    bleeding</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Irregular
                                                                    menses</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Pain in
                                                                    lower abdomen during menses</li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-add2" role="tabpanel"
                                                        aria-labelledby="id-add-in">
                                                        <div class="additional-info">
                                                            <div class="table-responsive">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;Uterine
                                                                        Fibroid Embolization (UFE)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-rev2" role="tabpanel"
                                                        aria-labelledby="id-r">
                                                        <div class="additional-info">
                                                            <div class="event-text mb-40">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;No need
                                                                        for removing the uterus.</li>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;If
                                                                        uterus is removed, ovaries are removed too which
                                                                        causes hormonal issues later in life.</li>
                                                                    <li class="fas fa-chevron-right">
                                                                        &nbsp;&nbsp;Treating without need to have any
                                                                        surgery done.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-btn ">
                                                    <a href="#diseasesappointment" data-toggle="modal"
                                                        class="btn ss-btn w-232" data-animation="fadeInRight"
                                                        data-delay=".8s">Book Appointment
                                                        <i class="fas fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                        </div>
                        <div id="Adenomyosis" class="st-tab treatment">
                            <section id="nev2" role="tab" class="about-area about-p mt-50 pb-40 p-relative"
                                style="background-image:url(<?php echo base_url();?>public/jaju/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="p-relative">
                                                <img src="<?php echo base_url();?>public/jaju/picture/endo/adenomyos.png"
                                                    alt="img">

                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="about-content s-about-content pl-30">
                                                <div class="section-title mb-20">
                                                    <span class="abouthomespace">Women Diseases</span>
                                                    <h2>Adenomyosis</h2>
                                                </div>
                                                <p>Adenomyosis often occurs late in the postpartum years and usually
                                                    disappears after menopause. Occasionally, adenomyosis can cause
                                                    heavy or prolonged menstrual bleeding, severe cramping, pain during
                                                    intercourse, or blood clots during periods. Some medications can
                                                    help reduce pain or reduce excessive bleeding. Hysterectomy is the
                                                    only treatment.</p>

                                                <ul class="nav text-center nav-pills" id="myTab" role="tablist">
                                                    <li class="nav-item pillsbtn mr-10">
                                                        <a class="nav-link tabsize active" id="tab1" data-toggle="tab"
                                                            href="#tab1" role="tab" aria-controls="home"
                                                            aria-selected="true">Symptoms </a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-10">
                                                        <a class="nav-link tabsize" id="id-add-in" data-toggle="tab"
                                                            href="#tab2" role="tab" aria-controls="profile"
                                                            aria-selected="false">Treatment</a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-10">
                                                        <a class="nav-link tabsize" id="id-r" data-toggle="tab"
                                                            href="#tab3" role="tab" aria-controls="profile"
                                                            aria-selected="false">Aim</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                                        aria-labelledby="desc-tab">
                                                        <div class="event-text mb-40">
                                                            <ul>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp; Excessive
                                                                    bleeding</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp; Irregular
                                                                    menses</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Pain in
                                                                    lower abdomen during menses</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab2" role="tabpanel"
                                                        aria-labelledby="id-add-in">
                                                        <div class="additional-info">
                                                            <div class="table-responsive">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;Uterine
                                                                        Fibroid Embolization (UFE)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab3" role="tabpanel"
                                                        aria-labelledby="id-r">
                                                        <div class="additional-info">
                                                            <div class="event-text mb-40">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;No need
                                                                        for removing the uterus.</li>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;If
                                                                        uterus is removed, ovaries are removed too which
                                                                        causes hormonal issues later in life.</li>
                                                                    <li class="fas fa-chevron-right">
                                                                        &nbsp;&nbsp;Treating without need to have any
                                                                        surgery done.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-btn ">
                                                    <a href="#diseasesappointment" data-toggle="modal"
                                                        class="btn ss-btn w-232" data-animation="fadeInRight"
                                                        data-delay=".8s">Book Appointment
                                                        <i class="fas fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                        </div>
                        <div id="Post" class="st-tab treatment">
                            <section id="nev3" role="tab" class="about-area about-p mt-50 pb-40 p-relative"
                                style="background-image:url(<?php echo base_url();?>public/jaju/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="p-relative">
                                                <img src="<?php echo base_url();?>public/jaju/picture/endo/Postpartumhemorrhage.jpg"
                                                    alt="img">

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="about-content s-about-content pl-30">
                                                <div class="section-title mb-20">
                                                    <span class="abouthomespace">Women Diseases</span>
                                                    <h2>Post Partal Hemorrhage</h2>
                                                </div>
                                                <p>Causes of postpartum hemorrhage include loss of uterine muscle tone,
                                                    bleeding disorder, or complete rupture or rupture of the placenta.
                                                    Symptoms include vaginal bleeding that does not slow down or stop.
                                                    This can lower blood pressure.
                                                    Treatment often includes uterine massage and medication. On rare
                                                    occasions, transfusion, removal of residual placenta, or
                                                    hysterectomy may be necessary.</p>

                                                <ul class="nav text-center nav-pills" id="myTab" role="tablist">
                                                    <li class="nav-item pillsbtn mr-10">
                                                        <a class="nav-link tabsize active" id="desc-tab"
                                                            data-toggle="tab" href="#id-desc3" role="tab"
                                                            aria-controls="home" aria-selected="true">Symptoms </a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-10">
                                                        <a class="nav-link tabsize" id="id-add-in" data-toggle="tab"
                                                            href="#id-add3" role="tab" aria-controls="profile"
                                                            aria-selected="false">Treatment</a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-10">
                                                        <a class="nav-link tabsize" id="id-r" data-toggle="tab"
                                                            href="#id-rev3" role="tab" aria-controls="profile"
                                                            aria-selected="false">Aim</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="id-desc3" role="tabpanel"
                                                        aria-labelledby="desc-tab">
                                                        <div class="event-text mb-40">
                                                            <ul>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;No stopping
                                                                    of bleeding after delivery or Caesarean section
                                                                    (LSCS).</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-add3" role="tabpanel"
                                                        aria-labelledby="id-add-in">
                                                        <div class="additional-info">
                                                            <div class="table-responsive">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;Uterine
                                                                        Artery Embolization (UAE)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-rev3" role="tabpanel"
                                                        aria-labelledby="id-r">
                                                        <div class="additional-info">
                                                            <div class="event-text mb-40">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp; No
                                                                        need for removing the uterus.</li>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp; TIf
                                                                        uterus is removed, ovaries are removed too which
                                                                        causes hormonal issues later in life.</li>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;
                                                                        Treating without need to have any surgery done.
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-btn ">
                                                    <a href="#diseasesappointment" data-toggle="modal"
                                                        class="btn ss-btn w-232" data-animation="fadeInRight"
                                                        data-delay=".8s">Book Appointment
                                                        <i class="fas fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                        </div>
                        <div id="AVM" class="st-tab treatment">
                            <section id="nev3" role="tab" class="about-area about-p mt-50 pb-40 p-relative"
                                style="background-image:url(<?php echo base_url();?>public/jaju/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="p-relative">
                                                <img src="<?php echo base_url();?>public/jaju/picture/endo/UterusAVM.jpg"
                                                    alt="img">

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="about-content s-about-content pl-30">
                                                <div class="section-title mb-20">
                                                    <span class="abouthomespace">Women Diseases</span>
                                                    <h2>Uterus AVM (Arterio-Venous Malformation)</h2>
                                                </div>
                                                <p>Uterine arterial malformation (AVM) is a rare condition, with less
                                                    than 100 cases reported in the literature. Despite being rare, it is
                                                    a potentially life-threatening condition. The report of the case
                                                    describes a 33-year-old woman who started bleeding after a secondary
                                                    birth. Transabdominal ultrasound of the pelvis (US) showed
                                                    multidirectional flow of the uterus and an enlarged vascular with a
                                                    major artery located on the left side wall. She also retained the
                                                    pregnancy product, making the diagnosis complicated.</p>

                                                <ul class="nav text-center nav-pills" id="myTab" role="tablist">
                                                    <li class="nav-item pillsbtn mr-10">
                                                        <a class="nav-link tabsize active" id="desc-tab"
                                                            data-toggle="tab" href="#tab4" role="tab"
                                                            aria-controls="home" aria-selected="true">Symptoms </a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-10">
                                                        <a class="nav-link tabsize" id="id-add-in" data-toggle="tab"
                                                            href="#tab5" role="tab" aria-controls="profile"
                                                            aria-selected="false">Treatment</a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-10">
                                                        <a class="nav-link tabsize" id="id-r" data-toggle="tab"
                                                            href="#tab6" role="tab" aria-controls="profile"
                                                            aria-selected="false">Aim</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="tab4" role="tabpanel"
                                                        aria-labelledby="desc-tab">
                                                        <div class="event-text mb-40">
                                                            <ul>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Excessive
                                                                    bleeding or passing of blood clots during menses.
                                                                </li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Irregular
                                                                    menses</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Pain in
                                                                    lower abdomen.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab5" role="tabpanel"
                                                        aria-labelledby="id-add-in">
                                                        <div class="additional-info">
                                                            <div class="table-responsive">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;Uterine
                                                                        AVM Embolization</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab6" role="tabpanel"
                                                        aria-labelledby="id-r">
                                                        <div class="additional-info">
                                                            <div class="event-text mb-40">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp; No
                                                                        need for removing the uterus.</li>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp; TIf
                                                                        uterus is removed, ovaries are removed too which
                                                                        causes hormonal issues later in life.</li>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;
                                                                        Treating without need to have any surgery done.
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-btn ">
                                                    <a href="#diseasesappointment" data-toggle="modal"
                                                        class="btn ss-btn w-232" data-animation="fadeInRight"
                                                        data-delay=".8s">Book Appointment
                                                        <i class="fas fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                        </div>
                        <div id="Pelvic" class="st-tab treatment">
                            <section id="nev3" role="tab" class="about-area about-p mt-50 pb-40 p-relative"
                                style="background-image:url(<?php echo base_url();?>public/jaju/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="p-relative">
                                                <img src="<?php echo base_url();?>public/jaju/picture/endo/PelvicCongestion.jpg"
                                                    alt="img">

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="about-content s-about-content pl-30">
                                                <div class="section-title mb-20">
                                                    <span class="abouthomespace">Women Diseases</span>
                                                    <h2>Pelvic Congestion Syndrome</h2>
                                                </div>
                                                <p>Pelvic congestion syndrome is a condition that causes severe
                                                    abdominal pain. This is believed to be due to nerve problems in the
                                                    abdominal area. This is the lower part of your abdomen.

                                                    Blood vessels are the blood vessels that carry blood back to the
                                                    heart. In some women, the nerves in the lower abdomen may stop
                                                    working well. Blood can form inside the blood vessels. When this
                                                    happens, the veins in your abdomen can grow and change shape, like
                                                    varicose veins. This can lead to pain and other symptoms of pelvic
                                                    congestion syndrome.</p>

                                                <ul class="nav text-center nav-pills" id="myTab" role="tablist">
                                                    <li class="nav-item pillsbtn mr-10">
                                                        <a class="nav-link tabsize active" id="desc-tab"
                                                            data-toggle="tab" href="#tab7" role="tab"
                                                            aria-controls="home" aria-selected="true">Symptoms </a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-10">
                                                        <a class="nav-link tabsize" id="id-add-in" data-toggle="tab"
                                                            href="#tab8" role="tab" aria-controls="profile"
                                                            aria-selected="false">Treatment</a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-10">
                                                        <a class="nav-link tabsize" id="id-r" data-toggle="tab"
                                                            href="#tab9" role="tab" aria-controls="profile"
                                                            aria-selected="false">Aim</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="tab7" role="tabpanel"
                                                        aria-labelledby="desc-tab">
                                                        <div class="event-text mb-40">
                                                            <ul>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Excessive
                                                                    bleeding or passing of blood clots during menses
                                                                </li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Irregular
                                                                    menses</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Pain in
                                                                    lower abdomen</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;PCOD
                                                                    (Hormonal issues in women because of accumulation of
                                                                    blood in veins of ovaries)</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Varicose
                                                                    veins (Big veins over legs)</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab8" role="tabpanel"
                                                        aria-labelledby="id-add-in">
                                                        <div class="additional-info">
                                                            <div class="table-responsive">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;Ovarian
                                                                        Vein Embolization (OVE)</li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab9" role="tabpanel"
                                                        aria-labelledby="id-r">
                                                        <div class="additional-info">
                                                            <div class="event-text mb-40">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp; No
                                                                        need for removing the uterus.</li>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp; If
                                                                        uterus is removed, ovaries are removed too which
                                                                        causes hormonal issues later in life.</li>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;
                                                                        Treating without need to have any surgery done.
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-btn ">
                                                    <a href="#diseasesappointment" data-toggle="modal"
                                                        class="btn ss-btn w-232" data-animation="fadeInRight"
                                                        data-delay=".8s">Book Appointment
                                                        <i class="fas fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                        </div>
                        <div id="Placenta" class="st-tab treatment">
                            <section id="nev3" role="tab" class="about-area about-p mt-50 pb-40 p-relative"
                                style="background-image:url(<?php echo base_url();?>public/jaju/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="p-relative">
                                                <img src="<?php echo base_url();?>public/jaju/picture/endo/PlacentaAccreta.png"
                                                    alt="img">

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="about-content s-about-content pl-30">
                                                <div class="section-title mb-20">
                                                    <span class="abouthomespace">Women Diseases</span>
                                                    <h2>Placenta Accreta and Percreta</h2>
                                                </div>
                                                <p>The placenta grows in your uterus (uterus) and supplies food and
                                                    oxygen to the baby through the navel.

                                                    Normally, the placenta grows on the top of the uterus and stays
                                                    there until your baby is born. In the last stages of labor, the
                                                    placenta separates from the uterine wall and your contractions help
                                                    push it into the vagina (birth canal). This is also called
                                                    postpartum.</p>

                                                <ul class="nav text-center nav-pills" id="myTab" role="tablist">
                                                    <li class="nav-item pillsbtn mr-10">
                                                        <a class="nav-link tabsize active" id="desc-tab"
                                                            data-toggle="tab" href="#tab10" role="tab"
                                                            aria-controls="home" aria-selected="true">Symptoms </a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-10">
                                                        <a class="nav-link tabsize" id="id-add-in" data-toggle="tab"
                                                            href="#tab11" role="tab" aria-controls="profile"
                                                            aria-selected="false">Treatment</a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-10">
                                                        <a class="nav-link tabsize" id="id-r" data-toggle="tab"
                                                            href="#tab12" role="tab" aria-controls="profile"
                                                            aria-selected="false">Aim</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="tab10" role="tabpanel"
                                                        aria-labelledby="desc-tab">
                                                        <div class="event-text mb-40">
                                                            <ul>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Threatened
                                                                    Delivery because child's placenta is deeply located
                                                                    into the uterus wall.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab11" role="tabpanel"
                                                        aria-labelledby="id-add-in">
                                                        <div class="additional-info">
                                                            <div class="table-responsive">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">
                                                                        &nbsp;&nbsp;Endovascular Balloon Occlusion
                                                                        assisted Delivery</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab12" role="tabpanel"
                                                        aria-labelledby="id-r">
                                                        <div class="additional-info">
                                                            <div class="event-text mb-40">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;
                                                                        Prevent loss of mother's life because of excess
                                                                        bleeding.</li>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp; No
                                                                        need for removing the uterus.</li>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp; If
                                                                        uterus is removed, ovaries are removed too which
                                                                        causes hormonal issues later in life.</li>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;
                                                                        Treating without need to have any surgery done.
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-btn ">
                                                    <a href="#diseasesappointment" data-toggle="modal"
                                                        class="btn ss-btn w-232" data-animation="fadeInRight"
                                                        data-delay=".8s">Book Appointment
                                                        <i class="fas fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                        </div>

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
