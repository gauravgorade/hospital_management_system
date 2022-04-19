   <!-- Header -->
    <div class="header d-print-none">
        <div class="header-container">
            <div class="header-left">
                <div class="navigation-toggler">
                    <a href="#" data-action="navigation-toggler">
                        <i data-feather="menu"></i>
                    </a>
                </div>

                <div class="header-logo">
                    <a href="<?php echo base_url();?>admin">
                       <img class="logo" style=" padding: 15px;" src="<?php echo base_url()."public/img/crelite_logo.png"?>" alt="logo">
                    
                    </a>
                </div>
            </div>

            <div class="header-body">
                <div class="header-body-left">
                    <ul class="navbar-nav">
                         
                        
                    </ul>
                </div>

                <div class="header-body-right">
                    <ul class="navbar-nav">
                         <li class="nav-item dropdown d-none d-md-block">
                            <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                                <i class="maximize" data-feather="maximize"></i>
                                <i class="minimize" data-feather="minimize"></i>
                            </a>
                        </li>
 						  <li class="nav-item dropdown">
                           <?php $ac1="";
                                   $prd_inq = $this->db->query("SELECT * FROM `inquiry` WHERE status='1'LIMIT 0,2");
                                   $count33=count($prd_inq->result());
                                   if ($count33 >= 1){  $ac1="nav-link-notify";}
                                   ?>
                            <a href="#" class="nav-link <?php echo $ac1;?>" title="Appointment Inquiry" data-toggle="dropdown">
                                <i data-feather="bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                <div
                                    class="border-bottom px-4 py-3 text-center d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Appointment Inquiry </h5>
                                
                                    
                                    <small class="opacity-7"><?php echo $count33;?> Unread notifications</small>
                                </div>
                                <div class="dropdown-scroll">
                                    <ul class="list-group list-group-flush">
                                          <?php 
                                    foreach ($prd_inq->result() as $prow) {
                                        $pcid = $prow->c_id;
                                    
                                    ?>   <li class="px-4 py-3 list-group-item">
                                            <a href="<?php echo base_url()."Inquiry/inquiry_details/".$pcid;?>" class="d-flex align-items-center hide-show-toggler">
                                               
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    <?php echo substr($prow->name,0,10)?>
                                                    - <?php echo substr($prow->subject,0,75) ?>
                                                     </p>
                                                    <span class="text-muted small"> 
                                                     <i class="zmdi zmdi-time"></i><?php 
                                                     echo date("d-M", strtotime($prow->date))  ." - ". date("h:ia", strtotime($prow->time));  ?>  </span>
                                                </div>
                                            </a>
                                        </li>
                                       <?php  } ?>
                                        
                                       
                                    </ul>
                                </div>
                                <div class="px-4 py-3 text-right border-top">
                                    <ul class="list-inline small">
                                        <li class="list-inline-item mb-0">
                                            <a href="<?php echo base_url();?>Inquiry/export">View All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

 

						<li class="nav-item dropdown">
						<?php $ac="";
                                    $con_inq = $this->db->query("SELECT * FROM `contact` WHERE status='1' LIMIT 0,10");
                                  
                                    $count34=count($con_inq->result());
                                    if ($count34 >= 1){  $ac="nav-link-notify";}
                                    ?>
                            <a href="#" class="nav-link <?php echo $ac;?>" title="Contact Inquiry" data-toggle="dropdown">
                                <i  data-feather="corner-up-right"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                <div
                                    class="border-bottom px-4 py-3 text-center d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Contact Request</h5>
                                    
                                         <small class="opacity-7"><?php echo $count34;?> unread notifications</small>
                             
                                 </div>
                                <div class="dropdown-scroll">
                                    <ul class="list-group list-group-flush">
                                          <?php 
                                    foreach ($con_inq->result() as $crow) {
                                        $ccid = $crow->c_id;
                                    
                                    ?>   <li class="px-4 py-3 list-group-item">
                                            <a href="<?php echo base_url()."Contact/view_details/".$ccid;?>" class="d-flex align-items-center hide-show-toggler">
                                               
                                                <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    <?php echo substr($crow->name,0,10)?>
                                                    - <?php echo substr($crow->subject,0,75) ?>
                                                     </p>
                                                    <span class="text-muted small"> 
                                                     <i class="zmdi zmdi-time"></i><?php 
                                                     echo date("d-M", strtotime($crow->date))  ." - ". date("h:ia", strtotime($crow->time));  ?>  </span>
                                                </div>
                                            </a>
                                        </li>
                                       <?php  } ?>
                                        
                                       
                                    </ul>
                                </div>
                                <div class="px-4 py-3 text-right border-top">
                                    <ul class="list-inline small">
                                        <li class="list-inline-item mb-0">
                                            <a href="<?php echo base_url();?>Contact/view_contact">View All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                                <figure class="avatar avatar-sm">
                                    <img src="<?php echo base_url()."public/img/".$this->session->userdata('ci_profile')?>"
                                         class="rounded-circle"
                                         alt="avatar">
                                </figure>
                                <span class="ml-2 d-sm-inline d-none"> <?php  echo $this->session->userdata('ci_name');?>  </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                <div class="text-center py-4">
                                    <figure class="avatar avatar-lg mb-3 border-0">
                                        <img src="<?php echo base_url()."public/img/".$this->session->userdata('ci_profile')?>"
                                             class="rounded-circle" alt="image">
                                    </figure>
                                    <h5 class="text-center"> <?php  echo $this->session->userdata('ci_name');?> </h5>
                                    <div class="mb-3 small text-center text-muted"> <?php  echo $this->session->userdata('ci_email');?></div>
                                    <a href="<?php echo base_url() .'Users/update_profile'?>" class="btn btn-outline-light btn-rounded">
                                    Manage Your Profile </a>
                                </div>
                                <div class="list-group">
                                    
                                    <a href="<?php echo base_url() .'Admin/logout' ?>"
                                     class="list-group-item text-danger" >Sign Out!</a>
                                </div>
                                 
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item header-toggler">
                    <a href="#" class="nav-link">
                        <i data-feather="arrow-down"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>