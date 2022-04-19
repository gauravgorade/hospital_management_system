<div class="navigation">
    <div class="navigation-header">
        <span>Navigation</span> <a href="#"> <i class="ti-close"></i>
        </a>
    </div>
    <div class="navigation-menu-body">
        <ul>
            <li><a href="<?php echo base_url();?>admin"> <span class="nav-link-icon"> <i data-feather="pie-chart"></i>
                    </span> <span>Dashboard </span>
					<br> <?php  // echo  $page_url =$this->uri->uri_string();?>
                </a>
            </li>
   <!--          <li><a href="<?php echo base_url();?>Website/edit"> <span class="nav-link-icon"> <i class="ti-layout"></i>
                    </span> <span>Website Details</span>
                </a></li> -->
 			<li><a href="#" > <span class="nav-link-icon"> <i
						class="ti-bookmark-alt"></i>
				</span> <span> Blogs 2

			
				</span>
				</a>
				<ul>
		 
					<li> <a href="<?php echo base_url();?>blogs2/view"> View Blogs</a></li>
					<li> <a href="<?php echo base_url();?>blogs2/create_blog">Add Blog</a></li>
				    <li> <a href="<?php echo base_url();?>blogs2/view_blog_categories"> Blog Category</a></li>
					<li> <a href="<?php echo base_url();?>blogs2/view_blog_tag">Blog Tag's</a></li>
							 
							
				</ul>
			</li>




            <li><a href="#"> <span class="nav-link-icon"> <i class="ti-user"></i>
                    </span> <span> Admin User</span> </a>
                <ul>
                    <li><a href="<?php echo base_url();?>Users"> View Admin </a></li>
                    <li><a href="<?php echo base_url();?>Users/create"> Add Admin</a></li>

                </ul>
            </li>
			  <li><a href="#" > <span class="nav-link-icon"> <i
						class="ti-bookmark-alt"></i>
				</span> <span> Blogs</span>
				</a>
				<ul>
			<!-- 		 <li>  <a   class="active"  href="products.html">Products</a>  </li> -->
					<li ><a   href="<?php echo base_url();?>blogs/view">
							View Blogs</a></li>
					<li><a href="<?php echo base_url();?>blogs/create_blog">
							Add Blog</a></li>
				     <li><a href="<?php echo base_url();?>blogs/view_blog_categories"> Blog Category</a></li>
					 <li><a href="<?php echo base_url();?>blogs/view_blog_tag">Blog Tag's</a></li>
							 
							
				</ul>
			</li>

			   

            <li>
                <a href="#"><span class="nav-link-icon"><i data-feather="menu"></i></span> <span> Skin </span></a>
                <ul>
                    <li >
                        <a href="#">Testimonial</a>
                        <ul>
                            <li  ><a href="<?php echo base_url();?>testimonial/view_testimonial" > View Testimonial</a>
                            </li>
                            <li><a href="<?php echo base_url();?>testimonial/add_testimonial"> Add Testimonial</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Gallery</a>
                        <ul>
                         <!--    <li><a href="<?php echo base_url();?>gallery_category/add_gallerycategory">Add Category</a>
                            </li> -->
                            <li><a href="<?php echo base_url();?>gallery_category/view_gallerycategory">All Category</a>
                            </li>
                            <li><a href="<?php echo base_url();?>gallery/add_gallery">Add Gallery</a></li>
                            <li><a href="<?php echo base_url();?>gallery/view_gallery">All Gallery</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Appointment</a>
                        <ul>
                            <li><a href="<?php echo base_url();?>inquiry/view_inquiry"> View Appointment</a></li>
                            <li><a href="<?php echo base_url();?>inquiry/export"> Export Appointment</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

			<li>
                <a href="#"><span class="nav-link-icon"><i data-feather="menu"></i></span> <span> Endovascular </span></a>
                <ul>
                    <li>
                        <a href="#">Testimonial</a>
                        <ul>
                            <li><a href="<?php echo base_url();?>testimonial2/view_testimonial2"> View Testimonial</a>
                            </li>
                            <li><a href="<?php echo base_url();?>testimonial2/add_testimonial2"> Add Testimonial</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Gallery</a>
                        <ul>
                          <!--   <li><a href="<?php echo base_url();?>gallery_category2/add_gallerycategory">Add Category</a>
                            </li>  --> 
                            <li><a href="<?php echo base_url();?>gallery_category2/view_gallerycategory">Gallery Category</a>
                            </li>
                            <li><a href="<?php echo base_url();?>gallery2/add_gallery">Add Gallery</a></li>
                            <li><a href="<?php echo base_url();?>gallery2/view_gallery">All Gallery</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Appointment</a>
                        <ul>
                            <li><a href="<?php echo base_url();?>inquiry/view_inquiry"> View Appointment</a></li>
                            <li><a href="<?php echo base_url();?>inquiry/export"> Export Appointment</a></li>
                        </ul>
                    </li>
                </ul>
            </li>


			




            <li> <a href="#"> <span class="nav-link-icon"> <i data-feather="corner-up-right"></i>
                    </span> <span> Contact</span>
                </a>
                <ul>
                    <li><a href="<?php echo base_url();?>Contact/view_contact">
                            View Contact</a></li>
                    <li><a href="<?php echo base_url();?>Contact/export"> Export Contact</a></li>

                </ul>
            </li>


            <li><a href="#"> <span class="nav-link-icon"> <i data-feather="edit-3"></i>
                    </span> <span> Inquiry</span>
                </a>
                <ul>
                    <li><a href="<?php echo base_url();?>Inquiry/view_inquiry"> View
                            Inquiry</a></li>
                    <li><a href="<?php echo base_url();?>Inquiry/export"> Export
                            Inquiry</a></li>

                </ul>
            </li>

            <li><a href="#"> <span class="nav-link-icon"> <i class="ti-gallery"></i>
                    </span> <span> Slider</span>
                </a>
                <ul>
                    <li><a href="<?php echo base_url();?>Slider/view"> View Slider</a>
                    </li>
                    <li><a href="<?php echo base_url();?>Slider/create"> Add Slider</a>
                    </li>

                </ul>
            </li>



            <li><a href="#"> <span class="nav-link-icon"> <i class="ti-bookmark-alt"></i>
                    </span> <span> Review</span>
                </a>
                <ul>
                    <li><a href="<?php echo base_url();?>review/view_review"> View Review</a></li>
                    <li><a href="<?php echo base_url();?>review/add_review"> Add Review</a></li>
                </ul>
            </li>



            <!--             <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i data-feather="mail"></i>
                    </span>  <span>Mailing</span>
                </a>
                <ul>
                    <li>
                        <a href="<?php echo base_url();?>Mailing/view">View Email List </a>
                    </li>
                    <li> <a href="<?php echo base_url();?>Mailing/create">Add Email</a> </li>


                </ul>
            </li> -->

            <!--             <li><a href="#"> <span class="nav-link-icon"> <i data-feather="mail"></i>
                    </span> <span>Onpage SEO</span>
                </a>
                <ul>
                    <li><a href="<?php echo base_url();?>Seo/create_onpage_seo">Add Seo</a>
                    </li>
                    <li><a href="<?php echo base_url();?>Seo/view_all_pages_seo">All
                            Seo Pages</a></li>

                </ul>
            </li> -->


            <!--          <li><a href="#"> <span class="nav-link-icon"> <i data-feather="mail"></i>
                    </span> <span>Clients Logo</span>
                </a>
                <ul>
                    <li><a href="<?php echo base_url();?>Clients/add_clients">Add
                            Client</a></li>
                    <li><a href="<?php echo base_url();?>Clients/view_clients">All
                            Clients</a></li>

                </ul>
            </li>
 -->



        </ul>
    </div>
</div>
<!-- end::navigation -->
