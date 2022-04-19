<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php   $this->load->view('layout/style');   ?>
    <title> JAJU – Endovascular Treatment | Hospital and Health </title>
    <meta name="description" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
    <meta name="keywords" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
</head>

<body>

    <?php   
    $this->load->view('layout/header3');   
    ?>

    <main>
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(<?php echo base_url();?>public/jaju/picture/bread/endo.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h1 class="fs-24" title="jaju endovascular clinic">Treatments</h1>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="<?php echo base_url();?>endovascular/endovascular"
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
                            <h5 class="txtsize">Our Treatement</h5>
                            <p>Endovascular surgery is an innovative, less invasive procedure used to treat problems
                                that affect blood vessels, such as aneurysms, which cause the artery to swell or
                                "swell." Surgery involves making a small incision near each hip to access the blood
                                vessels.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-12 mb20">
                        <div class="card card-body shadow p-0">
                            <div class="endotreatment">
                                <a href="<?php echo base_url();?>endovascular/leg"><img
                                        src="<?php echo base_url();?>public/jaju/picture/endo/leg3.png"></a>
                            </div>
                            <h4 class="pro-title text-center pt-10"><a
                                    href="<?php echo base_url();?>endovascular/leg">Leg Diseases</a></h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb20">
                        <div class="card card-body shadow p-0">
                            <div class="endotreatment">
                                <a href="<?php echo base_url();?>endovascular/lung"><img
                                        src="<?php echo base_url();?>public/jaju/picture/endo/lung.png"></a>
                            </div>
                            <h4 class="pro-title text-center pt-10"><a
                                    href="<?php echo base_url();?>endovascular/lung">Lung Diseases</a></h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb20">
                        <div class="card card-body shadow p-0">
                            <div class="endotreatment">
                                <a href="<?php echo base_url();?>endovascular/men"><img
                                        src="<?php echo base_url();?>public/jaju/picture/endo/men3.png"></a>
                            </div>
                            <h4 class="pro-title text-center pt-10"><a
                                    href="<?php echo base_url();?>endovascular/men">Men's Diseases</a></h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card card-body shadow p-0">
                            <div class="endotreatment">
                                <a href="<?php echo base_url();?>endovascular/women"><img
                                        src="<?php echo base_url();?>public/jaju/picture/endo/women2.png"></a>
                            </div>
                            <h4 class="pro-title text-center pt-10"><a
                                    href="<?php echo base_url();?>endovascular/women">Women's Diseases</a></h4>
                        </div>
                    </div>
                </div>
        </section>

        <section class="faq-area pt-50 pb-50 fix"
            style="background-image: url(img/shape/header-sape6.html); background-position: right center; background-size: auto;background-repeat: no-repeat;">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-12">
                        <div class="section-title txtcenter mb-50">
                            <h2>FAQ</h2>
                            <p>Some questions regarding to above treatments. </p>
                        </div>
                        <div class="faq-wrap">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="faq-btn" type="button" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="true"
                                                aria-controls="collapseThree">
                                                What is Interventional Radiology what an Interventional Radiologist does
                                                ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Interventional Radiology is a superspeciality in medical science which deals
                                            with treatment of various diseases under imaging guidance with a very
                                            minimally invasive approach. Minimally invasive approach is treatment of any
                                            disease through the prick of a single small needle. Imaging guidance is
                                            important so that the Interventional Radiologists know all the time where
                                            the needle is going and can use radiological imaging to guide the needle.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                What is so different about Interventional Radiology ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Best features of Interventional Radiology procedures are:
                                            Minimally invasive - Most of the Interventional Radiology procedures are
                                            done through just small needle prick. They do not involve performing any
                                            cuts or incisions using any surgical blade.
                                            Mostly in local anesthesia: As most of these procedures do not involve
                                            performing any cuts or incisions using any surgical blade and only small
                                            needle prick is involved, local anaesthesia to the needle prick site is
                                            sufficient for the procedure most of the times. General anaestheia is rarely
                                            required. This allows patients to be mobilized as soon as few hours after
                                            the procedure.
                                            Low post operative complication rates: Since the Interventional Radiology
                                            procedures are performed without any surgical incisions or without
                                            surgically opening the patients body parts, the chances of post operative
                                            infections and other severe complications are very low.
                                            Day care procedure with reduced hospital stay- As the whole procedure is
                                            performed skillfully through just a needle hole under Radiological imaging
                                            guidance and post procedure complications rates being so low, post operative
                                            hospital stay required is also minimized upto only one day in most cases.
                                            No cuts or sutures: As no surgical cuts or sutures are needed, the are no
                                            ugly looking scars after the procedure.
                                            Improved post procedure quality of life- As patients can be mobilized as
                                            soon as few hours after the procedure, Quality of life after the procedure
                                            is much better.
                                            Reduced post procedure discomfort to patient- Most Interventional Radiology
                                            procedures give quick and measurable results and patients can return back to
                                            their regular daily activities as soon as the next day after the procedure.
                                            No compromise with results: Although the Interventional Radiology procedures
                                            are patient friendly, their results are same as any surgery intends to
                                            achieve. The only advantage here is that there is a very low possibility of
                                            collateral damage.

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                How effective is this treatment ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">

                                            Treatment effectiveness is nearly similar to the required surgery with less
                                            amount of risk and low chances of complications. Nevertheless, This is not a
                                            magical treatment. Complications are possible in any procedure, but the
                                            chances and severity of them occuring are very low since this is a very
                                            minimally invasive treatment.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse"
                                                data-target="#skin" aria-expanded="false" aria-controls="collapseTwo">
                                                Why Interventional Radiology ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="skin" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Being a patient is one of the hardest thing a person can go through in the
                                            entire life. The fear of both the disease process and the treatment options
                                            advised makes the situation even worse. Hospital admission for even a week
                                            makes the patient even more vulnerable emotionally. The discomfort the
                                            patient has to go though is continuously noticed. Technological advancements
                                            are the only means to acheive better results while minimizing the discomfort
                                            to the patient. The technology has advanced so much that today it is
                                            possible for a patient to come to hospital get diagnosed as well as treated
                                            the same day so that he/she can go home the very same or the next day back
                                            to their normal lives. Interventional Radiology is one of the most advanced
                                            medical superspeciality available. Technological and Imaging advances have
                                            made it very safe and comfortable for the patient without compromising the
                                            results of the treatment.

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse"
                                                data-target="#Venereal" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Who is Dr Vivek Vijaykumar Jaju ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="Venereal" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            Dr. Vivek Vijaykumar Jaju is the Interventional Radiologist trained in
                                            Endovascular and Non-Vascular Interventional procedures required in the
                                            treatment of various Vascular diseases and Cancers. Dr. Vivek has ample
                                            amount of experience in the field of Interventional Radiology. After his
                                            post graduadtion in MD Radiology, He has undergone a two year meticulous
                                            training in the field of Interventional Radiology and has worked under some
                                            of the best Interventional Radiologists in Mumbai. He has been trained in
                                            prestigious Tata Memorial Hospital Mumbai in Onco-Interventional Radiology
                                            procedures. He has successfully performed more than 500 Interventional
                                            Radiology procedures and counting. He is very skillful and sincere at his
                                            work with a lot of compassion towards the discomfort of the patients. All
                                            these qualities make him one of the leading Interventional Radiologists in
                                            Aurangabad. He is also a member of the esteemed Interventioanl Radiology
                                            societies in the world like Indian Society of Vascular Interventional
                                            Radiologists (ISVIR), Cardiovascular and Interventional Radiological Society
                                            of Europe (CIRSE) and Asia Pacific Society of Cardiovascular and
                                            Interventional Radiology (APSCVIR).
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="faq-btn collapsed" type="button" data-toggle="collapse"
                                                data-target="#Leprosy" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Why Jaju Clinic ?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="Leprosy" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            At Jaju Clinic Aurangabad, we offer the best Interventional Radiology
                                            services in the least possible cost so that the patient does not get
                                            burdened by the disease as well as the cost of the treatment. You must visit
                                            us once to know in further detail.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php   $this->load->view('layout/footer3');   ?>
    <?php   $this->load->view('layout/script');   ?>

</body>

</html>