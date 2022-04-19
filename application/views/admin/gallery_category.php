<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery Category </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>public/assets/media/image/favicon.png"/>

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
 
	 <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/datatables/media/css/dataTables.bootstrap4.css" />
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

  
    <!-- ./ Header -->
<?php   $this->load->view('admin/file/header')?>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- begin::navigation -->
     

		<?php   $this->load->view('admin/file/navbar')?>
        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content ">
                
    <div class="page-header">
        <div>
            <h3>Skin Gallery Category View</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>Admin">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="#">View Gallery Category</a>
                    </li>
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
<h6 class="card-title">Skin Gallery Category </h6>
 <!--  <P>If your form layout  <code>.{valid|invalid}-feedback</code>  .</P> -->
 

 <?php  echo form_open_multipart('Gallery_category/creting_gallery_category' ,'class="needs-validation" novalidate'); ?>
			 				
                      

   <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="s_name">  Category Name</label>
         <input name="s_name" id="s_name"  type="text" class="form-control" 
      		   onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" required>
         <div class="invalid-tooltip">   Please Enter  Gallery Category Name.  </div>
      </div>
      <div class="col-md-6 mb-3 ">
         <label for="service_url"> Category Url</label>
         <input name="service_url" id="service_url"  type="text" class="form-control" required>
         <div class="invalid-tooltip">   Please Enter  Gallery Category Url.  </div>
      </div>
      
   
       
       
       
    
		
	 
 
       
   </div> <br>
   <button class="btn btn-primary" type="submit">Submit form</button>
   
<?php  echo form_close();?>
                         
    </div>
    </div>



 					  <div class="card">
                        <div class="card-body">
                            <h6 class="card-title"> Gallery Category </h6>
                            <div class="table-responsive">
                                	<table class="table table-bordered table-striped mb-0" id="datatable-default">
                                    <thead>
                                    <tr class="table-dark">
                                       <th>ID </th>
                                         <th>Category  Name</th>
                                         <th>Status</th>
                                        <th>Action </th>
                                             
                                    </tr>
                                    </thead>   
                                    <tbody>
                                 <?php  $i=0;
                                 foreach ($result_ca as $row) {  
                                    	    $t_id = $row->gc_id;  $status = $row->gc_status;   $i++;?>
				 			    <tr>
                                        
                                        
                                    <td style="width: 5%;"> <?php echo $i; ?></td>
                                        <td> <?php echo $row->gc_name; ?></td>
                                         
                                         <th><a href="<?php echo base_url()."Gallery_category/edit/".$t_id;?>"      class="btn btn-primary btn-floating btn-sm">
  											<i class="ti-pencil-alt"></i></a>  
  											<a href="<?php echo base_url()."Gallery_category/delete_gallery/".$t_id;?>" class="btn btn-secondary btn-google btn-floating  btn-sm">
  											<i class="ti-trash"></i>  </a> 
  								  	  </th>
                                             <td>
                                             <?php if ($status == 1){ ?>
                                            <a href="<?php echo base_url()."Gallery_category/status/".$t_id."/0"?>">  
                                            <span class="badge badge-success">Active</span></a>  
                   							<?php } else {?>
                   						<a href="<?php echo base_url()."Gallery_category/status/".$t_id."/1";?>">
                   						   <span class="badge badge-danger">Deactivate  </span></a>  
                   							   <?php }?>
               								 </td>
                                             
                                    </tr>
                             <?php  } ?>
                                    </tbody>
                                </table>
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
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<!-- Main scripts -->
<script src="<?php echo base_url();?>public/vendors/bundle.js"></script>
  <!-- Prism -->
  
  <script src="<?php echo base_url();?>public/vendors/prism/prism.js"></script>

		<script src="<?php echo base_url();?>public/vendors/datatables/media/js/jquery.dataTables.min.js"></script>	
		<script src="<?php echo base_url();?>public/vendors/datatables/media/js/dataTables.bootstrap4.min.js"></script>		
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>	
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>	
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>		
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>	
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>	
		<script src="<?php echo base_url();?>public/vendors/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>



<!-- App scripts -->
<script src="<?php echo base_url();?>public/assets/js/app.min.js"></script>

<script src="<?php echo base_url();?>public/assets/js/examples.datatables.default.js"></script>
<script src="<?php echo base_url();?>public/assets/js/examples.datatables.row.with.details.js"></script>
<script src="<?php echo base_url();?>public/assets/js/examples.datatables.tabletools.js"></script>
    <!-- Form validation example -->
<script src="<?php echo base_url();?>public/assets/js/examples/form-validation.js"></script>


<script type="text/javascript">

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

$(document).ready(function (){
    $('#example2').DataTable();
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
</body>
</html>
