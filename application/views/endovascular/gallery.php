<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php   $this->load->view('layout/style');   ?>
    <title> JAJU – Endovascular Gallery | Hospital and Health </title>
    <meta name="description" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
    <meta name="keywords" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">

</head>

<body>
    <?php   
    $this->load->view('layout/header3');   
    ?>
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(<?php echo base_url();?>public/jaju/picture/bread/endo.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30 ">
                                <h2 class="fs-24">Endovascular Gallery</h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="<?php echo base_url();?>endovascular/endovascular">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Endovascular Gallery</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- blog-area -->
        <section id="blog" class="blog-area  p-relative pt-50 pb-90 fix"
            style="background-image:url(<?php echo base_url(); ?>public/jaju/img/an-bg/an-bg10.png); background-size: contain;background-repeat: no-repeat;background-position: center center;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section-title text-center pl-40 pr-40 mb-80">
                            <span>Success Stories</span>
                            <h2>Some of Our Success Stories</h2>
                            <p class="mt-10">Some of our Hospital success stories.
                            </p>
                        </div>
                    </div>
                </div>
				   <div align="center">
            <button class="btn btn-default filter-button buttonreg"   data-filter="all">All</button>
	<?php  foreach ($catigery as $value) {  ?> 
		  <button class="btn btn-default filter-button buttonreg" data-filter="<?php echo $value->gc_sulg ;?>">
		   <?php echo $value->gc_name ;?></button>
		<?php } ?>
	 
      </div>
        <br/>  <br/> <br/>
                <div class="row">
  
				
					<?php  foreach ($gallery as $row) {  ?>

					<div class="gallery_product col-md-4 col-sm-12  bsingle__post mb-50 filter <?= $row->gc_sulg;?>">
                        <div class="card card-body shadow p-0">
                            <div class="slide-post mb20">
                                    <a class="example-image-link"
                                        href="<?= base_url();?>/public/img/gallery/<?= $row->img_path;?>"
                                        data-lightbox="example-set"><img
                                            src="<?= base_url();?>/public/img/gallery/<?= $row->img_path;?>"
                                            class="example-image" alt=""></a>
                                </div>
                            <h4 class="pro-title text-center pt-10"> <?= $row->name;?></h4>
                        </div>
                    </div>

					<?php } ?>


            


                 


                </div>
            </div>
        </section>
        <!-- blog-area-end -->

    </main>

    <?php   $this->load->view('layout/footer3');   ?>
    <?php   $this->load->view('layout/script');   ?>

<script>
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
</script>
</body>

</html>
