  <!doctype html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Testimonial  For Endovascular </title>`

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
            <h3>Testimonial  For Endovascular </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>Admin">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>testimonial2/view_testimonial2">Testimonial View</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Testimonial Add</li>
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
<h6 class="card-title">Testimonial & Success story  For Endovascula</h6>
 <!--  <P>If your form layout  <code>.{valid|invalid}-feedback</code>  .</P> -->
 

 <?php  echo form_open_multipart('testimonial2/creting_testimonial2' ,'class="needs-validation" novalidate'); ?>
			 				
                      

   <div class="form-row">
      <div class="col-md-6 mb-3">
         <label for="fullname">Full Name</label>
         <input name="fullname" id="fullname"  type="text" class="form-control" 
            placeholder="Full Name"  required>
         <div class="invalid-tooltip">   Please Enter Full Name.  </div>
      </div>
      <div class="col-md-6 mb-3">
         <label for="cname">Company name with designation</label>
         <input name="cname" id="cname"  type="text" class="form-control" 
            placeholder="Company name">
         <div class="invalid-tooltip">
            Please Enter Company name.
         </div>
      </div>
      
         <div class="col-md-6 mb-3 d-none">
         <label for="cname">Star Rating (1 to 5)</label>
         <input name="rating" id="rating"  type="number" min="1" max="5" maxlength="1" class="form-control" 
            placeholder="Star Rating" >
         <div class="invalid-tooltip">
            Please Star Rating 1 to 5 only.
         </div>
      </div>
	   <div class="col-md-6 mb-3">
               <label for="gender"> Choose Gender </label>
          <select name="gender" id="gender" required class="form-control" required>
		<option  value="">Select</option>
		  	<option  value="Male">Male</option>
			<option  value="Female">Female</option>
		 </select>

          <div class="invalid-tooltip">   Please Choose Gender </div>
      </div>
      
      
      <div class="col-md-12">
         <label for="thought">Thought / Story </label>
           <textarea name="thought" id="thought"  class="form-control"
 		 	 rows="3" required   placeholder="Thought / Story"></textarea>
        	  <div class="invalid-tooltip">
          	  Please provide a Thought or Story
        	 </div>
      </div>
     <div class="col-md-12" style="padding: 20px;">
      <div class="row">
       <div class="col-md-8">
       <label for="userImage">Select User Image <code> Height= 100px and width= 100px;
 		 	   </code></label>
 			 <input name="userImage" id="userImage" type="file" class="form-control"  >
 		 	    <div class="invalid-tooltip">
            	  Please  Select User Image
        	 </div>
      </div>
       <div class="col-md-2">
       	<img src="<?php echo base_url()?>public/img/men.jpg" id="pre_profile" 
       	 alt="profile-image"  style="max-width: 200px;">
						
      </div>
      </div>
      </div>
   </div> <br>
   <button class="btn btn-primary" type="submit">Submit form</button>
   
<?php  echo form_close();?>
                         
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

 
<script type="text/javascript">
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

</script>











<script type="text/javascript">
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

	
</script>
</body>
 </html>
