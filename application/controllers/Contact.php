<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Contact extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Contact_model');
        $this->load->model('website_model');
        $this->load->model('Admin_model');    
        $this->load->model('Contact_us_email');
        $this->load->model('Subcribe_us');
        
    }
      public function contact_us()
    {
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = strip_tags($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $subject="";
        $name =  test_input($this->input->post('name'));
        $email  = test_input($this->input->post('email'));
        $mobile  = test_input($this->input->post('phone'));
       $subject  = test_input($this->input->post('subject'));
        $message  = test_input($this->input->post('message'));
        
        
         $date = date("Y-m-d");   $time = date("H:i:s");
         $status= "1";
         
     /*     $query = $this->db->query("SELECT * FROM contact where
         mobile='$mobile' AND message='$message' AND date='$date' ");
       
         
         
         if ($controws == 0)
         { */
             $data = array('name' => $name, 'email' => $email,
                 'mobile'=> $mobile ,'subject'=> $subject ,'message'=> $message ,
             'date' => $date,'time' => $time,  'status' => $status);
            $this->Contact_model->insert_contactus($data);
             $this->session->set_flashdata('success','Contacting us, we will reply soon!');
		//	$this->Contact_us_email->user_contact_email($name,$email);
		//	$this->Contact_us_email->admin_contactus_email($name,$email,$mobile,$message);
			
         
             /* }
         else
         {
         $this->session->set_flashdata('error','You are already fill up this form  Make Changes in Message!');
         
         } */
         
         
        redirect(base_url() . 'contact-us'); 
        
    }
  
    
    public function view_contact()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
             $data['result']=$this->Contact_model->getall_contact();
            $this->load->view("admin/contact_view", $data);
            
        } else 
        {  
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
         }
    }
    
    public function delete_contact($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $this->Contact_model->delete_id($t_id);
            $this->session->set_flashdata('success', 'Contact Delete successfully');
            redirect(base_url().'Contact/view_contact');
        }else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
     public function view_details($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $data = array('status' => '0' );
            $this->Contact_model->update_data($data,$t_id);
            
            $data['result'] = $this->Contact_model->get_single_data($t_id);
            $this->load->view('admin/contact_details', $data);
            
        }
        else 
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    public function export()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            if ($this->input->post('daterangepicker2') != Null)
            {
                $daterangepicker = date('Y-m-d',strtotime($this->input->post('daterangepicker')));
                
                $daterangepicker2 =date('Y-m-d',strtotime($this->input->post('daterangepicker2')));
                
                $sel_msg= "Data Shown Form date $daterangepicker TO  $daterangepicker2";
                
                $this->session->set_flashdata('export_msg',$sel_msg);
                
                $query6= $this->db->query("SELECT * FROM `contact` WHERE date
                BETWEEN '$daterangepicker' AND '$daterangepicker2'");
                $data['result'] =$query6->result();
                
             } else
            {
                $query6= $this->db->query("SELECT * FROM `contact` WHERE status='1'");
                $data['result'] =$query6->result();
                //$data['result']=$this->Inquiry_model->getnew_inquiry();
            }
            $this->load->view("admin/contact_export", $data);
            
        } else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
    }
    
 
    
  
    
    
    
    
}
 ?> 
