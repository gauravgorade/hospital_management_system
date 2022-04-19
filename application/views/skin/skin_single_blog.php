<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php   $this->load->view('layout/style');   ?>
    <title> JAJU – Skin Blog Details | Hospital and Health </title>
    <meta name="description" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">
    <meta name="keywords" content="JAJU – Home | Hospital and Health | SKIN | ENDOVASCULAR | DERMOTOLOGIST">

	<style> 
	.details__content img {
			width: 100%; height: auto;
	}
	</style>
</head>

<body>

    <?php   $this->load->view('layout/header2');   ?>

    <?php foreach ($result as $row) {    $t_id = $row->blog_id;  $status = $row->blog_status;  ?>
    <main>
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(<?php echo base_url();?>public/jaju/img/testimonial/test-bg.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h2><?php echo ucfirst($row->blog_name)?></h2>
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Skin Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php  ($result) ; ?>
        <section class="inner-blog b-details-p pt-100 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details-wrap">
                            <div class="bsingle__post-thumb mb-30">
                                <img src="<?php echo base_url()."public/img/blog/".$row->small_img;?>" alt="">
                            </div>
                            <div class="meta__info">
                                <ul>
                                    <li><a href="#"> <i class="far fa-calendar-alt"></i>  <?php echo $row->blog_date; ?> </a></li>
                                    <li><a href="#"><i class="far fa-user"></i>By <?php 
									echo $author_detils[0]->name." ".$author_detils[0]->lname;
									?></a></li>
                                    <li><i class="far fa-comments"></i>
									<?php 
								$blog_id= $row->blog_id;
										 $comment_query = $this->db->query("SELECT * FROM `blog_camment` 
                           		 where blog_id='$blog_id' AND status='1' ORDER BY `blog_camment`.`cmt_id` DESC");
								$v_count= $comment_query->num_rows();
								print_r($v_count);?> Comments</li>
                                </ul>
                            </div>
                            <div class="details__content pb-50">
                                <h2><?php echo $row->blog_name;?></h2>
                                <p> <?php echo $row->short_desc;?> </p>
                                
                                     <?php   $blog_ata=  $row->long_desc1; 
									  $category_id =  $row->category_id;?>  
                                
								<p>
                                     <?php echo html_entity_decode($blog_ata);    ?> 
                                </p>

                              
                               
                                <div class="row">
                                    <div class="col-xl-12 col-md-7">
                                        <div class="post__tag">
 											<?php   $tags_id =  $row->tags_id;
											$tags_id= explode(",",$tags_id)	;?>
                                            <h5>Releted Tags</h5>
                                            <ul>
												  <?php foreach ($tag_result as $prow) 
														{     $gc_id=  $prow->b_tag_id;  	$tag_url =$prow->b_tag_url; 
																	$service_nm=  $prow->b_tag_name; 
																	if (in_array($gc_id , $tags_id))
																	{	?>
                                               				        <li><a href="<?= base_url("skin-tag/".$tag_url)?>"><?= ucfirst($service_nm)?></a></li>
													 <?php 	} }?>
                                            </ul>
								        </div>
                                    </div>
                                    <div class="col-xl-12 col-md-5 pt-35">
                                        <div class="post__share ">
                                            <h5>Social Share  <?php   $bname=  $row->blog_name;
										//	echo utf8_encode($bname); 
											?></h5>
                                            <ul>
												 <li><a href="https://facebook.com/sharer/sharer.php?u=<?php echo base_url().$this->uri->uri_string();?>" 
												 title="Facebook Share" target="_blank"><i class="fab fa-facebook-f "></i></a></li>
                                               <li><a href="https://twitter.com/intent/tweet/?text=<?php echo $row->blog_name;?>;url=<?php echo base_url().$this->uri->uri_string();?>" title="Twitter Share"  target="_blank"
											   ><i class="fab fa-twitter"></i></a></li>
 												 <li><a href="mailto:?subject=<?php echo $row->blog_name;?>body=<?php echo $row->blog_name;?>\n\n<?php echo base_url().$this->uri->uri_string();?>" 
												  target="_blank"><i class="fa fa-envelope"></i></a></li>
                                                 <li><a href="https://pinterest.com/pin/create/button/?url=<?php echo base_url().$this->uri->uri_string();?>"target="_blank">
												 <i class="fab fa-pinterest-p"></i></a></li>
												 
												 <li><a href="whatsapp://send?text=<?php echo $row->blog_name;?> <?php echo base_url().$this->uri->uri_string();?>" data-action="share/whatsapp/share" target="_blank">
												 <i class="fab fa-whatsapp"></i></a></li>
                                                 
                                            </ul>


											
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="posts_navigation pt-35 pb-35">
                                <div class="row align-items-center">

								<?php 
                                       $blog_id  =  $row->blog_id; 
                                      $query = $this->db->query("SELECT * FROM blog_tbl WHERE blog_id < '$blog_id' ORDER BY blog_id LIMIT 1");
                                         $coutn_c = $query->num_rows();
                                     foreach ($query->result_array() as $rows)
                                        {  	?>

                                    <div class="col-xl-4 col-md-5">
                                        <div class="prev-link">
                                            <span>Prev Post</span>
                                            <h4><a href="<?= base_url()."skin-blog/".$rows['blog_url'];?>" > <?php  echo $rows['blog_name'] ?> </a></h4>
                                        </div>
                                    </div>
									<?php } 
                                      $blog_id  =  $row->blog_id; 
                                      $query2 = $this->db->query("SELECT * FROM blog_tbl WHERE blog_id > '$blog_id' ORDER BY blog_id LIMIT 1");
                                       $coutn_d = $query2->num_rows();
                                            if ( $coutn_d > 0 AND  $coutn_c > 0) {
                                      ?>
                                    <div class="col-xl-4 col-md-2 text-left text-md-center">
                                        <a href="javscript:void(0)" class="blog-filter"><img  src="<?php echo base_url();?>public/jaju/img/icon/c_d01.png" alt=""></a>
                                    </div>
                                <?php 
                                            }
                                     foreach ($query2->result_array() as $rowsd)
                                        {  	?>
                                    <div class="col-xl-4 col-md-5">
                                        <div class="next-link text-left text-md-right">
                                            <span>Next Post</span>
                                            <h4><a href="<?= base_url()."skin-blog/".$rowsd['blog_url']; ?>"> <?= $rowsd['blog_name'];?></a></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="related__post mt-45 mb-85">
                                <div class="post-title">
                                    <h4>Related Post</h4>
                                </div>
                                <div class="row">

											<?php  
										 $res= 	$this->Blog_model->get_recent_blog_catigiery_wise($category_id);
									 
										  foreach ($res as $key => $rowt) {
										   ?>
                                    <div class="col-md-6">
                                        <div class="related-post-wrap mb-30">
                                            <div class="post-thumb">
                                                <img src="<?php echo base_url()."public/img/blog/".$rowt->small_img;?>" alt="">
                                            </div>
                                            <div class="rp__content">
                                                <h3><a href="<?php echo base_url()."skin-blog/".$rowt->blog_url;?>">
												<?php echo $rowt->blog_name; ?></a></h3>
                                                
                                            </div>
                                        </div>
                                    </div>
                                   <?php } ?>
                                    
                                </div>
                            </div>
											<?php  $author_id  =  $row->author_id; 
                                      $query3 = $this->db->query("SELECT * FROM `admin_login` WHERE  user_id ='$author_id'");
                                       $coutc = $query3->num_rows();
									   if ( $coutc > 0 ) {
										   $rowtt = $query3->row();  
					  ?>

                            <div class="avatar__wrap text-center mb-45">
                                <div class="avatar-img">
                                    <img src="<?php echo base_url()."public/img/".$rowtt->profile?>" alt="">
                                </div>
                                <div class="avatar__info">
                                    <h5> <?= $rowtt->name." ".$rowtt->lname;?></h5>
                                    <div class="avatar__info-social">
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
                                <div class="avatar__wrap-content">
                                    <p>  <?= $rowtt->bio?></p>
                                </div>
                            </div>
							<?php } ;?>						


                            <div class="comment__wrap pb-45 mb-45">
                                <div class="comment__wrap-title">
                                    <h5>Comments</h5>
                                </div>
 				<?php 
				/*   AND status ='0'  */  
					 $public_ip=  $this->input->ip_address();    $message="";
							 $comment_query = $this->db->query("SELECT * FROM `blog_camment` 
                            where blog_id='$blog_id' ORDER BY `blog_camment`.`cmt_id` DESC");
						 
							 foreach ($comment_query->result() as $crow)
							 {  
							     $ct_status = $crow->status;
							      $cpublic= $crow->public_ip;  
							     if ($ct_status == 1  OR $cpublic == $public_ip) {  }

							    ?>
                                <div class="single__comment mb-35" <?php if ($ct_status == 0) {
							echo	$class='style="background-color: #ddd; color: black; padding: 20px;"';	} ;?>>
                                    
                                    <div class="comment-text">
                                        <div class="avatar-name mb-15">
                                            <h6> <?php echo $crow->name;?> </h6> 
                                            <span> <?php echo  date("d M Y" ,strtotime($crow->date)) ?> </span>
                                         <!--    <a href="#" class="comment-reply"><i class="fas fa-reply"></i>Reply</a> -->
											<?php  if ($ct_status == 0) { ;?>
										 <b><br>You comment is under observation </b> 
										 <?php } ;?>
                                        </div>
                                        <p>  <?php echo  $message = $crow->message.$message;?></p>
                                    </div>
                                </div>
                               	<?php }   ?>   
                                
                            </div>
                            <div class="post-comments-form mb-50">
                                <div class="comment__wrap-title">
                                    <h5>Post Comment</h5>
                                </div>
                                <div class="comment-box">
                            <form action="<?= base_url()?>skin_blog/blog_comment" class="comment__form needs-validation" enctype="multipart/form-data" method="post" accept-charset="utf-8" novalidate>
                                      <input type="hidden" name="blog_id" id="blog_id" value="<?php    echo $blog_id  = $row->blog_id;  ;?>"> 
                                   		<input type="hidden" name="url" value="<?php echo base_url().$this->uri->uri_string();?>">
									  
								<div class="comment-field text-area mb-20">
                                            <i class="fas fa-pencil-alt"></i>
                                            <textarea name="message" id="message" cols="30" rows="10"
                                                placeholder="Enter  your comments...." required  minlength="50" maxlength="5000"></textarea>
                                                 <div class="invalid-feedback">  Please provide a valid comments. </div>
                                        </div>
                                        <div class="comment-field mb-20">
                                            <i class="far fa-user"></i>
											
                                            <input type="text" name="name" id="name" placeholder="Type your name...." required> 
                                             <div class="invalid-feedback">  Please provide a valid your nam. </div>
                                        </div>
                                        <div class="comment-field mb-20">
                                            <i class="fas fa-envelope"></i>
                                         	   <input type="email" id="email" name="email"  placeholder="Type your email...." required>
                                               <div class="invalid-feedback">  Please provide a valid email . </div>
                                        </div>
                                        <div class="comment-field mb-20">
                                            <i class="fas fa-mobile"></i>
                                          	  <input type="text" id="mobile" name="mobile" placeholder="Type your Mobile No.."
												 onkeyup="if(!$.isNumeric(this.value)){this.value = this.value.slice(0,-1);}"
                               							 pattern="[0-9]+" maxlength="10" minlength="10" required>
                                         	   <div class="invalid-feedback"> Please provide a Mobile Number ! </div>
                                        </div>
                                        <button class="btn" type="submit">Post Comments</button>
                                    </form>
                                    
                                </div>
                            </div>
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
                                    <h4>Follow Us</h4>
                                </div>
                                <div class="widget-social text-center">
                                   
									 <a target="_blank" href="https://www.facebook.com/Jaju-Skin-Clinic-100236868998068" title="Jaju clinic facebook">
									<i class="fab fa-facebook-f"></i></a>
 									
									<a  target="_blank"  href="https://www.instagram.com/jajuskinclinic/" title="Jaju clinic instagram">
									 <i class="fab fa-instagram"></i></a>
 									  <a href="javascript:void(0);" title="Youtube"><i
									 class="fab fa-youtube"></i></a>
									 	<a target="_blank" title="Jaju clinic Map"
                               		 href="https://www.google.com/maps/place/Jaju+Clinic/@19.859294,75.347471,14z/data=!4m5!3m4!1s0x0:0x52e59df451bc8466!8m2!3d19.8592556!4d75.3474678?hl=en">
 									 <i class="fal fa-map-marker-alt"></i></a>
                                   

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
                                    <h4>Latest Blog </h4>
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
                                                <h6><a href="<?php echo base_url()."skin-blog/".$blog_url;?>"> <?php  
													  echo  substr_replace($blog_name , "...",46); 
												?></a></h6>
                                             
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
                        </aside>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php   $this->load->view('layout/footer2');  
	  		   $this->load->view('layout/script'); ?>

    <?php } ?>


 <script type="text/javascript"> 	
(function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

</body>

</html>
