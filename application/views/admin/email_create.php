<!doctype html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Mailing </title>

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
            <h3> Mailing  </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>Admin">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>Mailing/view"> Mailing List View</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Services Add</li>
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
<h6 class="card-title">Add Mailing Address </h6>
 <!--  <P>If your form layout  <code>.{valid|invalid}-feedback</code>  .</P> -->
 

 <?php  echo form_open_multipart('Mailing/add_mailing' ,'class="needs-validation" novalidate'); ?>
			 				
                      

   <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="s_name">Mailing For <code>Eg. Contactus</code> <code> </code></label>
         <input name="mailing_for" id="mailing_for"  type="text" class="form-control"required>
         <div class="invalid-tooltip">   Please Enter Services Name.  </div>
      </div>
      <div class="col-md-6 mb-3">
         <label for="admin_email_to">Admin Email Reciver <code> Email - crelite@gmail.com </code></label>
         <input name="admin_email_to" id="admin_email_to"  type="text" class="form-control" required>
         <div class="invalid-tooltip"> Please Enter email.  </div>
      </div>
       <div data-label="Admin Email Details" class="demo-code-preview col-md-12"> 
          <div class="row"> 
           <div class="col-md-6 mb-3">
                 <label for="subject_admin">Subject of Email Admin <br><code>Notification : You have receive inquiry </code></label>
                 <input name="subject_admin" id="subject_admin"  type="text" class="form-control" required>
                 <div class="invalid-tooltip">   Please Enter Subject of Email Admin.  </div>
            </div>
              <div class="col-md-6 mb-3">
                 <label for="subject_admin"> Email Heading - Admin <br><code>New Contact Request.  </code></label>
                 <input name="admin_heading" id="admin_heading"  type="text" class="form-control" required>
                 <div class="invalid-tooltip">   Please Enter Heading - Admin.  </div>
              </div>
      </div>
      </div>
      
      
        <div data-label="User Email Details" class="demo-code-preview col-md-12"> 
       <div class="row">   
             <div class="col-md-6 mb-3">
                 <label for="subject_user">Subject of User Email.<br><code>Notification: Your request saved in our records!</code></label>
                 <input name="subject_user" id="subject_user" type="text" class="form-control" required>
                 <div class="invalid-tooltip">   Please Enter Subject of User Email.  </div>
              </div>
             
                 
              <div class="col-md-6 mb-3">
                 <label for="subject_user">Email Heading User. <br><code>Contact Request Saved In Our Records. </code></label>
                 <input name="user_heading" id="user_heading" type="text" class="form-control" required>
                 <div class="invalid-tooltip">   Please Enter Email Heading User  </div>
              </div>
      </div>
      </div>
      
       <div class="col-md-12">   
      <div class="row">
       <div class="col-md-6 mb-3">
         <label for="headers_name">Headers Name  <code>Eg.  Crelite</code></label>
         <input name="headers_name" id="headers_name"  type="text" class="form-control" required>
         <div class="invalid-tooltip">   Please Enter Headers Name.  </div>
      </div>
       <div class="col-md-6 mb-3">
         <label for="headers_email">Headers Email <code> Email Sender ID</code></label>
         <input name="headers_email" id="headers_email"  type="text" class="form-control" required>
         <div class="invalid-tooltip">   Please Enter Headers Email.  </div>
      </div>
       <div class="col-md-6 mb-3">
         <label for="header_no_reply">Header No-reply email</label>
         <input name="header_no_reply" id="header_no_reply"  type="text" class="form-control" required>
         <div class="invalid-tooltip">   Please Enter emlai.  </div>
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

   <script src="<?php echo base_url();?>public/vendors/ckeditor5/ckeditor.js"></script>
 
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

 


</script>


 
</body>
 </html>
