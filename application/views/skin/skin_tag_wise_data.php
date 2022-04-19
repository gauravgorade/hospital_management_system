<?php   foreach ($tresult as $key => $trow) {
 ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  	<?php   $this->load->view('layout/style');   ?>
    <title> <?= $trow->b_tag_name ;?> Skin Tag | JAJU | Skin Blog </title>
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
                                <h2> <?= ucfirst($trow->b_tag_name);?></h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    	<li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
									    <li class="breadcrumb-item"><a href="<?php echo base_url();?>skin-blogs">Skin BOLG </a> </li>
									    <li class="breadcrumb-item active" aria-current="page"><?= $trow->b_tag_name ;?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     <!-- blog-area -->
            <section id="blog" class="blog-area  p-relative pt-100 pb-90 fix" style="background-image:url(img/an-bg/an-bg10.png); background-size: contain;background-repeat: no-repeat;background-position: center center;">
                <div class="container">
                    
                    <div class="row">
                        	 <?php  	
					 	 $ts_id; 
if (empty($ts_id))
 {
	 	 $ts_id=0; echo "<h1 class=' text-center'> No Data Found!</h1>";
}

						$query = $this->db->query("SELECT * FROM blog_tbl WHERE blog_id IN ($ts_id) ");
 					foreach ($query->result() as $row)
						{ 
                    	$t_id = $row->blog_id;  $status = $row->blog_status;
						$blogname= $row->blog_url;  ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="single-post mb-30" >
                                <div class="blog-thumb">
                                    <a href="<?php echo base_url()."skin-blog/".$blogname;?>">
                                        <img src="<?php echo base_url()."public/img/blog/".$row->small_img;?>" alt="img">
                                    	 <img src="<?php echo base_url();?>public/jaju/img/bg/b-link.png" alt="b-link" class="b-link">
									  </a>
                                </div>
                                <div class="blog-content text-center">     
                                   
                                    <h4><a href="<?php echo base_url()."skin-blog/".$blogname;?>"> <?php echo $row->blog_name; ?> </a> </h4>
 									<p style="text-align: justify;"> 
 										
									<?php  $short_info = $row->short_desc; echo  substr_replace($short_info , "...", 110); ?></p>     
                                     <div class="blog-btn"><a href="<?php echo base_url()."skin-blog/".$blogname;?>">
									 Read More<i class="fas fa-chevron-right"></i></a></div>
                                    
                                </div>
                                
                                
                            </div>
                        </div>
						<?php  } ?>
                     
                    </div>
				 
                </div>
            </section>
      

      
    </main>
	  <?php   $this->load->view('layout/footer2');  
	  		   $this->load->view('layout/script'); ?>
   
</body>

</html> <?php  } ?>
   