<!DOCTYPE html>
<html lang="zxx">

<head>
<?php   $this->load->view('layout/style');   ?>
    <title> JAJU – DISCLAIMER | Hospital and Health </title>
    <meta name="description" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
    <meta name="keywords" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
</head>

<body>
<?php  
    $this->load->view('layout/header');   
    ?>
    <main>
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(<?php echo base_url(); ?>public/jaju/picture/bread/bread2.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h2>Disclaimer</h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Disclaimer</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <h2 class="DisclaimerHead">Disclaimer</h2>

            <p>If you require any more information or have any questions about our site's disclaimer, please feel free
                to contact us by email at <a href="mailto:jajuclinic@gmail.com">jajuclinic@gmail.com.</a></p>

            <h4>Disclaimers for jajuclinic</h4>

            <p>All the information on this website - <a target="_blank" href="https://jajuclinic.com/">jajuclinic.com</a> - is published
                in good faith and for general information purpose only. jajuclinic does not make any warranties about
                the completeness, reliability and accuracy of this information. Any action you take upon the information
                you find on this website (jajuclinic), is strictly at your own risk. jajuclinic will not be liable for
                any losses and/or damages in connection with the use of our website.</p>

            <p>From our website, you can visit other websites by following hyperlinks to such external sites. While we
                strive to provide only quality links to useful and ethical websites, we have no control over the content
                and nature of these sites. These links to other websites do not imply a recommendation for all the
                content found on these sites. Site owners and content may change without notice and may occur before we
                have the opportunity to remove a link which may have gone 'bad'.</p>

            <p>Please be also aware that when you leave our website, other sites may have different privacy policies and
                terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well
                as their "Terms of Service" before engaging in any business or uploading any information.</p>

            <h4>Consent</h4>

            <p>By using our website, you hereby consent to our disclaimer and agree to its terms.</p>
            <h4>Update</h4>

            <p>Should we update, amend or make any changes to this document, those changes will be prominently posted
                here.</p>
        </section>

    </main>
    <?php 
    $this->load->view('layout/footer');   
    $this->load->view('layout/script');
    ?>

</body>

</html>