<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Mailing extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Contact_model');
        $this->load->model('website_model');
    }
    
    
    public function edit($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            
            $data['result'] = $this->website_model->get_single_mailing_data($t_id);
            $this->load->view('admin/email_edit', $data);
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    
    public function create()
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $this->load->view('admin/email_create');
            
        } else
        {  $data['message'] = 'Your login session has expired';
        $this->load->view('admin/login', $data); }
    }
    
    public function status($t_id,$status)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $data = array('status' => $status );
            
            $this->website_model->update_maling_data($data,$t_id);
            $this->session->set_flashdata('success','Mailing Status change Successfully!');
            redirect(base_url(). 'Mailing/view');
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    public function delete_mail($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            
            $this->website_model->delete_id($t_id);
            $this->session->set_flashdata('success', 'Mailing account delete successfully ');
            redirect(base_url() . 'Mailing/view');
        }else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    public function view()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            $data['result']=$this->website_model->get_all_mail_data();
            
            $this->load->view('admin/email_view', $data);
            
            
        } else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
    }
    
    public function add_mailing()
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
            $mailing_for  = test_input($this->input->post('mailing_for'));
            $admin_email_to  = test_input($this->input->post('admin_email_to'));
            $subject_admin  = test_input($this->input->post('subject_admin'));
            $subject_user  = test_input($this->input->post('subject_user'));
            $headers_name  = test_input($this->input->post('headers_name'));
            $headers_email  = test_input($this->input->post('headers_email'));
            $header_no_reply  = test_input($this->input->post('header_no_reply'));
               
            $admin_heading = test_input($this->input->post('admin_heading'));
            $user_heading = test_input($this->input->post('user_heading'));
            
            
            $data = array('mailing_for' => $mailing_for ,'admin_email_to' => $admin_email_to
                ,'subject_admin' => $subject_admin ,'subject_user' => $subject_user,
                'headers_name' => $headers_name ,'headers_email'=>$headers_email,
                'header_no_reply'=>$header_no_reply, 'headers_email'=>$headers_email,
                'admin_heading'=>$admin_heading, 'user_heading'=>$user_heading,
                'status'=> '1'  );
                $this->website_model->insert_email($data);
            
            $this->session->set_flashdata('success','Mailing account added successfully!');
            redirect(base_url() . 'Mailing/create');
            
            
            
        } else
        { $data['message'] = 'Your login session has expired';
        $this->load->view('admin/login', $data);}
        
        
    }
    
    public function edit_mailing()
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
            $mailing_for  = test_input($this->input->post('mailing_for'));
            $admin_email_to  = test_input($this->input->post('admin_email_to'));
            $subject_admin  = test_input($this->input->post('subject_admin'));
            $subject_user  = test_input($this->input->post('subject_user'));
            $headers_name  = test_input($this->input->post('headers_name'));
            $headers_email  = test_input($this->input->post('headers_email'));
            $header_no_reply  = test_input($this->input->post('header_no_reply'));
            
            $m_id  = test_input($this->input->post('m_id'));
            $url  = test_input($this->input->post('url'));
            
            
            $admin_heading = test_input($this->input->post('admin_heading'));
            $user_heading = test_input($this->input->post('user_heading'));
            
            
            
            $data = array('mailing_for' => $mailing_for ,'admin_email_to' => $admin_email_to
                ,'subject_admin' => $subject_admin ,'subject_user' => $subject_user,
                'headers_name' => $headers_name ,'headers_email'=>$headers_email,
                'header_no_reply'=>$header_no_reply, 'headers_email'=>$headers_email,
                'admin_heading'=>$admin_heading, 'user_heading'=>$user_heading);
                $this->website_model->update_maling_data($data,$m_id);
                
                $this->session->set_flashdata('success','Mailing account Updated successfully !');
                redirect($url);
                
                
                
        } else
        { $data['message'] = 'Your login session has expired';
        $this->load->view('admin/login', $data);}
        
        
    }
    
    
    
    
    
}
