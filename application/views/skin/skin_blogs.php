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
                                <h2>SKIN BOLG</h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">BOLG</li>
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
                    <div class="col-lg-8">
						   <div class="row">
	 				 <?php  				
					  foreach ($result as $row) {  
                    	 	 $t_id = $row['blog_id']; 			 $status = $row['blog_status'];
							 $blog_url = $row['blog_url'];		 $blogname = $row['blog_name'];
							 $blog_date = $row['blog_date']; 	 $author_id = $row['author_id']; 
							 $short_info = $row['short_desc']; 	$sm_img = $row['small_img']; 
	 		/* 	$t_id= $row->blog_id;  $status = $row->blog_status; 
							 $blog_url = $row->blog_url;  $blogname =$row->blog_name; 
							 $blog_date =$row->blog_date;  	 $author_id =$row->author_id; 
							$short_info = $row->short_desc; 		$sm_img = $row->small_img;  */
						 ?>

                        <div class="col-lg-6 col-md-12">
                            <div class="single-post mb-30" >
                                <div class="blog-thumb">
                                    <a href="<?php echo base_url()."skin-blog/".$blog_url;?>">
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
                                    <h4><a href="<?php echo base_url()."skin-blog/".$blog_url;?>"> <?php echo $blogname; ?> </a> </h4>

									<p style="text-align: justify;"> 

							<?php echo  substr_replace($short_info , "...", 110);?></p>    
                                     <div class="blog-btn"><a href="<?php echo base_url()."skin-blog/".$blog_url;?>">
									 Read More<i class="fas fa-chevron-right"></i></a></div>
                                    
                                </div>
                                
                                
                            </div>
                        </div>
						<?php  } ?>
                     
                      
                    </div>
                   <div class="pagination-wrap mb-50 ">
                            <nav>
									<?= $pagination; ?>
 							  </nav>
                        </div>



 					 



                        <div class="pagination-wrap mb-50 d-none ">
                            <nav>
 						   <ul class="pagination">
                                    <li class="page-item"><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                    <li class="page-item active"><a href="#">1</a></li>
                                    <li class="page-item"><a href="#">2</a></li>
                                    <li class="page-item"><a href="#">3</a></li>
                                    <li class="page-item"><a href="#">...</a></li>
                                    <li class="page-item"><a href="#">10</a></li>
                                    <li class="page-item"><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside>
                            <div class="widget mb-40">
                                <div class="widget-title text-center">
                                    <h4>Search</h4>
                                </div>
                                <div class="slidebar__form">
                                 <?php  echo form_open_multipart('skin-blog-search' ,'class="needs-validation" novalidate'); ?>
                                        <input type="text"  name="serchname" placeholder="Search your keyword..." required>
                                        <button type="submit" name='submit' value='Submit' ><i class="fas fa-search"></i></button>
                                  <?php  echo form_close();?>
                                </div>
                            </div>
                           
                           
                            <div class="widget mb-40">
                                <div class="widget-title text-center">
                                    <h4>Categories</h4>
                                </div>
                                <ul class="cat__list">
									
                                  	  <?php  foreach ($cat_result as $cat) {
										$cat_url =$cat->b_cat_url;   $b_cat_id  =$cat->b_cat_id;?>
                                        <li><a href="<?= base_url("skin-categories/".$cat_url)?>"><?= ucfirst($cat->b_cat_name)?> 
										<span>(<?php  $count=   $this->Blog_model->count_blogs_by_cati_id($b_cat_id);
									//	echo $this->db->last_query();
										print_r($count);?>) </span> </a></li>
									<?php } ?>
                                    
                                </ul>
                            </div>
                            <div class="widget mb-40">
                                <div class="widget-title text-center">
                                    <h4>Feeds</h4>
                                </div>
                                <div class="widget__post">
                                    <ul>
										<?php  foreach ($recent_blogs as $brow) {
							 			$blog_url= $brow->blog_url;
										$blog_name= $brow->blog_name;  ?>
 									 <li>
                                            <div class="widget__post-thumb">
                                                <img src="<?php echo base_url()."public/img/blog/".$brow->small_img;?>"  alt="<?php echo $blog_name ;?>" style="width: 80px;">
                                            </div>
                                            <div class="widget__post-content">
                                                <h6><a href="<?php echo base_url()."skin-blog/".$blog_url;?>"> <?php echo $blog_name ;?></a></h6>
                                              
                                            </div>
                                        </li>
									<?php }?>
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="widget mb-40">
                                <div class="widget-title text-center">
                                    <h4>Tags</h4>
                                </div>
								
                                <div class="widget__tag">
								<ul>
									<?php  foreach ($tag_result as $tag) {
									$tag_url =$tag->b_tag_url; ?>
                                        <li><a href="<?= base_url("skin-tag/".$tag_url)?>"><?= ucfirst($tag->b_tag_name)?></a></li>
									<?php } ?>
									 
									
                                 </ul>
                                </div>
                            </div>
							 <div class="widget mb-40">
                                <div class="widget-title text-center">
                                    <h4>Follow Us</h4>
                                </div>
      
	  
                         

                                <div class="widget-social text-center">
									 <a target="_blank" href="https://www.facebook.com/Jaju-Skin-Clinic-100236868998068" title="Jaju clinic facebook">
									<i class="fab fa-facebook-f"></i></a>
 									
									<a  target="_blank"  href="https://www.instagram.com/jajuskinclinic/" title="Jaju clinic instagram">
									 <i class="fab fa-instagram"></i></a>

   									<a target="_blank" title="Jaju clinic Map"
                               		 href="https://www.google.com/maps/place/Jaju+Clinic/@19.859294,75.347471,14z/data=!4m5!3m4!1s0x0:0x52e59df451bc8466!8m2!3d19.8592556!4d75.3474678?hl=en">
 									 <i class="fal fa-map-marker-alt"></i></a>

                                    <a href="javascript:void(0);" title="Youtube"><i
									 class="fab fa-youtube"></i></a>
                                   
                                  
                                    
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
    </main>
	  <?php   $this->load->view('layout/footer2');  
	  		   $this->load->view('layout/script'); ?>
   
</body>

</html>
