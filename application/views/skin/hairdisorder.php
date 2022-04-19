<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php   $this->load->view('layout/style');?>
    <title> JAJU – Hair Problem | Hospital and Health </title>
    <meta name="description" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
    <meta name="keywords" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">

</head>

<body>
    <?php   $this->load->view('layout/header2');   ?>

    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(<?php echo base_url(); ?>public/jaju/picture/bread/hairproblem.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h2 class="fs-24">Hair Problem</h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>skin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Hair Problem</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <section class="container pt-50">
            <div class="about-content s-about-content pl-30 txtcenter">
                <div class="section-title mb-20">
                    <span>Hair Disorder</span>
                    <h2>Hair Treatments</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <h2 class="listitem">01.</h2>
                </div>
                <div class="col-md-6">
                    <h2 class="hcolor">Dandruff</h2>
                    Dandruff is a skin condition that mainly affects the scalp. Symptoms include flaking and occasional
                    mild itching. This can lead to social or self-esteem problems. A more severe form of the condition,
                    which includes inflammation of the skin, is called seborrheic dermatitis.
                    Dandruff can have many causes, including: irritated, oily skin. Not enough shampooing. Yeast-like
                    fungus (Malassezia) that puts oil on the scalp of most adults.
                </div>
                <div class="col-md-4 txtcenter">
                    <img src="<?php echo base_url(); ?>public/jaju/picture/skin/dandruff.png">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <h2 class="listitem">02.</h2>
                </div>
                <div class="col-md-6">
                    <h2 class="hcolor">Excessive Hair Fall</h2>
                    This can be the result of heredity, hormonal changes, medical conditions or a normal part of aging.
                    Anyone can lose hair on their head, but it is more common in men. Baldness usually means excessive
                    hair loss from your scalp. Genetic hair loss with age is the most common cause of baldness.
                    Hair grows and dies in stages, and nutrition, stress, hygiene, and daily styling all play a role in
                    how much hair you lose each day.
                </div>
                <div class="col-md-4 txtcenter">
                    <img src="<?php echo base_url(); ?>public/jaju/picture/skin/exhairfall.png">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <h2 class="listitem">03.</h2>
                </div>
                <div class="col-md-6">
                    <h2 class="hcolor">Alopecia</h2>
                    Alopecia areata: Alopecia is the medical term for baldness. Alopecia totalis: The person loses all
                    the hair on the scalp, so the scalp becomes completely bald. Alopecia Universalis: The person loses
                    the whole hair, the whole body remains hairless.Sudden hair loss that starts with one or more round
                    bald patches that can become overlapping.Alopecia areata occurs when the immune system attacks the
                    hair follicles and can be caused by severe stress.Treatment can address any underlying condition and
                    includes topical scalp medications.
                </div>
                <div class="col-md-4 txtcenter">
                    <img src="<?php echo base_url(); ?>public/jaju/picture/skin/alopecia.png">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <h2 class="listitem">04.</h2>
                </div>
                <div class="col-md-6">
                    <h2 class="hcolor">Lice infection</h2>
                    Head lice eat the blood of the scalp. The female lice lay eggs (nits) that stick to the hair shaft.
                    Common signs and symptoms of lice include: severe itching of the scalp, body, or genital area.When
                    the incidence of body aches lasts a long time, the heavily bitten parts of the skin can become thick
                    and dark, especially in the middle of the body. Lice are known to transmit diseases in the body
                </div>
                <div class="col-md-4 txtcenter">
                    <img src="<?php echo base_url(); ?>public/jaju/picture/skin/liceinfection.png">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <h2 class="listitem">05.</h2>
                </div>
                <div class="col-md-6">
                    <h2 class="hcolor">Baldness</h2>
                    Hair loss can affect only your scalp or your entire body and can be temporary or permanent. This can
                    be the result of heredity, hormonal changes, medical conditions or a normal part of aging. Anyone
                    can lose hair on their head, but it is more common in men.Hair loss, also known as alopecia or
                    baldness, means hair loss from the head or parts of the body. In some people, hair loss causes
                    mental distress. Common types include male- or female-patterned hair loss, alopecia areata, and
                    thinning of hair known as telogen effluvium.
                </div>
                <div class="col-md-4 txtcenter">
                    <img src="<?php echo base_url(); ?>public/jaju/picture/skin/baldness.png">
                </div>
            </div>
        </section>
        <?php $this->load->view('skin/common'); ?>

    </main>
    <?php $this->load->view('layout/footer2'); ?>
    <?php $this->load->view('layout/script'); ?>

</body>

</html>