<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Services extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Services_model');
        $this->load->model('website_model');
        $this->load->model('testimonial_model');
        $this->load->model('clients_model');
    }
    
    public function index()
    {
        
        $page_url = $this->uri->uri_string();
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
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        
        // print_r( $data['seo_data']);
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('services',$data);
    }
    
    
    
    public function edit($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            
            $data['result'] = $this->Services_model->get_single_data($t_id);
            $this->load->view('admin/Services_edit', $data);
            
        }else {
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
            $this->Services_model->update_data($data,$t_id);
            $this->session->set_flashdata('success','Services Status change  Successfully!');
            redirect(base_url().'Services/view');
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    public function delete($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $result=$this->Services_model->get_single_data($t_id);
            $small_img=$long_img="";
            foreach ($result as $row)
            {
                $small_img =$row->small_img;  $long_img =$row->long_img;
            }
            $old_file_path = "public/img/services/".$small_img;
            $old_file_path2 = "public/img/services/".$long_img;
            if (file_exists($old_file_path))
            {
                unlink($old_file_path);
            }
            
            if (file_exists($old_file_path2))
            {
                unlink($old_file_path2);
            }
            
            $this->Services_model->delete_id($t_id);
            $this->session->set_flashdata('success','Services delete successfully !');
            redirect(base_url().'Services/view');
        }else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    
    
    public function create()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            $this->load->view('admin/Services_add');    
        } else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
    }
    
    
    public function update_Services()
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
           
            $picture = "";
            
            
            $picture2 = "";
             $services_id = test_input($this->input->post('services_id'));
           
             $picture2;
             $s_name = test_input($this->input->post('s_name'));
             $service_url = test_input($this->input->post('service_url'));
             $short_desc = test_input($this->input->post('short_desc'));
             
             $long_desc1 =  $this->input->post('long_desc1');
             $long_desc2 = $this->input->post('long_desc2');
             
             
             $data = array('s_name' => $s_name, 'short_desc' => $short_desc,
                 'long_desc1' => $long_desc1,'long_desc2'=> $long_desc2 ,
                 'service_url'=> $service_url ,
                 'small_img' => $picture,'long_img' => $picture2,'status' => 1);
           
             $this->Services_model->update_data($data,$services_id);
            
            $this->session->set_flashdata('success','Services Update Successfully!');
            redirect($url);
            
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
        redirect(base_url() . 'Services/view');
    }
    
    
    
    
    public function creting_Services()
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
            
            
            $picture2="";
           
            
       
            $s_name = test_input($this->input->post('s_name'));
            $service_url = test_input($this->input->post('service_url'));
            $short_desc = test_input($this->input->post('short_desc'));
           
            $long_desc1 =  $this->input->post('long_desc1');
            $long_desc2 = $this->input->post('long_desc2');
            
            
            $data = array('s_name' => $s_name, 'short_desc' => $short_desc,
                'long_desc1' => $long_desc1,'long_desc2'=> $long_desc2 ,
               'service_url'=> $service_url ,
                'small_img' => $picture,'long_img' => $picture2,'status' => 1);
            
            $this->Services_model->insert_data($data);
            $this->session->set_flashdata('success','Services Added Successfully!');
            //   redirect($url);
            
                
             redirect(base_url() . 'Services/create');
       } else
        { $data['message'] = 'Your login session has expired';
        $this->load->view('admin/login', $data);
        
        }
    }
    
    
    public function view()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            $data['result']=$this->Services_model->get_servicedata();
           
            $this->load->view('admin/Services_view', $data);
        } else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
    }
    
    
}

?>
