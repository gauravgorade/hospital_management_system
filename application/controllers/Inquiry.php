<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Inquiry extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Inquiry_model');
        $this->load->model('Get_quote_model');
        
    }
   public  function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    
    public function get_quote()
    {
        $requestservice= "";
   
         $name =  $this->input->post('requestname');
        $email  =$this->input->post('requestemail');
        $mobile    =$this->input->post('requestphone');
       
        if ($this->input->post('requestservice')!== NULL)
        {
            $requestservice = $this->input->post('requestservice');
        } else {
            $requestservice = "Not Define";
        }
        
        if ($this->input->post('requestdate'))
        {
            $requestdate= date("Y-m-d", strtotime($this->input->post('requestdate'))) ;
        } else {
            $requestdate ="";
        }
      
        $requesttime =$this->input->post('requesttime');
       
        if ($this->input->post('requesttime'))
        {
            $requesttime =$this->input->post('requesttime');
        } else {
            $requesttime ="";
        }
        
        
        
        
        $url  = $this->input->post('url');
        $date = date("Y-m-d");     $time = date("H:i:s");
        
        
        $status= "1";
          $data = array('name' => $name, 'email' => $email,
              'mobile'=> $mobile ,'service'=> $requestservice,
              'ap_date'=> $requestdate,'ap_time'=> $requesttime,
               'date' => $date,'time' => $time,  'status' => $status);
               $this->Inquiry_model->insert_inquiry($data);
                 
               $age=$message="";
               $this->Get_quote_model->get_quote_admin($name,$email,$mobile,$age,$requestservice,$message,$requestdate,$requesttime);
               $this->Get_quote_model->get_quote_user($name,$email);
              
              $this->session->set_flashdata('success','For Book an Appointment, We will reply soon');
         
        redirect($url);
        
    }
    
    public function new_book_appointment()
    {
      
        $name =   $this->test_input($this->input->post('name'));
        $email  = $this->test_input($this->input->post('email'));
        $mobile  = $this->test_input($this->input->post('phone'));
        $message  = $this->test_input($this->input->post('message'));
        
        $service  ="Not Define";
         
        $date = date("Y-m-d");   $time = date("H:i:s");
        $status= "1";
        $url  = $this->input->post('url');
        
        $data = array('name' => $name, 'email' => $email,
            'mobile'=> $mobile ,'date' => $date,'time' => $time, 'service' => $service,
            'message' => $message, 'status' => $status);
        
        $this->Inquiry_model->insert_inquiry($data);
        
        $age=$requestservice=$requestdate=$requesttime="";
        $this->Get_quote_model->get_quote_admin($name,$email,$mobile,$age,$requestservice,$message,$requestdate,$requesttime);
        $this->Get_quote_model->get_quote_user($name,$email);
        
        
        
        $this->session->set_flashdata('success','For Book an Appointment, We will reply soon!');
        redirect($url);
        
    }
    

    public function book_appointment()
    {
        
        $bookingdate=$bookingtime="";
        $name =   $this->test_input($this->input->post('bookingname'));
        $email  =  $this->test_input($this->input->post('bookingemail'));
        $mobile  =  $this->test_input($this->input->post('bookingphone'));
        
        $age  =  $this->test_input($this->input->post('bookingage'));
        
        
        if ($this->input->post('bookingservice'))
        {
            $service= $this->input->post('bookingservice') ;
        } else
        {
            $service  ="Not Define";
        }
        
        $message =  $this->test_input($this->input->post('bookingmessage'));
        
        if ($this->input->post('bookingdate'))
        {
            $bookingdate= $this->input->post('bookingdate') ;
        } else 
        {
            $bookingdate  ="";
        }
        if ($this->input->post('bookingtime'))
        {
            $bookingtime = $this->input->post('bookingtime');
        } else
        {
            $bookingtime ="";
        }
        
        $date = date("Y-m-d");   $time = date("H:i:s");
        $status= "1";
        $url  = $this->input->post('url');
      
            $data = array('name' => $name, 'email' => $email,
                'mobile'=> $mobile ,  'age'=> $age ,  'service'=> $service ,'date' => $date,'time' => $time,
                'ap_date' => $bookingdate,'ap_time' => $bookingtime,'message' => $message, 'status' => $status);
           
            $this->Inquiry_model->insert_inquiry($data);
            
            
 
            $this->Get_quote_model->get_quote_admin($name,$email,$mobile,$age,$service,$message,$bookingdate,$bookingtime);
            $this->Get_quote_model->get_quote_user($name,$email);
            
            
            $this->session->set_flashdata('success','For Book an Appointment, We will reply soon');
             redirect($url);
        
    }
    
    public function view_inquiry()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            $data['result']=$this->Inquiry_model->getall_inquiry();
            $this->load->view("admin/inquiry_view", $data);
            
        } else
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
               
               $query6= $this->db->query("SELECT * FROM `inquiry` WHERE date 
                BETWEEN '$daterangepicker' AND '$daterangepicker2'");
               $data['result'] =$query6->result();
            } else 
            {
                $query6= $this->db->query("SELECT * FROM `inquiry` WHERE status='1'");
                $data['result'] =$query6->result();
                //$data['result']=$this->Inquiry_model->getnew_inquiry();
            }
            $this->load->view("admin/inquiry_export", $data);
            
        } else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
    }
    
    
    public function delete_inquiry($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $this->Inquiry_model->delete_id($t_id);
            $this->session->set_flashdata('success', 'Inquiry Delete successfully');
            redirect(base_url().'inquiry/view_inquiry');
        }else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    public function inquiry_details($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $data = array('status' => '0' );
            $this->Inquiry_model->update_data($data,$t_id);
            
            $data['result'] = $this->Inquiry_model->get_single_data($t_id);
            $this->load->view('admin/inquiry_details', $data);
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    
    
    
    
}
?> 
