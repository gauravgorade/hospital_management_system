<!DOCTYPE html>
<html lang="zxx">
	<?php  // print_r($bresult );
	foreach ($bresult as $key => $crows) {
	 
	?>
<head>
  	<?php $this->load->view('layout/style');   ?>
    <title> <?=  $crows->b_cat_name;?> JAJU – Skin Blog | Hospital and Health </title>
    <meta name="description" content="<?=  $crows->cat_desc ;?>">
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
                                <h2><?=  ucfirst($crows->b_cat_name);?> </h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                                    <li class="breadcrumb-item"> <a href="<?php echo base_url();?>skin-blogs"> SKIN BOLG </a></li>
									<li class="breadcrumb-item active" aria-current="page">Skin Categories</li>
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
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="section-title text-center mb-80" >
                              <span> OUR Categories  </span> 
                                <h2>Stay Updated To Our Blog & News  <br>
							<strong> <?=  $crows->b_cat_name;?></strong>	</h2>
                                <p ><?=  $crows->cat_desc ;?></p>

							</div>
                        </div>
                    </div>
                    <div class="row">
                        	 <?php  	
				 	foreach ($result as $row)
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
 									<?php  $short_info = $row->short_desc; echo  substr_replace($short_info , "...", 110);?></p>     
                                     </p>    
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
<?php } 

		/* 	 $author_id = $row->author_id;
												 	 $data['author_detils'] = $this->User_model->get_user($author_id);
													  print_r($data['author_detils'][0]->name." ".$data['author_detils'][0]->lname);

												/* 	 echo $author_detils[0]->name." ".$author_detils[0]->lname; */
?>
</html>
