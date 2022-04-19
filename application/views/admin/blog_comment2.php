<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Endovascular Blogs Comment</title>

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
            <h3>Endovascular Blogs Comment  View</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>Admin">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="<?php echo base_url();?>blogs2/view">View  Comments Blogs</a>
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
                            <h6 class="card-title"> Endovascular Blogs comments   on
								 
								<span class="badge badge-danger"  >   <?php 	foreach ($result as $row) {  

                                    	       echo $row->blog_name; $blog_id =  $row->blog_id;  $blog_url=  $row->blog_url; } ;?></span> 
										 <div class="float-right">
											<a target="_blank" class="btn btn-info" href="<?= base_url()."endovascular-blog/".$blog_url;?>">
											<i class="ti-bookmark-alt"></i> &nbsp; Visit Blog </a>
											</div> 	   
											
											
											</h6>
                            <div class="table-responsive">
                                	<table class="table table-bordered table-striped mb-0" id="datatable-default">
                                    <thead>
                                    <tr class="table-dark">
                                       <th width="3%"> #id </th>
                                        <th width="10%"> Name  </th>
										<th width="10%"> Email  </th>
                                        <th width="5%" class="text-center"> Mobile No </th>
										<th width="10%"> Date <br> Time</th>
										<th width="20%"> Comments</th>
                                       	<th width="5%"> Action</th>  
										<th width="5%">  Status</th>  
                                         </tr>
                                    </thead>
                                    <tbody>
                                 <?php  $i=0;  
								 									 
                                    	foreach ($blog_comment as $row) {  
                                    	    $t_id = $row->cmt_id;  $status = $row->status;  $i++; ?>
				 			    <tr>
                                         <td> <?php echo  $i; ?></td>
                                        <td> <?php echo $row->name; ?></td>
										<td> <?php echo substr($row->email,0, 10);?> </td> 
										 <td> <?php echo substr($row->mobile,0, 10);?> </td> 
										 <td> <?php echo $row->date; echo "<br> at  "; echo $row->time; ?></td>
										 <td> <?php echo substr($row->message,0, 40);?> </td> 
                                         <th class="text-center"><a href="<?php echo base_url()."blogs2/comments_view/".$t_id."/".$blog_id;?>" class="btn btn-primary btn-floating btn-sm">
  											<i class="ti-pencil-alt"></i></a>  
  											<a href="<?php echo base_url()."blogs2/cmt_delete/".$t_id."/".$blog_id;?>" class="btn btn-secondary btn-google btn-floating  btn-sm">
  											<i class="ti-trash"></i>  </a> 

											  
  										</th>
  										 
										  
  									    <td class="text-center">
                                             <?php /* echo $status; */  if ($status == 0){ ?>
                                            <a href="<?php echo base_url()."blogs2/cmt_status/".$t_id."/1/".$blog_id?>">  
                                            <span class="badge badge-danger">  Under <br> Observation </span></a>  
                   							<?php } else {?>
                   						<a href="<?php echo base_url()."blogs2/cmt_status/".$t_id."/0/".$blog_id;?>">
                   						   <span class="badge badge-success">  Published </span></a>  
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



<script type="text/javascript">
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
