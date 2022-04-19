<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Seo extends CI_Controller 
{
    
        function __construct()
        {
            parent::__construct();
            $this->load->library('session');
            $this->load->helper('url');
            $this->load->library('form_validation');
       
         //   $this->load->model('sms_send_model');
         //   $this->load->model('email_send_model');
            $this->load->model('website_model');
           $this->load->model('seo_model');
         }
         
         
         
          public function seo_delete($t_id)
         {
             $session_id = $this->session->userdata('client_login');
             if ($session_id == true)
             {
                  
                 $this->seo_model->delete_seo_id($t_id);
                 $this->session->set_flashdata('success', 'Seo delete successfully !');
                 redirect(base_url() . 'Seo/view_all_pages_seo');
             }else
             {
                 $data['message'] = 'Your login session has expired';
                 $this->load->view('admin/login', $data);
             }
         }
         
         
         
         
        public function view_all_pages_seo()
        {
       
            $session_id = $this->session->userdata('client_login');
            if($session_id==true)
            {
                $data['result']=$this->seo_model->get_all_seo_page();
                $this->load->view("admin/seo_view", $data);
            } else
            {
                $data['message'] = 'Your login session has expired';
                $this->load->view('admin/login', $data);
            } 
        }
        public function create_onpage_seo()
        {
            $session_id = $this->session->userdata('client_login');
            if($session_id==true)
            {
                $this->load->view('admin/seo_add');
                
            } else {
                $data['message'] = 'Your login session has expired';
                $this->load->view('admin/login', $data);
                
            }
        }
        
        public function edit_seo($t_id)
        {
            $session_id = $this->session->userdata('client_login');
            if ($session_id == true)
            {
                
                $data['result'] = $this->seo_model->get_single_data($t_id);
                $this->load->view('admin/seo_edit', $data);
                
            }else {
                $data['message'] = 'Your login session has expired';
                $this->load->view('admin/login', $data);
            }
        }
        
        public function seo_status($t_id,$status)
        {
            $session_id = $this->session->userdata('client_login');
            if ($session_id == true)
            {
                $data = array('status' => $status );
                $this->seo_model->update_seo_data($data,$t_id);
                $this->session->set_flashdata('success','SEO Status Change Successfully!');
                redirect(base_url().'Seo/view_all_pages_seo');
                
            }else 
            {
                $data['message'] = 'Your login session has expired';
                $this->load->view('admin/login', $data);
            }
        }
        public function create_seo()
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
                
                $page_name  = test_input($this->input->post('page_name'));
                $page_url = test_input($this->input->post('page_url'));
                $seo_data = $this->input->post('seo_data');
               
                $data = array('page_name' => $page_name,'page_url' => $page_url,
                    'seo_description' => $seo_data, 'status'=>1 );
                $this->seo_model->create_seo($data);
                
                $this->session->set_flashdata('success','Successfully create Seo Page!');
                redirect(base_url() . 'Seo/create_onpage_seo');
                
                
            }else
            {
                $data['message'] = 'Your login session has expired';
                $this->load->view('admin/login', $data);
            }
            
            
        }
        public function update_seo()
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
                
                $page_name  = test_input($this->input->post('page_name'));
                $page_url = test_input($this->input->post('page_url'));
                $seo_data = $this->input->post('seo_data');
                $url = $this->input->post('url');
                $seo_id = $this->input->post('seo_id');
                $data = array('page_name' => $page_name,'page_url' => $page_url,
                    'seo_description' => $seo_data);
                $this->seo_model->update_seo_data($data,$seo_id);
                
                $this->session->set_flashdata('success','Seo Page Update Successfully !');
                redirect($url);
                
                
            }else
            {
                $data['message'] = 'Your login session has expired';
                $this->load->view('admin/login', $data);
            }
            
            
        }
        
        
       
        
         
}
