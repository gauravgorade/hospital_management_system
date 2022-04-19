<!DOCTYPE html>
<html lang="zxx">

<head>
  	<?php   $this->load->view('layout/style');   ?>
    <title> JAJU – Skin Blog | Hospital and Health </title>
    <meta name="description" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
    <meta name="keywords" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
</head>

<body>
 
  <?php   $this->load->view('layout/header3');   ?>
    <main>
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(<?php echo base_url();?>public/jaju/img/testimonial/test-bg.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h2>ENDOVASCULAR BOLG Search</h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
									 <li class="breadcrumb-item"><a href="<?php echo base_url();?>endovascular-blogs">Endovascular Blog </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Search</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

   
      

        <section class="inner-blog pt-100 pb-50">
            <div class="container">
                <div class="row">
					  <div class="col-lg-12">
 						<aside>
                            <div class="widget mb-40">
                                <div class="widget-title text-center">
                                    <h4>Search   </h4>
                                </div>
                                <div class="slidebar__form">
                                 <?php  echo form_open_multipart('endovascular-blog-search' ,'class="needs-validation" novalidate'); ?>
                                        <input type="text"  name="serchname" value="<?php echo($search_text) ?>" placeholder="Search your keyword..." required>
                                        <button type="submit" name='submit' value='Submit' ><i class="fas fa-search"></i></button>
                                  <?php  echo form_close();?>
                                </div>
                            </div> </aside>
					  </div>
                    <div class="col-lg-12">
						   <div class="row">
	 				 <?php  				
					  foreach ($result as $row) {  
                    		 $t_id = $row['blog_id']; 			 $status = $row['blog_status'];
							 $blog_url = $row['blog_url'];		 $blogname = $row['blog_name'];
							 $blog_date = $row['blog_date']; 	 $author_id = $row['author_id']; 
							 $short_info = $row['short_desc']; 	$sm_img = $row['small_img'];
						 ?>

                        <div class="col-lg-6 col-md-12">
                            <div class="single-post mb-30" >
                                <div class="blog-thumb">
                                    <a href="<?php echo base_url()."endovascular-blog/".$blog_url;?>">
                                        <img src="<?php echo base_url()."public/img/blog/".$sm_img?>" alt="<?= $blogname ;?>">
                                    	 <img src="<?php echo base_url();?>public/jaju/img/bg/b-link.png" alt="b-link" class="b-link">
									  </a>
                                </div>
                                <div class="blog-content text-center">     
                                    <div class="b-meta mb-20">
                                       <div class="row">
                                             <div class="col-lg-6 col-md-6">
                                               <i class="far fa-calendar-alt"></i>  <?php echo  $blog_date; ?>  </div>
                                            <div class="col-lg-6 col-md-6">
                                               <i class="fas fa-user"></i> <?php 
										
												 $auth_detil =$this->User_model->get_user($author_id);  
												 echo $auth_detil[0]->name." ".$auth_detil[0]->lname ;?>  
										 </div>
                                       		  </div>
                                    </div>
                                    <h4><a href="<?php echo base_url()."endovascular-blog/".$blog_url;?>"> <?php echo $blogname; ?> </a> </h4>

									<p style="text-align: justify;"> 

							<?php echo  substr_replace($short_info , "...", 110);?></p>    
                                     <div class="blog-btn"><a href="<?php echo base_url()."endovascular-blog/".$blog_url;?>">
									 Read More<i class="fas fa-chevron-right"></i></a></div>
                                    
                                </div>
                                
                                
                            </div>
                        </div>
						<?php  } ?>
                     
                      
                    </div>
               
 


                    </div>
                  
                </div>
            </div>
        </section>
    </main>
	  <?php   $this->load->view('layout/footer3');  
	  		   $this->load->view('layout/script'); ?>
   
</body>

</html>
