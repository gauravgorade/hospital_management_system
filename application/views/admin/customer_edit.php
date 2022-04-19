<!doctype html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Customer Details</title>

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

		<link rel="stylesheet" href="<?php echo base_url();?>public/vendors/select2/css/select2.min.css" type="text/css">

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
            <h3>Customer </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>Admin">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>Customer/view_customer">Customer View</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Customer Update</li>
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
<h6 class="card-title">Update Customer Details</h6>
 <!--  <P>If your form layout  <code>.{valid|invalid}-feedback</code>  .</P> -->
 

 <?php  echo form_open_multipart('Customer/update_customer' ,'class="needs-validation" novalidate'); ?>
			 				
  <?php foreach ($result as $row) { ?>               
 
   <div class="form-row">
   <div data-label="Name details" class="demo-code-preview col-md-12">
   <div class="row">
 
      <div class="col-md-6 mb-3">
         <label > First Name</label>
         <input type="hidden"   name="url"  value="<?php echo base_url().$this->uri->uri_string();?>">
		 <input name="cli_id" id="cli_id"  value="<?php echo $row->cli_id;?>"  type="hidden" class="form-control" required>
     
         <input name="fanme" id="fanme"  maxlength="10"  value="<?php echo $row->name;?>"  type="text" class="form-control" required>
         <div class="invalid-tooltip">  Please Enter First Name.  </div>
      </div>
      <div class="col-md-6 mb-3">
         <label > Last Name</label>
         <input name="lanme" id="lanme"  maxlength="10"  value="<?php echo $row->last_name;?>" type="text" class="form-control">
         <div class="invalid-tooltip">  Please Enter Last Name.  </div>
      </div>
      <div class="col-md-6 mb-3">
         <label>Address</label>
         <input name="address" id="address" maxlength="25"  value="<?php echo $row->address;?>" type="text" class="form-control">
         <div class="invalid-tooltip">  Please Enter Address.  </div>
      </div>
      
       <div class="col-md-6 mb-3">
         <label> Company Name</label>
        <input name="comp_name" id="comp_name"  value="<?php echo $row->comp_name;?>"  type="text" class="form-control">
         <div class="invalid-tooltip">  Please Valid  Company Name.  </div>
     
        </div>
      </div>
      </div>
      
      
      <div data-label="Address details" class="demo-code-preview col-md-12 d-none">
      <div class="row">
       
       <div class="col-md-4 mb-3 ">
         <label > City</label>
         <input name="city" id="city"  maxlength="15"  value="<?php echo $row->city;?>"  type="text" class="form-control">
         <div class="invalid-tooltip">  Please Enter City.  </div>
      </div>
      
 
       </div> 
       </div>
   
   <div data-label="Conatact details" class="demo-code-preview col-md-12">
      <div class="row">
       <div class="col-md-6 mb-3">
         <label>Mobile Number</label>
         <input name="mobile"  id="mobile" value="<?php echo $row->mobile;?>"  type="text" class="form-control" 
         onkeyup="this.value=this.value.replace(/[^\d]/,'')" 
		 minlength="10" maxlength="10" pattern="[789][0-9]{9}" required>
         <div class="invalid-tooltip">  Please Mobile Number.  </div>
      </div>
       <div class="col-md-6 mb-3 d-none">
         <label > Mobile Number 2 (Optional)</label>
         <input name="mobile2" id="mobile2" value="<?php echo $row->mobile2;?>"  type="text" class="form-control"
          onkeyup="this.value=this.value.replace(/[^\d]/,'')" 
		 minlength="10" maxlength="10" pattern="[789][0-9]{9}" >
         <div class="invalid-tooltip">  Please Valid Mobile.  </div>
      </div>
       <div class="col-md-6 mb-3">
         <label > Email </label>
        <input name="email" id="email" maxlength="25"  value="<?php echo $row->email;?>" type="email" class="form-control">
         <div class="invalid-tooltip">  Please Valid Email.  </div>
     
        </div>
         <div class="col-md-4 mb-3 d-none">
         <label> GST No. </label>
        <input name="gstin" id="gstin" maxlength="15"  value="<?php echo $row->gstnid;?>"  type="text" class="form-control">
         <div class="invalid-tooltip">  Please Valid  GST No.  </div>
     
        </div>
           <div class="col-md-4 mb-3 d-none">
         <label> PAN Number </label>
        <input name="pan_no" id="pan_no" maxlength="10"  value="<?php echo $row->pan_no;?>"  type="text" class="form-control">
         <div class="invalid-tooltip">  Please Valid PAN Number.  </div>
     
        </div>
         
        
        
       </div> 
       </div>
       
       
       
      
       
   </div> <br>
   <button class="btn btn-primary" type="submit">Submit form</button>
   
<?php } echo form_close();?>
                         
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
<script src="<?php echo base_url();?>public/vendors/select2/js/select2.min.js"></script>

 
<script type="text/javascript">
$('.select2-example').select2({
    placeholder: 'Select'
});

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
