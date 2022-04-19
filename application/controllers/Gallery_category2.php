<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Gallery_category2 extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('website_model');
        $this->load->model('gallery_model2');
    }
    
   
    public function view_gallerycategory()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
          
            $data['result_ca']=$this->gallery_model2->get_gallerycategory();
            $this->load->view("admin/gallery_category2", $data);
         } else
        {
            $data['message'] = 'your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    
    public function add_gallerycategory()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
		   $this->load->view('admin/gallerycategory_add2');
            
        } 
        else {
            
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
    }
    
    public function status($t_id,$status)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $data = array('gc_status' => $status );
            //print_r($data);
            
            $this->gallery_model2->category_update_data($data,$t_id);
            $this->session->set_flashdata('success','gallery Status Change   Successfully!');
            redirect(base_url(). 'gallery_category2/view_gallerycategory');
            
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
           
            $data['result'] = $this->gallery_model2->Category_get_single_data($t_id);
            $this->load->view('admin/gallery_category_edit2', $data);
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    public function delete_gallery($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
             
            $this->gallery_model2->delete_category_id($t_id);
            $this->session->set_flashdata('success', 'Gallery Category Delete Successfully !');
            redirect(base_url().'gallery_category2/view_gallerycategory');
        }else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    
    public function update_gallery_category()
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            
            
            $url = $this->input->post('url');
           $t_id =$this->input->post('t_id');
            $cname = $this->input->post('s_name');
         
            $ser_slug = $this->input->post('service_url');
            
            $data = array('gc_name' => $cname,'gc_sulg' => $ser_slug);
            
            $this->gallery_model2->category_update_data($data,$t_id);
            $this->session->set_flashdata('success','Gallery Category Update Successfully!');
            redirect($url);
            
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
        redirect(base_url() . 'gallery2/view_gallery');
    }
    
    
    
    public function creting_gallery_category()
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            
            
            if (isset($_POST['s_name']))
            {
                
                $cname =$this->input->post('s_name');
                $ser_slug = $this->input->post('service_url');
                 
                $data = array('gc_name' => $cname,'gc_sulg' => $ser_slug,'gc_status' => 1);
                $this->gallery_model2->insert_category_data($data);
                $this->session->set_flashdata('success','Gallery Category Added Successfully!');
                
                
            } else
            {
                $this->session->set_flashdata('error','Fill Up All Entery!');
                
            }
            
            redirect(base_url() . 'gallery_category2/view_gallerycategory/');
            
        } else
        { $data['message'] = 'your login session has expired';
        $this->load->view('admin/login', $data);
        
        }
    }
    
    
    
    
    
}
