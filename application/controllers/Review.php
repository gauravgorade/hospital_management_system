<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Review extends CI_Controller 
{
    
        function __construct()
        {
            parent::__construct();
            $this->load->library('session');
            $this->load->helper('url');
             $this->load->library('form_validation');
            $this->load->model('review_model');
            $this->load->model('website_model');
            $this->load->model('clients_model');
       }
       
       public function index1()
       {
           $page_url = base_url().$this->uri->uri_string();
           $seo_result= $this->website_model->get_seo_data($page_url);
           $count_seo=count($seo_result);
           if ($count_seo =='1')
           {
               $data['seo_data']= $this->website_model->get_seo_data($page_url);
           } else
           {
               $page_url= base_url();
               $data['seo_data']= $this->website_model->get_seo_data($page_url);
           }
           
           $data['clients_logo']= $this->clients_model->get_active_clients();
           $data['review_data']= $this->review_model->get_active_review();
           
           
           $data['website_info']= $this->website_model->get_single_data();
           
           $this->load->view('review',$data);
           
       }
       
        
       public function view_review()
       {   
           $session_id = $this->session->userdata('client_login');
           if($session_id==true)
           {
               $data['result']=$this->review_model->get_review();
               $this->load->view("admin/review_view", $data);   
                
           } else 
           {
               $data['message'] = 'your login session has expired';
               $this->load->view('admin/login', $data);
              
           } 
       }
       
       
       public function add_review()
       {
           $session_id = $this->session->userdata('client_login');
           if($session_id==true)
           {
               $this->load->view('admin/review_add');
               
           } else {
               $data['message'] = 'Your login session has expired';
               $this->load->view('admin/login', $data);
               
           } 
       }
      
       public function status($t_id,$status)
       {
           $session_id = $this->session->userdata('client_login');
           if ($session_id == true)
           {
               $data = array('status' => $status );
               
               $this->review_model->update_data($data,$t_id);
               $this->session->set_flashdata('success','review Status Change   Successfully!');
               redirect(base_url(). 'review/view_review');
                    
           }else {
               $data['message'] = 'Your login session has expired';
               $this->load->view('admin/login', $data);
           }
       }
       
       
       
       public function edit($t_id)
       {
           $session_id = $this->session->userdata('client_login');
           if ($session_id == true)
           {
             
               $data['result'] = $this->review_model->get_single_data($t_id);
               $this->load->view('admin/review_edit', $data);
                
           }else {
               $data['message'] = 'Your login session has expired';
               $this->load->view('admin/login', $data);
           }
       }
       
       public function delete_review($t_id)
       {
           $session_id = $this->session->userdata('client_login');
           if ($session_id == true)
           {
              $result=$this->review_model->get_single_data($t_id);
              $img_path="";
              foreach ($result as $row)
               {
                   $img_path =$row->img_path;
				   
				} 
				if ($img_path == "Female.jpg" OR $img_path=="Male.jpg") 
				{ }
				else
				 {
					$img_path = "public/img/client/".$img_path;
					if (file_exists($img_path))
						{
							unlink($img_path);
						}
				}
 
               
               $this->review_model->delete_id($t_id);
               $this->session->set_flashdata('success', 'review delete successfully !');
               redirect(base_url() . 'review/view_review');
           }else 
           {
               $data['message'] = 'Your login session has expired';
               $this->load->view('admin/login', $data);
           }
       }
       
       
       public function update_review()
       {
           $session_id = $this->session->userdata('client_login');
           if ($session_id == true)
           {
              
               function test_input($data)
               {
                   $data = trim($data);
                   $data = stripslashes($data);
                   $data = strip_tags($data);
                   $data = htmlspecialchars($data);
                   return $data;
               }
               $url = test_input($this->input->post('url'));
               $fullname = test_input($this->input->post('fullname'));
               $cname = test_input($this->input->post('cname'));
               $thought = test_input($this->input->post('thought'));
               $old_profile =  test_input($this->input->post('old_profile'));
				 $gender  = test_input($this->input->post('gender'));
               $picture = "";
               if (! empty($_FILES['userImage']['name'])) {
                   $config['upload_path'] = 'public/img/client';
                   $config['max_size'] = 2100;
                   // $config['allowed_types'] = 'jpg|jpeg|png|gif';
                   $config['allowed_types'] = 'jpg|jpeg|png|gif';
                   $config['file_name'] = time() . '-' . $_FILES['userImage']['name'];
                   
                   // Load upload library and initialize configuration
                   $this->load->library('upload', $config);
                   $this->upload->initialize($config);
                   
                   if ($this->upload->do_upload('userImage')) {
                       $uploadData = $this->upload->data();
                       $picture = $uploadData['file_name'];
                        
						if ($old_profile == "Female.jpg" OR $old_profile=="Male.jpg") 
						{
							
						}else {
 						    $old_file_path = "public/img/client/".$old_profile;
								if (file_exists($old_file_path))
								{
									unlink($old_file_path);
								}
						}

                    } else {
                       $picture = "";
                       $this->session->set_flashdata('fileerror', 'Plase Must Choose jpg|jpeg|png|gif
                            formate file and size MAX 2 MB !');
                   }
               } else {  $picture = $old_profile; }
               
               $t_id = test_input($this->input->post('t_id'));
               $rating  = test_input($this->input->post('rating'));
               $data = array('full_name' => $fullname, 'thought' => $thought, 'c_desc' => $cname, 
                  'gender' => $gender, 'img_path'=> $picture,'rating'=> $rating );
            
                  $this->review_model->update_data($data,$t_id);
                 $this->session->set_flashdata('success','review Update Successfully!');
                 redirect($url);
               
               
           }else {
               $data['message'] = 'Your login session has expired';
               $this->load->view('admin/login', $data);
           }
         redirect(base_url() . 'review/view_review');
       }
       
       
       
       public function creting_review()
       {
           $session_id = $this->session->userdata('client_login');
           if ($session_id == true)
           {
               function test_input($data)
               {
                   $data = trim($data);
                   $data = stripslashes($data);
                   $data = strip_tags($data);
                   $data = htmlspecialchars($data);
                   return $data;
               }
                 $picture="";
               if (isset($_POST['fullname']))
               {
                   
                   $fullname = test_input($this->input->post('fullname'));
                   $cname = test_input($this->input->post('cname'));
                   $thought = test_input($this->input->post('thought'));
                   $rating  = test_input($this->input->post('rating'));
				  $gender  = test_input($this->input->post('gender'));
                 

			 if (! empty($_FILES['userImage']['name']))
				 {
                   $config['upload_path'] = 'public/img/client';
                   $config['max_size'] = 2100;
                   // $config['allowed_types'] = 'jpg|jpeg|png|gif';
                   $config['allowed_types'] = 'jpg|jpeg|png|gif';
                   $config['file_name'] = time() . '-' . $_FILES['userImage']['name'];
                   
                   // Load upload library and initialize configuration
                   $this->load->library('upload', $config);
                   $this->upload->initialize($config);
                   
                   if ($this->upload->do_upload('userImage')) {
                       $uploadData = $this->upload->data();
                       $picture = $uploadData['file_name'];
                       
                    } else {
                    	 $picture =  $gender.".jpg";
                       $this->session->set_flashdata('fileerror', 'Plase Must Choose jpg|jpeg|png|gif
                            formate file and size MAX 2 MB !');
                   }
               } else { 	 $picture =  $gender.".jpg"; }
			   
  		 		$data = array('full_name' => $fullname,'thought' => $thought,  'c_desc' => $cname,
                                'img_path'=> $picture , 'rating	'=> $rating ,  'gender	'=> $gender , 'status' => 1);
                           $this->review_model->insert_data($data);
                           $this->session->set_flashdata('success','Review Added Successfully!');

               } else 
               {
                 $this->session->set_flashdata('error','Fill Up All Entery!');
                   
               }
               
            redirect(base_url() . 'review/add_review');
               
           } else
           { $data['message'] = 'your login session has expired';
           $this->load->view('admin/login', $data);
            redirect(base_url() . 'admin');
           }
       }
       
       
       
       
}
