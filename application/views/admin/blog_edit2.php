<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Endovascular Blog  Edit </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>public/assets/media/image/favicon.png" />

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- Prism -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/prism/prism.css" type="text/css">

    <!-- App css -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/app.min.css" type="text/css">
	 <link href="<?php echo base_url();?>public/vendors/select2/css/select2.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Main scripts -->
    <script src="<?php echo base_url();?>public/vendors/bundle.js"></script>

    <!-- Form validation example -->
    <script src="<?php echo base_url();?>public/assets/js/examples/form-validation.js"></script>

    <!-- Prism -->
    <script src="<?php echo base_url();?>public/vendors/prism/prism.js"></script>

    <!-- App scripts -->
    <script src="<?php echo base_url();?>public/assets/js/app.min.js"></script>

    <script src="<?php echo base_url();?>public/vendors/select2/js/select2.min.js"></script>



     <!-- <script src="<?php echo base_url();?>public/vendors/ckeditor/ckeditor.js"></script>
    <link href="<?php echo base_url();?>public/vendors/ckeditor/sample.css" rel="stylesheet">
   
		<script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
		
 	-->
<!--    This scripti is  Laravel project OK Edtior
<script src="<?php echo base_url();?>public/vendors/okeditorsss/ckeditor.js"></script>
 
 -->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-icon"></div>
        <span>Loading...</span>
    </div>
    <!-- ./ Preloader -->

    <!-- Layout wrapper -->
    <div class="layout-wrapper">

        <?php   $this->load->view('admin/file/header')?>
        <!-- Content wrapper -->
        <div class="content-wrapper">

            <?php   $this->load->view('admin/file/navbar')?>
            <!-- Content body -->
            <div class="content-body">
                <!-- Content -->
                <div class="content ">

                    <div class="page-header">
                        <div>
                            <h3> New Endovascular Blog </h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo base_url();?>Admin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo base_url();?>blogs2/view">Endovascular Blog View</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page"> Blog Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12">

                            <?php  echo form_open_multipart('blogs2/update_Blog' ,'class="needs-validation" novalidate'); ?>


                            <div class="row">
                                <div class="col-md-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title"> Edit Endovascular Blog </h6>
                                            <!--  <P>If your form layout  <code>.{valid|invalid}-feedback</code>  .</P> -->

                                            <?php foreach ($result as $row) {    $t_id = $row->blog_id;  $status = $row->blog_status;  ?>
                                            <div class="form-row">

 											   <div class="col-md-6 mb-3">
                                                    <input name="blog_id" id="blog_id" value="<?php echo $t_id?>"
                                                        type="hidden" class="form-control">
                                                    <input type="hidden" name="url"
                                                        value="<?php echo base_url().$this->uri->uri_string();?>">

                                                    <label for="b_name">Blog Heading</label>
                                                    <input name="b_name" id="b_name" type="text" class="form-control"
                                                        value="<?php echo $row->blog_name;?>"
                                                        onload="convertToSlug(this.value)"
                                                        onkeyup="convertToSlug(this.value)" required>
                                                    <div class="invalid-tooltip"> Please Enter Location Name.</div> <br>
                                                    <code>	Permalink:*  <?php echo  base_url();?><span id="blog_slug"><?php echo $row->blog_url;?></span> </code>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="blog_url"> Blog Url </label>
                                                    <input name="blog_url" id="blog_url" type="text"
                                                        class="form-control" value="<?php echo $row->blog_url;?>"
                                                        required>
                                                    <div class="invalid-tooltip"> Please Enter Location Url. </div>
                                                </div>

                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                        <label for="short_desc">Short Description</label>
                                                        <textarea class="form-control" name="short_desc" id="short_desc"
                                                            rows="2" value=""> <?php echo $row->short_desc;?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">
                                                    <div class="form-group">
															<?php    $featured = $row->featured;?>
                                                        <div class="custom-control custom-switch">
                                                            <input name="featured" type="checkbox" class="custom-control-input"
                                                                id="customSwitch1" 	<?php if ($featured=='on') 
																{ 	echo 'checked'; 	} else {    } ?>>
                                                            <label class="custom-control-label"
                                                                for="customSwitch1"> Is featured? 
														
															</label>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="long_desc1">Long Description 1</label>
                                                        <textarea class="editor form-control" name="long_desc1"
                                                            id="long_desc1" rows="3"
                                                            value=""><?php echo $row->long_desc1;?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 d-none">
                                                    <div class="form-group">
                                                        <label for="long_desc2">Long Description 2</label>
                                                        <textarea class="editor form-control " name="long_desc2"
                                                            id="long_desc2" rows="3"
                                                            value=""><?php // echo $row->log_desc2;?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="row">


                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="largeImage">Large Image</label>
                                                                <input name="largeImage" id="largeImage" type="file"
                                                                    class="form-control" onchange="PreviewImage();">

                                                            </div>
                                                            <input type="hidden" name="old_profile2"
                                                                value="<?php echo $img_path2=  $row->long_img;?>">
                                                            <img id="prelg_profile"
                                                                src="<?php echo base_url()."public/img/blog/".$img_path2;?>"
                                                                alt="uploadPreview" style="max-width: 200px;">


                                                        </div>

                                                    </div>
                                                </div>
                                                <?php }?>

                                            </div> <br>



                                            <br><br><br><br><br><br><br><br><br><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="card">
                                        <div class="card-header"> Publish </div>
                                        <div class="card-body text-center">
                                            <button class="btn btn-primary" type="submit"><i class="ti-save"></i> &nbsp;
                                                Save Blog</button>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">Blog Status <span style="color :red">*</span> </div>
                                        <div class="card-body text-center">
                                            <div class="row">
                                                <?php  $blog_status =  $row->blog_status;?>
                                                <select name="blog_status" id="blog_status" required
                                                    class="form-control" required>
                                                    <option value="">Select</option>
                                                    <option value="1"
                                                        <?php if ($blog_status == 1) { echo "selected";} ?>>Published
                                                    </option>
                                                    <option value="0"
                                                        <?php if ($blog_status == 0) { echo "selected";} ?>>Pending
                                                    </option>
                                                </select>
                                                <div class="invalid-tooltip"> Please Select Blog Status </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">Blog Category <span style="color :red">*</span> </div>
                                        <div class="card-body text-center">
                                            <div class="row">
                                                <?php     $category_id =  $row->category_id;  	?>

                                                <select name="category_id" id="category_id" required
                                                    class="form-control" required>
                                                    <option value="">Select</option>
                                                    <?php
  	
														foreach ($cat_result as $prow) 
														{     $gc_id=  $prow->b_cat_id; 
																	$service_nm=  $prow->b_cat_name; 
																	if ($category_id == $gc_id) { 
															?>
                                                    <option value="<?php  echo $gc_id?>" selected="selected">
                                                        <?php  echo $service_nm?></option>

                                                    <?php   } else {  ?>
                                                    <option value="<?php echo $gc_id?>"><?php echo $service_nm?>
                                                    </option>

                                                    <?php   } } ?>
                                                </select>

                                                <div class="invalid-tooltip"> Please Select Blog Category </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">Blog Tags <span style="color :red">*</span> </div>
                                        <div class="card-body text-center">
                                            <?php     $tags_id =  $row->tags_id;
											$tags_id= explode(",",$tags_id)	
											?>
                                            <div class="form-grup">
                                                <select name="tags_id[]" id="tags_id" required
                                                    class="select2-example form-control" multiple>
                                                    <option value="">Select</option>
                                                    <?php foreach ($tag_result as $prow) 
														{     $gc_id=  $prow->b_tag_id; 
																	$service_nm=  $prow->b_tag_name; 

																	if (in_array($gc_id , $tags_id))
																	{
																	  	?>
                                                    <option value="<?php  echo $gc_id?>" selected="selected">
                                                        <?php  echo $service_nm?></option>

                                                    <?php   } else {  ?>
                                                    <option value="<?php echo $gc_id?>"><?php echo $service_nm?>
                                                    </option>

                                                    <?php   } } ?>
                                                </select>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">Blog Thumbnell <span style="color :red">*</span> </div>
                                        <div class="card-body text-center">
                                            <?php  $category_id =  $row->category_id;?>
                                            <div class="form-row">
                                                <div class="col-md-12">

                                                    <input type="hidden" name="old_profile"
                                                        value="<?php echo $img_path=  $row->small_img;?>">
                                                    <img src="<?php echo base_url()."public/img/blog/".$img_path;?>"
                                                        id="presm_profile" alt="profile-image"
                                                        style="max-width: 200px;">
                                                    <div class="form-group">
                                                        <label for="smallImage">Small Image</label>
                                                        <input name="smallImage" id="smallImage" type="file"
                                                            class="form-control" PreviewImage2>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
									  <div class="card">
                                        <div class="card-header"> Publish </div>
                                        <div class="card-body text-center">
                                            <button class="btn btn-primary" type="submit"><i class="ti-save"></i> &nbsp;
                                                Save Blog</button>
                                        </div>
                                    </div>




                                </div>




                            </div>
                            <?php  echo form_close();?>




                        </div>
                    </div>
                </div>


                <!-- ./ Content -->

                <!-- Footer -->
                <?php  $this->load->view('admin/file/footer')?>


            </div>
            <!-- ./ Content body -->
        </div>
        <!-- ./ Content wrapper -->
    </div>
    <!-- ./ Layout wrapper -->



			<script src="<?= base_url("Assets/tinymce/js/tinymce/tinymce.min.js"); ?>"></script>
              	<script>
              tinymce.init({
                selector: ( '#long_desc1' ),theme: "modern",height: 500,
                relative_urls : false,
                remove_script_host : false,
                convert_urls : false,
                  codesample_languages: [
                    {text: 'HTML/XML', value: 'markup'},
                    {text: 'JavaScript', value: 'javascript'},
                    {text: 'CSS', value: 'css'},
                    {text: 'PHP', value: 'php'},
                    {text: 'Ruby', value: 'ruby'},
                    {text: 'Python', value: 'python'},
                    {text: 'Java', value: 'java'},
                    {text: 'C', value: 'c'},
                    {text: 'C#', value: 'csharp'},
                    {text: 'C++', value: 'cpp'}
                ],
                plugins: [
                     "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                     "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking codesample",
                     "table contextmenu directionality emoticons paste textcolor responsivefilemanager code "
               ],
               toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
               toolbar2: "| responsivefilemanager | link unlink anchor | codesample image media | forecolor backcolor  | print preview code ",
               image_advtab: true ,
               
               external_filemanager_path:"<?php echo base_url(); ?>filemanager/",
               filemanager_title:"Responsive Filemanager" ,
               external_plugins: { "filemanager" : "<?php echo base_url(); ?>filemanager/plugin.min.js"}
             });
            </script>






    <!--   <script src="<?php echo base_url();?>public/vendors/ckeditor5/ckeditor.js"></script>
    -->
    <!-- CKEditor -->

    <script>
    /* ClassicEditor   .create( document.querySelector( '#long_desc2' ), {
                toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                    ]
                }
            })
		 	  ClassicEditor
          .create( document.querySelector( '#long_desc1' ), {
                toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                    ]
                }
            }) */
    /* 		CKEDITOR.replace( 'editor1' );     CKEDITOR.replace('long_desc1',
	{
		 height: 300,
    filebrowserUploadMethod: 'form',
 	 filebrowserUploadUrl: 'upload2.php'	}
	); */

/* 
Lat one laravel file lupload
 CKEDITOR.replace( 'long_desc1', {
  height: 300,
    filebrowserUploadMethod: 'form',
	 
  filebrowserUploadUrl: "<?php echo base_url();?>blogs/external_img/"

 });
 */


    </script>


 


    <script type="text/javascript">
    $('.select2-example').select2({
        placeholder: 'Select'
    });

    $('#tags_id').select2({
        placeholder: 'Select'
    });

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("largeImage").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("prelg_profile").src = oFREvent.target.result;
        };
    };

    function PreviewImage2() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("largeImage").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("prelg_profile").src = oFREvent.target.result;
        };
    };




    toastr.options = {
        timeOut: 6000,
        progressBar: true,
        showMethod: "slideDown",
        hideMethod: "slideUp",
        showDuration: 200,
        hideDuration: 200
    };

    <?php

 $msg= $this->session->flashdata('success');
 if ( $msg != "" )
 { 
 echo "toastr.success('$msg');";
 } 
 $msg2= $this->session->flashdata('error');
 if ( $msg2 != "" )
 {
     echo "toastr.error('$msg2');";
 } ?>


    function convertToSlug(str) {
        //replace all special characters | symbols with a space
        str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
        // trim spaces at start and end of string
        str = str.replace(/^\s+|\s+$/gm, '');
        // replace space with dash/hyphen
        str = str.replace(/\s+/g, '-');
        document.getElementById('blog_url').value = str;

        document.getElementById('blog_slug').innerHTML = str;

    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#presm_profile').attr('src', e.target.result);

            }
            reader.readAsDataURL(input.files[0]);

        }
    }
    $("#smallImage").change(function() {
        readURL(this);

    });
    </script>



</body>

</html>
