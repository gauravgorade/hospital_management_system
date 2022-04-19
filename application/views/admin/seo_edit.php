<!doctype html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Seo | Onpage Seo</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>public/assets/media/image/favicon.png"/>

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- Prism -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/prism/prism.css" type="text/css">

<!-- App css -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <h3>SEO </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>Admin">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>Seo/view_all_pages_seo">SEO View</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">SEO Update</li>
                </ol>
            </nav>
        </div>
    </div>

<div class="row">
 <div class="col-md-12">
  <div class="row">
     <div class="col-md-12">
        <div class="card">
           <div class="card-body">
<h6 class="card-title">Update On Page SEO </h6>
 <!--  <P>If your form layout  <code>.{valid|invalid}-feedback</code>  .</P> -->
 

 <?php  echo form_open_multipart('Seo/update_seo' ,'class="needs-validation" novalidate'); ?>
			 				
           <?php  foreach ($result as $row) {   
               $t_id = $row->seo_id;   
 ?>            
                      

   <div class="form-row">
      
      <div class="col-md-6 mb-3">
         <label for="service_url">Page Name</label>
           <input name="seo_id" id="seo_id" value="<?php echo $t_id?>" type="hidden" class="form-control">
         	 <input type="hidden"   name="url" value="<?php echo base_url().$this->uri->uri_string();?>">
	 		
	 		 <input name="page_name" id="page_name" value="<?php echo $row->page_name;?>"   type="text" class="form-control" required>
         <div class="invalid-tooltip"> Please Enter Page Name.  </div>
      </div>
       <div class="col-md-6 mb-3">
         <label for="service_url">Page Url</label>
         <input name="page_url" id="page_url"  value="<?php echo $row->page_url;?>"   type="text" class="form-control" required>
         <div class="invalid-tooltip">   Please Enter Page Url.  </div>
      </div>
      
      
       
       
       
         <div class="col-md-12">
          <div class="form-group">
          	<label for="long_desc1">Seo Data</label>
       	   <textarea class="form-control" name="seo_data" id="seo_data"
       	    rows="3"><?php echo $row->seo_description;?></textarea>
       	    
       	      </div> 
		</div>
    
       
		 
       
   </div> <br>
   <button class="btn btn-primary" type="submit">Submit form</button>
   
<?php } echo form_close();?>
         
         <br> <br> 
         
           <div data-label="SEO EXAMPLE" class="demo-code-preview col-md-12">
              <pre><code class="language-html">
&lt;title&gt;Jambure Dental Clinic - Dental Clinic in Aurangabad | Dentist in Aurangabad &lt;/title&gt;<br />
 &lt;meta name=&quot;description&quot; content=&quot;jambure dental clinic is one of the trusted clinics in Aurangabad it provides treatment for all dental problems like dental implants, teeth whitening, root canal, etc&quot;&gt;<br />
&lt;meta name=&quot;keywords&quot; content=&quot;Jambure Dental Clinic in Aurangabad | Dentist in Aurangabad | Dentist near me | Root canal in Aurangabad | Teeth Whitening Cleaning in Aurangabad | Teeth Crown in Aurangabad | Denture in Aurangabad | Teeth bridge in Aurangabad | Wisdom Tooth in Aurangabad | Dental teeth implant in Aurangabad | Clear aligners Center in Aurangabad | Cosmetic Dentist in Aurangabad | Cosmetic Dental Clinic in Aurangabad | Best Dentist in Aurangabad | Best Dental Clinic Near Me | Top Dentist in Aurangabad | Top 10 Dentist in Aurangabad | Dental Implant Cost in Aurangabad.&quot;&gt;  
       
		 
       </code> </pre>
          </div>
           
          
          
                         
    </div>
    </div>
   </div>
 </div>
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

<!-- Main scripts -->
<script src="<?php echo base_url();?>public/vendors/bundle.js"></script>

    <!-- Form validation example -->
<script src="<?php echo base_url();?>public/assets/js/examples/form-validation.js"></script>

    <!-- Prism -->
<script src="<?php echo base_url();?>public/vendors/prism/prism.js"></script>

<!-- App scripts -->
<script src="<?php echo base_url();?>public/assets/js/app.min.js"></script>

   <script src="<?php echo base_url();?>public/vendors/ckeditor5/ckeditor.js"></script>
 
<script type="text/javascript">
function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
};


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
})

ClassicEditor
.create( document.querySelector( '#long_desc2' ), {
    toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
    heading: {
        options: [
            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
        ]
    }
})

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

 
	function convertToSlug(str) 
	{
		  //replace all special characters | symbols with a space
	  str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
	  // trim spaces at start and end of string
	  str = str.replace(/^\s+|\s+$/gm,'');
	  // replace space with dash/hyphen
	  str = str.replace(/\s+/g, '-');	
	  document.getElementById('service_url').value = str;
	 }
 function readURL(input) 
 {
 	  if (input.files && input.files[0])
 		   {
 	        var reader = new FileReader();

 	        reader.onload = function (e) 
 	        {
 	            $('#pre_profile').attr('src', e.target.result);
 	        }
 		 	 reader.readAsDataURL(input.files[0]);
 	    	}
 }   $("#userImage").change(function(){readURL(this);	});

 $('document').ready(function()
			{
			    $('textarea').each(function(){
			            $(this).val($(this).val().trim());
			        }
			    );
			});
</script>
<script type="text/javascript"> 

 


</script>


 
</body>
 </html>
