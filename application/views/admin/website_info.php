<!doctype html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Website Information</title>

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
            <h3>Update Website Information </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>Admin">Home</a>
                    </li>
                    
                    <li class="breadcrumb-item active" aria-current="page">Website Information</li>
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
<h6 class="card-title">Website Information </h6>
 <!--  <P>If your form layout  <code>.{valid|invalid}-feedback</code>  .</P> -->
 

 <?php  echo form_open_multipart('Website/update_websiteinfo' ,'class="needs-validation" novalidate'); ?>
			 				
          <?php  foreach ($result as $row) {   
              $t_id = $row->web_id;   
 ?>            

   <div class="form-row">
      <div class="col-md-6 mb-3">
         <label for="website_name">Website name</label>
           
         <input name="website_name" id="website_name" value="<?php echo $row->website_name?>" type="text" class="form-control" required>
         <div class="invalid-tooltip">   Please Enter Website name.  </div>
      </div>
      <div class="col-md-6 mb-3">
         <label for="website_short_name">Website short name</label>
         <input name="website_short_name" id="website_short_name" value="<?php echo $row->website_short_name?>" type="text" class="form-control" required >
         <div class="invalid-tooltip">
            Please Enter headingWebsite short name.
         </div>
      </div>
      <div class="col-md-12">
         <label for="paragraph1">Footer About</label>
         
       <textarea name="footer_about" id="footer_about"  class="form-control"><?php echo $row->footer_about?></textarea>
       
         <div class="invalid-tooltip">
            Please Enter Footer About
         </div>
      </div>
      
      <div data-label="Address details" class="demo-code-preview row"> 
   
       <div class="col-md-12">
         <label for="short_address">Short Address </label>
         
        <textarea name="short_address" id="short_address" class="form-control"required><?php echo $row->short_address?></textarea>
         <div class="invalid-tooltip">
            Please Enter  Short Address.
         </div>
      </div>
       <div class="col-md-4">
         <label for="address_line1">Address Line 1	 </label>
         <input name="address_line1" id="address_line1" value="<?php echo $row->address_line1?>"  type="text" class="form-control" required>
         <div class="invalid-tooltip">
            Please Enter Address Line  1 
         </div>
      </div>
       <div class="col-md-4">
         <label for="address_line2">Address Line 2 </label>
         <input name="address_line2" id="address_line2" value="<?php echo $row->address_line2?>" type="text" class="form-control">
         <div class="invalid-tooltip">
            Please Enter Address Line 2
         </div>
      </div>
        <div class="col-md-4">
         <label for="city">City </label>
         <input name="city" id="city" value="<?php echo $row->city?>" type="text" class="form-control" required>
         <div class="invalid-tooltip">
            Please Enter City
         </div>
      </div>
      <div class="col-md-4">
         <label for="city">State </label>
         <input name="state" id="state" value="<?php echo $row->state?>" type="text" class="form-control" required>
         <div class="invalid-tooltip">
            Please Enter State 
         </div>
      </div>
      
      
       <div class="col-md-4">
         <label for="country">Country </label>
         <input name="country" id="country" value="<?php echo $row->country?>" type="text" class="form-control" required>
         <div class="invalid-tooltip">
            Please Enter country
         </div>
      </div>
      
      
        <div class="col-md-4">
         <label for="button_link2">Pincode</label>
         <input name="pincode" id="pincode" value="<?php echo $row->pincode?>" type="text" class="form-control" required>
         <div class="invalid-tooltip">
            Please Enter Pincode 
         </div>
      </div>
    </div>  
     
     <div data-label="Contact details" class="col-md-12 demo-code-preview"> 
   	<div class="row"> 
        <div class="col-md-4">
         <label for="button_link2">Email </label>
         <input name="email" id="email" value="<?php echo $row->email?>" type="text" class="form-control" required>
         <div class="invalid-tooltip">
            Please Enter email
         </div>
      </div>
      <div class="col-md-4">
         <label for="button_link2">Mobile Number </label>
         <input name="mobile" id="mobile" value="<?php echo $row->mobile?>" type="text" class="form-control" required>
         <div class="invalid-tooltip">
            Please Enter mobile
         </div>
      </div>
       <div class="col-md-4">
         <label for="button_link2">Mobile Number 2 </label>
         <input name="mobile2" id="mobile2" value="<?php echo $row->mobile2?>" type="text" class="form-control" required>
         <div class="invalid-tooltip">
            Please Enter mobile 2
         </div>
      </div>
       </div>
     </div> 
      
      
      
  
      
      <div data-label="Social media account links" class="demo-code-preview row">
        <div class="col-md-4">
         <label for="fb_id">Facebook account url	 </label>
         <input name="fb_id" id="fb_id" value="<?php echo $row->fb_id?>"  type="text" class="form-control">
         <div class="invalid-tooltip">
            Please Enter Facebook account Url
         </div>
      </div>
      <div class="col-md-4">
         <label for="twit_id"> Twitter account url </label>
         <input name="twit_id" id="twit_id" value="<?php echo $row->twit_id?>"  type="text" class="form-control">
         <div class="invalid-tooltip">
            Please Enter Twitter Id Url
         </div>
      </div>
     
       <div class="col-md-4">
         <label for="insta_id">Instagram id url 	 </label>
         <input name="insta_id" id="insta_id" value="<?php echo $row->insta_id?>"  type="text" class="form-control">
         <div class="invalid-tooltip">
            Please Enter  Instagram id url
         </div>
      </div>
       
           <div class="col-md-4">
         <label for="youtub_id">YouTub Link 	 </label>
         <input name="youtub_id" id="youtub_id" value="<?php echo $row->youtub_id?>"  type="text" class="form-control">
         <div class="invalid-tooltip">
            Please Enter YouTub Link
         </div>
      </div>
           <div class="col-md-4">
         <label for="linkedin_id"> Linkedin Link  	 </label>
         <input name="linkedin_id" id="linkedin_id" value="<?php echo $row->linkedin_id?>"  type="text" class="form-control">
         <div class="invalid-tooltip">
            Please Enter  Linkedin
         </div>
      </div>
      </div>     
    
      
       <div data-label="Website Logo" class="demo-code-preview row">
       
       <div class="col-md-6" style="padding-top: 20px;">
       <div class="row"> 
       <div class="col-md-8">
       <label for="userImage">Header Logo <code> Width=300px; and   Height=109px Max Image Size 2MB 
 		 	   </code></label>
 			 <input name="userImage" id="userImage" type="file" class="form-control">
 		 	    <div class="invalid-tooltip">
          	  Please  Select Header Logo 
        	 </div>
      </div>
       <div class="col-md-2">
          <input type="hidden" name="old_profile" value="<?php echo $img_path=  $row->header_logo;?>">
 		 <img src="<?php echo base_url()."public/img/".$img_path;?>" id="pre_profile" 
       	 alt="profile-image"  style="max-width: 100px;">
		 </div>
		 </div>
	 </div>
	 
	 <div class="col-md-6" style="padding-top: 20px;">
         <div class="row">  
       <div class="col-md-8">
       <label for="userImage2">Select Footer Logo <code> 
        Width=300px; and  Height=109px  Max Image Size 2MB  </code></label>
 			 <input name="userImage2" id="uploadImage" onchange="PreviewImage();"  type="file" class="form-control">
 		 	    <div class="invalid-tooltip">  Please  Select User Image  </div>
         
      </div>
       <div class="col-md-2">
          <input type="hidden" name="old_profile2" value="<?php echo $img_path2=  $row->footer_logo;?>">
 		 <img id="uploadPreview"  src="<?php echo base_url()."public/img/".$img_path2;?>" 
      		 	 alt="uploadPreview"  style="max-width: 100px;">
		 </div>
		 </div>
	 </div>
      </div>
      
           
      
      
      
       <div data-label="Quotation details " class="demo-code-preview row d-none"> 
   
       <div class="col-md-12">
         <label for="short_address">Quotation Terms & Conditions </label>
         
        <textarea name="q_termcondiation"  cols="100" id="q_termcondiation" class="form-control"required>
        <?php echo $row->q_termcondiation?></textarea>
         <div class="invalid-tooltip">
            Please Enter Quotation Terms & Conditions
         </div>
      </div>
      
    
      </div>
           
      
      
      
      
   </div> <br>
   <?php  } ?>
   <button class="btn btn-primary" type="submit">Update </button>
   
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


function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
};


function PreviewImage3() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("userImage3").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview3").src = oFREvent.target.result;
    };
};

function PreviewImage4() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage4").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview4").src = oFREvent.target.result;
    };
};
 
	$('document').ready(function()
		{
		    $('textarea').each(function(){
		            $(this).val($(this).val().trim());
		        }
		    );
		});
</script>
</body>
 </html>
