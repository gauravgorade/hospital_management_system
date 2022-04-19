<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php   $this->load->view('layout/style');   ?>
    <title> JAJU – Skin Gallery | Hospital and Health </title>
    <meta name="description" content="JAJU – Home | Hospital and Health | SKIN | DERMOTOLOGIST">
    <meta name="keywords" content="JAJU – Home | Hospital and Health | SKIN | DERMOTOLOGIST">

</head>

<body>
    <?php   
    $this->load->view('layout/header2');   
    ?>
    <main>
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(<?php echo base_url(); ?>public/jaju/picture/bread/skingeneral2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30 ">
                                <h2 class="fs-24">Skin Gallery</h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>skin">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Skin Gallery</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>



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
<?php //print_r($catigery);?>

   <div align="center">
            <button class="btn btn-default filter-button buttonreg"   data-filter="all">All</button>
	<?php  foreach ($catigery as $value) {  ?> 
		  <button class="btn btn-default filter-button buttonreg" data-filter="<?php echo $value->gc_sulg ;?>">
		   <?php echo $value->gc_name ;?></button>
		<?php } ?>
	 
      </div>
        <br/>  <br/> <br/>


  <div class="row">
<!-- 

  <?php // print_r($gallery ); 
  foreach ($gallery as $row) { 
 
	 	 ?>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6  mb-50 <?= $row->gc_sulg;?>">
                <img src= "<?= base_url();?>/public/img/gallery/<?= $row->img_path;?>" class="img-responsive">
            </div>
	<?php } ;?>
          
        </div>
		</div>
    </div>

  -->




       

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

<!--         <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Success Story title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="bsingle__post">
                                <img src="<?php echo base_url(); ?>public/jaju/img/blog/inner_b3.jpg" alt="" >
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                            <div class="blog-content text-center mt-0 pt-0 abouthomespace" style="height:250px; overflow: auto;">
                                <div class="b-meta mb-20">
                                    <i class="far fa-calendar-alt"></i> 7 March, 2019

                                </div>
                                <h4><a href="javascript:void(0);">Sunil Waghmare</a></h4>
                               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus magni accusamus molestias quibusdam laboriosam iste obcaecati aliquam, qui et delectus eaque enim nulla porro commodi explicabo recusandae! Tempora, ab facere? Aenean sed velit nulla. Etiam viverra scelerisque porta. Quisque ut dolor aliquam,
                                    gravida lacus.lorem</p>
                            </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
  -->   </main>


    <?php   $this->load->view('layout/footer2');   ?>
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
