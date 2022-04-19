<!doctype html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gogi - Admin and Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>public/assets/media/image/favicon.png"/>

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- DataTable -->
    <link rel="stylesheet" href="<?php  echo base_url();?>public/vendors/dataTable/datatables.min.css" type="text/css">


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
        <!-- begin::navigation -->
      	<?php   $this->load->view('admin/file/navbar')?>
       <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content ">
                
    <div class="page-header">
        <div>
            <h1>Testimonial</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Testimonial</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Viw Testimonial</li>
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
                            <p class="lead">
                                
                            </p>
                             
                        </div>
                    </div>

                         <div class="card">
                        <div class="card-body">
                        <div class="row"> 
                        <div class="table-responsive">
                            <table  style="overflow-x:auto;" id="example2" class="table table-striped table-bordered tabl">
                                <thead >
                                <tr >
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                                 
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                </tr>
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
   <!-- DataTable -->
    <script src="<?php echo base_url();?>public/vendors/dataTable/datatables.min.js"></script>
    <script src="<?php echo base_url();?>public/assets/js/examples/datatable.js"></script>
     <!-- Prism -->
    <script src="<?php echo base_url();?>public/vendors/prism/prism.js"></script>
    <!-- App scripts -->
	<script src="<?php echo base_url();?>public/assets/js/app.min.js"></script>
	<script type="text/javascript">

	$(document).ready(function (){
	    $('#example2').DataTable();
	});


	
	</script>
	
	
</body>
 </html>
