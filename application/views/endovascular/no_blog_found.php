<!DOCTYPE html>
<html lang="zxx">

<head>
  	<?php   $this->load->view('layout/style');   ?>
    <title> JAJU – Skin Blog | Hospital and Health </title>
    <meta name="description" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
    <meta name="keywords" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
</head>

<body>
 
  <?php   $this->load->view('layout/header2');   ?>
    <main>
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(<?php echo base_url();?>public/jaju/img/testimonial/test-bg.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h2>News Feeds</h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>skin/skin.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">News</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="inner-blog pt-100 pb-50">
            <div class="container">
                <div class="row bsingle__content">
 <div class="col-12">
				  <div class="text-center">
                              <h2 style="font-size: 2em;"> Page Not found</h2>
                        </div>       
                                 
                      </div>
                  
                </div>
            </div>
        </section>
    </main>
	  <?php   $this->load->view('layout/footer2');  
	  		   $this->load->view('layout/script'); ?>
   
</body>

</html>
