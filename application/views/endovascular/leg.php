<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php   $this->load->view('layout/style');   ?>

    <title> JAJU – Legs | Hospital and Health </title>
    <meta name="description" content="JAJU – Home | Hospital and Health| ENDOVASCULAR">
    <meta name="keywords" content="JAJU – Home | Hospital and Health | ENDOVASCULAR">
    <style>


    </style>
</head>

<body>
    <?php   
    $this->load->view('layout/header3'); 
    ?>

    <main>
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(<?php echo base_url();?>public/jaju/picture/bread/leg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h2 class="fs-24">Leg Diseases </h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="<?php echo base_url();?>endovascular/endovascular.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Leg Diseases</li>
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
                            <span>Leg Treatments</span>
                            <h2>Leg Treatments</h2>
                            <p class="mt-10">Leg pain can be sharp, dull, numb, tingling, burning, radiating, or sore.
                                It can be acute, that is, sudden and short-lived, or it can be chronic and persistent.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="st-tabs st-fade-tabs st-style1">
                    <ul class="row st-tab-links st-mp">
                        <li class="col-md-5 col-sm-12 card st-tab-title legredius legcol active"
                            style="margin-right:50px;">
                            <a href="#Vericose" class="st-blue-box pleg legredius">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/vericose.png"
                                    class="legimgs"> &nbsp; &nbsp;
                                <span class="legsize">Vericose Veins</span>
                            </a>
                        </li><br>
                        <li class="col-md-5 col-sm-12 card st-tab-title legredius legcol">
                            <a href="#Deep" class="st-red-box pleg legredius">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/deepvein.png"
                                    class="legimgs"> &nbsp; &nbsp;
                                <span class="legsize">Deep Vein Thrombosis </span>
                            </a>
                        </li><br>
                        <li class="col-md-5 col-sm-12 card st-tab-title legredius legcol">
                            <a href="#Peripheral" class="st-green-box pleg legredius">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/artery.png" class="legimgs">
                                &nbsp; &nbsp;
                                <span class="legsize">Peripheral Artery</span>
                            </a>
                        </li><br>
                        <li class="col-md-5 col-sm-12 card st-tab-title legredius legcol">
                            <a href="#Diabetic" class="st-dip-blue-box pleg legredius">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/diabeticfood.png"
                                    class="legimgs">&nbsp; &nbsp;
                                <span class="legsize">Diabetic Foot Ulcer</span>
                            </a>
                        </li><br>
                        <li class="col-md-5 col-sm-12 card st-tab-title legredius legcol">
                            <a href="#Gangrene" class="st-orange-box pleg legredius">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/gangrene.png"
                                    class="legimgs">&nbsp; &nbsp;
                                <span class="legsize">Gangrene</span>
                            </a>
                        </li><br>
                        <li class="col-md-5 col-sm-12 card st-tab-title legredius legcol">
                            <a href="#Knee" class="st-gray2-box pleg legredius">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/knee.png"
                                    class="legimgs">&nbsp; &nbsp;
                                <span class="legsize">Knee Osteoarthritis</span>
                            </a>
                        </li><br>
                        <li class="col-md-5 col-sm-12 card st-tab-title legredius legcol">
                            <a href="#Plantar" class="st-gray3-box pleg legredius">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/planterfascitis.png"
                                    class="legimgs">&nbsp; &nbsp;
                                <span class="legsize">Plantar Fascitis</span>
                            </a>
                        </li><br>
                        <li class="col-md-5 col-sm-12 card st-tab-title legredius legcol">
                            <a href="#Osteoid" class="st-gray-box pleg legredius">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/osteoid.png"
                                    class="legimgs">&nbsp; &nbsp;
                                <span class="legsize">Osteoid Osteoma</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="st-tab-links st-style1 st-mp mt-50">
                        <li class="st-tab-title active">
                            <a href="#Vericose" class="st-blue-box">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/vericose.png">
                                <span>Vericose Veins</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Deep" class="st-red-box">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/deepvein.png">
                                <span>Deep Vein Thrombosis </span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Peripheral" class="st-green-box">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/artery.png">
                                <span>Peripheral Artery</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Diabetic" class="st-dip-blue-box">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/diabeticfood.png">
                                <span>Diabetic Foot Ulcer</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Gangrene" class="st-orange-box">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/gangrene.png">
                                <span>Gangrene</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Knee" class="st-gray2-box">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/knee.png">
                                <span>Knee Osteoarthritis</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Plantar" class="st-gray3-box">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/planterfascitis.png">
                                <span>Plantar Fascitis</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Osteoid" class="st-gray-box">
                                <img src="<?php echo base_url();?>public/jaju/picture/endo/osteoid.png">
                                <span>Osteoid Osteoma</span>
                            </a>
                        </li>
                    </ul>

                    <div class="st-height-b25 st-height-lg-b25"></div>
                    <div class="tab-content">
                        <div id="Vericose" class="st-tab active">
                            <section class="about-area about-p mt-50 pb-40 p-relative"
                                style="background-image:url(<?php echo base_url();?>public/jaju/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="p-relative">
                                                <img src="<?php echo base_url();?>public/jaju/picture/endo/vericosetratment.png"
                                                    alt="img">

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="about-content s-about-content pl-30">
                                                <div class="section-title mb-20">
                                                    <span>Leg Diseases</span>
                                                    <h2>Varicose veins</h2>
                                                </div>
                                                <p>Enlarged veins, usually seen in the legs and feet.
                                                    Varicose veins are usually benign. The cause of this condition is
                                                    not known.
                                                    For most people, there are no symptoms and varicose veins are just a
                                                    cosmetic concern. In some cases, they increase pain and discomfort
                                                    or indicate an underlying circulatory problem.
                                                    Treatment includes compression stockings, exercise or vein closure
                                                    or removal procedures.</p>

                                                <ul class="nav text-center nav-pills" id="myTab" role="tablist">
                                                    <li class="nav-item pillsbtn pillsbtn mr-4">
                                                        <a class="nav-link tabsize" id="desc-tab" data-toggle="tab"
                                                            href="#id-desc1" role="tab" aria-controls="home"
                                                            aria-selected="true">Symptoms </a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-4">
                                                        <a class="nav-link tabsize" id="id-add-in" data-toggle="tab"
                                                            href="#id-add1" role="tab" aria-controls="profile"
                                                            aria-selected="false">Treatment</a>
                                                    </li>
                                                    <li class="nav-item pillsbtn">
                                                        <a class="nav-link tabsize" id="id-r" data-toggle="tab"
                                                            href="#id-rev1" role="tab" aria-controls="profile"
                                                            aria-selected="false">Aim</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="id-desc1" role="tabpanel"
                                                        aria-labelledby="desc-tab">
                                                        <div class="event-text mb-40">
                                                            <ul>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp; Big Veins
                                                                    visible on legs</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Swelling
                                                                    over foot and ankle</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Dragging
                                                                    type of pain in calfs</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Feeling of
                                                                    heaviness in legs in evening</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Itching in
                                                                    legs</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Bleeding
                                                                    from big veins on legs</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Ulcer over
                                                                    lower leg</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Black skin
                                                                    patches</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-add1" role="tabpanel"
                                                        aria-labelledby="id-add-in">
                                                        <div class="additional-info">
                                                            <div class="table-responsive">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">
                                                                        &nbsp;&nbsp;Endovenous Laser Ablation (EVLA)
                                                                    </li>
                                                                    <li class="fas fa-chevron-right">
                                                                        &nbsp;&nbsp;Sclerotherapy</li>
                                                                    <li class="fas fa-chevron-right">
                                                                        &nbsp;&nbsp;Endovenous Glue Injection</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-rev1" role="tabpanel"
                                                        aria-labelledby="id-r">
                                                        <div class="additional-info">
                                                            <div class="event-text mb-40">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp; Treat
                                                                        all varicose veins completely</li>
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
                        <div id="Deep" class="st-tab treatment">
                            <section id="nev2" role="tab" class="about-area about-p mt-50 pb-40 p-relative"
                                style="background-image:url(<?php echo base_url();?>public/jaju/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="p-relative">
                                                <img src="<?php echo base_url();?>public/jaju/picture/endo/deepveintreat.png"
                                                    alt="img">

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="about-content s-about-content pl-30">
                                                <div class="section-title mb-20">
                                                    <span>Leg Diseases</span>
                                                    <h2 class="fs-44">Deep Vein Thrombosis</h2>
                                                </div>
                                                <p>A blood clot in a deep vein, usually in the legs.
                                                    This condition is serious because blood clots can loosen and lodge
                                                    in the lungs.
                                                    Leg pain or swelling may occur, but there may be no symptoms.
                                                    Treatments include medication and use of compression stockings.
                                                </p>
                                                <ul class="nav text-center nav-pills" id="myTab" role="tablist">
                                                    <li class="nav-item pillsbtn mr-4">
                                                        <a class="nav-link active" id="desc-tab" data-toggle="tab"
                                                            href="#id-desc2" role="tab" aria-controls="home"
                                                            aria-selected="true">Symptoms </a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-4">
                                                        <a class="nav-link" id="id-add-in" data-toggle="tab"
                                                            href="#id-add2" role="tab" aria-controls="profile"
                                                            aria-selected="false">Treatment</a>
                                                    </li>
                                                    <li class="nav-item pillsbtn">
                                                        <a class="nav-link" id="id-r" data-toggle="tab" href="#id-rev2"
                                                            role="tab" aria-controls="profile"
                                                            aria-selected="false">Aim</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="id-desc2" role="tabpanel"
                                                        aria-labelledby="desc-tab">
                                                        <div class="event-text mb-40">
                                                            <ul>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Clot
                                                                    develops in leg vein</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Big sudden
                                                                    swelling over leg</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Skin of
                                                                    foot soles turn bluish</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Clear fluid
                                                                    filled blisters over legs</li>
                                                                <li class="fas fa-chevron-right lh20">&nbsp;&nbsp;Risk
                                                                    of
                                                                    Pulmonary embolism (Risk of the Clot going in Legs
                                                                    with the blood flow and stopping blood flow of
                                                                    Legs)</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-add2" role="tabpanel"
                                                        aria-labelledby="id-add-in">
                                                        <div class="additional-info">
                                                            <div class="table-responsive">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;
                                                                        Pharmaco-Mechanical Thrombectomy (PMT)(Remove
                                                                        the clot)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-rev2" role="tabpanel"
                                                        aria-labelledby="id-r">
                                                        <div class="additional-info">
                                                            <div class="event-text mb-40">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp; Remove
                                                                        the clot or else patient will have leg swelling
                                                                        for entire life in more or less amount if
                                                                        treated with only blood thinning medicines.</li>
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
                        <div id="Peripheral" class="st-tab treatment">
                            <section id="nev3" role="tab" class="about-area about-p mt-50 pb-40 p-relative"
                                style="background-image:url(<?php echo base_url();?>public/jaju/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="p-relative">
                                                <img src="<?php echo base_url();?>public/jaju/picture/endo/Peripheralartery.png"
                                                    alt="img">

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="about-content s-about-content pl-30">
                                                <div class="section-title mb-20">
                                                    <span>Leg Diseases</span>
                                                    <h2 class="fs-40">Peripheral Artery Disease</h2>
                                                </div>
                                                <p>Peripheral vascular disease is a symptom of fatty deposits and
                                                    calcium formation in the arterial walls (atherosclerosis). Risk
                                                    factors include aging, diabetes, and smoking.
                                                    Symptoms may include leg pain, especially when walking.
                                                    Tobacco cessation, exercise and a healthy diet are usually
                                                    successful treatments. When these changes are not enough,
                                                    medications or surgery can help.
                                                </p>

                                                <ul class="nav text-center nav-pills" id="myTab" role="tablist">
                                                    <li class="nav-item pillsbtn mr-4">
                                                        <a class="nav-link active" id="desc-tab" data-toggle="tab"
                                                            href="#id-desc3" role="tab" aria-controls="home"
                                                            aria-selected="true">Symptoms </a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-4">
                                                        <a class="nav-link" id="id-add-in" data-toggle="tab"
                                                            href="#id-add3" role="tab" aria-controls="profile"
                                                            aria-selected="false">Treatment</a>
                                                    </li>
                                                    <li class="nav-item pillsbtn">
                                                        <a class="nav-link" id="id-r" data-toggle="tab" href="#id-rev3"
                                                            role="tab" aria-controls="profile"
                                                            aria-selected="false">Aim</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="id-desc3" role="tabpanel"
                                                        aria-labelledby="desc-tab">
                                                        <div class="event-text mb-40">
                                                            <ul>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Severe pain
                                                                    in legs after walking for some distance making the
                                                                    person stop and rest before getting up again.</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Sometimes
                                                                    leg pain is there even at rest and increased on
                                                                    walking</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-add3" role="tabpanel"
                                                        aria-labelledby="id-add-in">
                                                        <div class="additional-info">
                                                            <div class="table-responsive">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;
                                                                        Endovascular recanalization by Angioplasty SOS
                                                                        Stenting</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-rev3" role="tabpanel"
                                                        aria-labelledby="id-r">
                                                        <div class="additional-info">
                                                            <div class="event-text mb-40">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp; So
                                                                        that patient must be able to do daily tasks
                                                                        without any external support.</li>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp; To
                                                                        relieve a person of the disability he develops
                                                                        in this disease due to pain.</li>
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
                        <div id="Diabetic" class="st-tab treatment">
                            <section id="nev4" role="tab" class="about-area about-p mt-50 pb-40 p-relative"
                                style="background-image:url(<?php echo base_url();?>public/jaju/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="p-relative">
                                                <img src="<?php echo base_url();?>public/jaju/picture/endo/diabeticfoodtreat.png"
                                                    alt="img">

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="about-content s-about-content pl-30">
                                                <div class="section-title mb-20">
                                                    <span>Leg Diseases</span>
                                                    <h2>Diabetic Foot Ulcer</h2>
                                                </div>
                                                <p>Diabetic foot ulcer is an open blister or lesion that occurs in about
                                                    15 percent of patients with diabetes and is usually at the base of
                                                    the foot. About 6 percent of those who develop foot ulcers will be
                                                    hospitalized due to infection or other complications related to
                                                    ulcers.</p>

                                                <ul class="nav text-center nav-pills" id="myTab" role="tablist">
                                                    <li class="nav-item pillsbtn mr-4">
                                                        <a class="nav-link active" id="desc-tab" data-toggle="tab"
                                                            href="#id-desc4" role="tab" aria-controls="home"
                                                            aria-selected="true">Symptoms </a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-4">
                                                        <a class="nav-link" id="id-add-in" data-toggle="tab"
                                                            href="#id-add4" role="tab" aria-controls="profile"
                                                            aria-selected="false">Treatment</a>
                                                    </li>
                                                    <li class="nav-item pillsbtn">
                                                        <a class="nav-link" id="id-r" data-toggle="tab" href="#id-rev4"
                                                            role="tab" aria-controls="profile"
                                                            aria-selected="false">Aim</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="id-desc4" role="tabpanel"
                                                        aria-labelledby="desc-tab">
                                                        <div class="event-text mb-40">
                                                            <ul>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Non healing
                                                                    wound over foot and soles</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Pain in
                                                                    legs even at rest</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-add4" role="tabpanel"
                                                        aria-labelledby="id-add-in">
                                                        <div class="additional-info">
                                                            <div class="table-responsive">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;
                                                                        Endovascular recanalization by Angioplasty SOS
                                                                        Stenting+ Wound care</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-rev4" role="tabpanel"
                                                        aria-labelledby="id-r">
                                                        <div class="additional-info">
                                                            <div class="event-text mb-40">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp; Wound
                                                                        healing without requiring major amputation</li>

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
                        <div id="Gangrene" class="st-tab treatment">
                            <section id="nev5" role="tab" class="about-area about-p mt-50 pb-40 p-relative"
                                style="background-image:url(<?php echo base_url();?>public/jaju/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="p-relative">
                                                <img src="<?php echo base_url();?>public/jaju/picture/endo/gangrene.png"
                                                    alt="img">

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="about-content s-about-content pl-30">
                                                <div class="section-title mb-20">
                                                    <span>Leg Diseases</span>
                                                    <h2>Gangrene</h2>
                                                </div>
                                                <p>Tissue death often occurs in the limbs or skin due to loss of blood
                                                    supply. This condition often affects the fingers, toes and limbs,
                                                    but can also affect muscles and limbs.
                                                    Symptoms include discolored skin, severe pain followed by numbness
                                                    and discharge.
                                                    Gangrene requires immediate care. Treatment includes antibiotics and
                                                    removal of dead tissue.</p>

                                                <ul class="nav text-center nav-pills" id="myTab" role="tablist">
                                                    <li class="nav-item pillsbtn mr-4">
                                                        <a class="nav-link active" id="desc-tab" data-toggle="tab"
                                                            href="#id-desc5" role="tab" aria-controls="home"
                                                            aria-selected="true">Symptoms </a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-4">
                                                        <a class="nav-link" id="id-add-in" data-toggle="tab"
                                                            href="#id-add5" role="tab" aria-controls="profile"
                                                            aria-selected="false">Treatment</a>
                                                    </li>
                                                    <li class="nav-item pillsbtn">
                                                        <a class="nav-link" id="id-r" data-toggle="tab" href="#id-rev5"
                                                            role="tab" aria-controls="profile"
                                                            aria-selected="false">Aim</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="id-desc5" role="tabpanel"
                                                        aria-labelledby="desc-tab">
                                                        <div class="event-text mb-40">
                                                            <ul>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Black
                                                                    colored shrivelled toes and/ or forefoot</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Pain in
                                                                    legs even at rest</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp; Cold feet
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-add5" role="tabpanel"
                                                        aria-labelledby="id-add-in">
                                                        <div class="additional-info">
                                                            <div class="table-responsive">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;
                                                                        Endovascular recanalization by Angioplasty SOS
                                                                        Stenting+ Wound care</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-rev5" role="tabpanel"
                                                        aria-labelledby="id-r">
                                                        <div class="additional-info">
                                                            <div class="event-text mb-40">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp; Wound
                                                                        healing without requiring major amputation</li>

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
                        <div id="Knee" class="st-tab treatment">
                            <section id="nev6" role="tab" class="about-area about-p mt-50 pb-40 p-relative"
                                style="background-image:url(<?php echo base_url();?>public/jaju/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="p-relative">
                                                <img src="<?php echo base_url();?>public/jaju/picture/endo/legpain.png"
                                                    alt="img">

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="about-content s-about-content pl-30">
                                                <div class="section-title mb-20">
                                                    <span>Leg Diseases</span>
                                                    <h2>Knee Osteoarthritis</h2>
                                                </div>
                                                <p>The protective tissue at the ends of the bones (cartilage) falls off
                                                    slowly and deteriorates over time.
                                                    The most common symptoms are joint pain in the hands, neck, lower
                                                    back, knees or buttocks.
                                                    Medications, physiotherapy and sometimes surgery help reduce pain
                                                    and maintain joint movement.</p>

                                                <ul class="nav text-center nav-pills" id="myTab" role="tablist">
                                                    <li class="nav-item pillsbtn mr-4">
                                                        <a class="nav-link active" id="desc-tab" data-toggle="tab"
                                                            href="#id-desc6" role="tab" aria-controls="home"
                                                            aria-selected="true">Symptoms </a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-4">
                                                        <a class="nav-link" id="id-add-in" data-toggle="tab"
                                                            href="#id-add6" role="tab" aria-controls="profile"
                                                            aria-selected="false">Treatment</a>
                                                    </li>
                                                    <li class="nav-item pillsbtn">
                                                        <a class="nav-link" id="id-r" data-toggle="tab" href="#id-rev6"
                                                            role="tab" aria-controls="profile"
                                                            aria-selected="false">Aim</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="id-desc6" role="tabpanel"
                                                        aria-labelledby="desc-tab">
                                                        <div class="event-text mb-40">
                                                            <ul>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Pain in
                                                                    knee joint</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Stiffness
                                                                    in knee joint</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp; Inability
                                                                    to perform day to day tasks because of pain and
                                                                    stiffness in knee joint</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-add6" role="tabpanel"
                                                        aria-labelledby="id-add-in">
                                                        <div class="additional-info">
                                                            <div class="table-responsive">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;
                                                                        Genicular Artery Embolization (GAE)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-rev6" role="tabpanel"
                                                        aria-labelledby="id-r">
                                                        <div class="additional-info">
                                                            <div class="event-text mb-40">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;To
                                                                        treat the root cause of knee joint destruction
                                                                        i.e. Chronic inflammation</li>
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
                        <div id="Plantar" class="st-tab treatment">
                            <section id="nev7" role="tab" class="about-area about-p mt-50 pb-40 p-relative"
                                style="background-image:url(<?php echo base_url();?>public/jaju/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="p-relative">
                                                <img src="<?php echo base_url();?>public/jaju/picture/endo/Plantarfascitis.png"
                                                    alt="img">

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="about-content s-about-content pl-30">
                                                <div class="section-title mb-20">
                                                    <span>Leg Diseases</span>
                                                    <h2>Plantar Fascitis</h2>
                                                </div>
                                                <p>The swollen tissue runs to the bottom of the foot.
                                                    Symptoms include knife pain near the heel. The pain can be more
                                                    severe in the morning and with prolonged standing, running or
                                                    jumping.
                                                    Treatments include physiotherapy, stretching exercises, shoe
                                                    inserts, painkillers, steroid injections and surgery.</p>

                                                <ul class="nav text-center nav-pills" id="myTab" role="tablist">
                                                    <li class="nav-item pillsbtn mr-4">
                                                        <a class="nav-link active" id="desc-tab" data-toggle="tab"
                                                            href="#id-desc7" role="tab" aria-controls="home"
                                                            aria-selected="true">Symptoms </a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-4">
                                                        <a class="nav-link" id="id-add-in" data-toggle="tab"
                                                            href="#id-add7" role="tab" aria-controls="profile"
                                                            aria-selected="false">Treatment</a>
                                                    </li>
                                                    <li class="nav-item pillsbtn">
                                                        <a class="nav-link" id="id-r" data-toggle="tab" href="#id-rev7"
                                                            role="tab" aria-controls="profile"
                                                            aria-selected="false">Aim</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="id-desc7" role="tabpanel"
                                                        aria-labelledby="desc-tab">
                                                        <div class="event-text mb-40">
                                                            <ul>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Severe Pain
                                                                    in Heels and Soles of feet</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Pain is
                                                                    more when starting to walk after rest and decreases
                                                                    in severity after walking for some distance</li>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp; Abnormal
                                                                    extra bone growth develops from heel bone</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-add7" role="tabpanel"
                                                        aria-labelledby="id-add-in">
                                                        <div class="additional-info">
                                                            <div class="table-responsive">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;
                                                                        Plantar Artery Embolization</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-rev7" role="tabpanel"
                                                        aria-labelledby="id-r">
                                                        <div class="additional-info">
                                                            <div class="event-text mb-40">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;To
                                                                        treat the root cause of plantar fascitis i.e.
                                                                        Chronic inflammation</li>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;To To
                                                                        Significant pain relief</li>
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
                        <div id="Osteoid" class="st-tab treatment">
                            <section id="nev8" role="tab" class="about-area about-p mt-50 pb-40 p-relative"
                                style="background-image:url(<?php echo base_url();?>public/jaju/img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="p-relative">
                                                <img src="<?php echo base_url();?>public/jaju/picture/endo/Osteoidosteoma.jpg"
                                                    alt="img">

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="about-content s-about-content pl-30">
                                                <div class="section-title mb-20">
                                                    <span>Leg Diseases</span>
                                                    <h2>Osteoid Osteoma</h2>
                                                </div>
                                                <p>Osteoid osteoma is a benign (non-cancerous) bone tumor that usually
                                                    develops in the long bones of the body, such as the femur (thigh)
                                                    and tibia (shinbone). Although osteoid osteomas can cause pain and
                                                    discomfort, they do not spread throughout the body.</p>

                                                <ul class="nav text-center nav-pills" id="myTab" role="tablist">
                                                    <li class="nav-item pillsbtn mr-4">
                                                        <a class="nav-link active" id="desc-tab" data-toggle="tab"
                                                            href="#id-desc8" role="tab" aria-controls="home"
                                                            aria-selected="true">Symptoms </a>
                                                    </li>
                                                    <li class="nav-item pillsbtn mr-4">
                                                        <a class="nav-link" id="id-add-in" data-toggle="tab"
                                                            href="#id-add8" role="tab" aria-controls="profile"
                                                            aria-selected="false">Treatment</a>
                                                    </li>
                                                    <li class="nav-item pillsbtn">
                                                        <a class="nav-link" id="id-r" data-toggle="tab" href="#id-rev8"
                                                            role="tab" aria-controls="profile"
                                                            aria-selected="false">Aim</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="id-desc8" role="tabpanel"
                                                        aria-labelledby="desc-tab">
                                                        <div class="event-text mb-40">
                                                            <ul>
                                                                <li class="fas fa-chevron-right">&nbsp;&nbsp;Young age
                                                                    people develop severe pain in night making them stay
                                                                    awake throughout the night</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-add8" role="tabpanel"
                                                        aria-labelledby="id-add-in">
                                                        <div class="additional-info">
                                                            <div class="table-responsive">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">&nbsp;&nbsp;
                                                                        Radiofrequency Ablation (RFA)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="id-rev8" role="tabpanel"
                                                        aria-labelledby="id-r">
                                                        <div class="additional-info">
                                                            <div class="event-text mb-40">
                                                                <ul>
                                                                    <li class="fas fa-chevron-right">
                                                                        &nbsp;&nbsp;Complete pain relief and sweet
                                                                        dreams at night</li>
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
                </div>
            </div>
        </section>
        <?php   $this->load->view('endovascular/common');   ?>

    </main>
    <?php   $this->load->view('layout/footer3');   ?>
    <?php   $this->load->view('layout/script');   ?>

    <script src="<?php echo base_url();?>public/jaju/js/counter2.min.js"></script>

    <script src="<?php echo base_url();?>public/jaju/js/main2.js"></script>
</body>

</html>