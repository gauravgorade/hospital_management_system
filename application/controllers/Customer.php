<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Customer extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('customer_model');
    }
    
    public function view_customer()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            $data['result']=$this->customer_model->get_customer();
            $this->load->view("admin/customer_view", $data);
            
        } else
        {
            $data['message'] = 'your login session has expired';
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
                
                $query6= $this->db->query("SELECT * FROM `customer_info` WHERE curent_date
                BETWEEN '$daterangepicker' AND '$daterangepicker2'");
                $data['result'] =$query6->result();
                
            } else
            {
           
               $query6= $this->db->query("SELECT * FROM `customer_info` WHERE status='1'");
                $data['result'] =$query6->result();
               
            }
            $this->load->view("admin/customer_export", $data);
            
        } else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
    }
    
    
    
    
    public function add_customer()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
          //  $data['result_prefix']=$this->customer_model->get_prefixe();
          //  $data['result_state']=$this->customer_model->get_state();
            $this->load->view('admin/customer_add');
            
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
            
            $this->customer_model->update_data($data,$t_id);
            $this->session->set_flashdata('success','Customer Status Change Successfully!');
            redirect(base_url(). 'customer/view_customer');
            
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
             $data['result'] = $this->customer_model->get_single_data($t_id);
              $this->load->view('admin/customer_edit', $data);
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    public function delete_customer($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $this->customer_model->delete_id($t_id);
            $this->session->set_flashdata('success', 'Customer delete successfully !');
            redirect(base_url() . 'customer/view_customer');
        }else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    
    public function update_customer()
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
         
            $pre ="";
            $fanme = test_input($this->input->post('fanme'));
            $lanme = test_input($this->input->post('lanme'));
            
            $address = test_input($this->input->post('address'));
            $city = test_input($this->input->post('city'));
            $state = "";
            
            $mobile = test_input($this->input->post('mobile'));
            $mobile2 = test_input($this->input->post('mobile2'));
            $email = test_input($this->input->post('email'));
            
            $gstin = test_input($this->input->post('gstin'));
            $cli_id= test_input($this->input->post('cli_id'));
            $url  = test_input($this->input->post('url'));
            
            $pan_no = test_input($this->input->post('pan_no'));
            $comp_name = test_input($this->input->post('comp_name'));
            
            $data = array('pri' => $pre,'name' => $fanme,'last_name' => $lanme,
                'address' => $address,'city' => $city,'state' => $state,
                'mobile' => $mobile,'mobile2' => $mobile2,'email' => $email,
                'gstnid' => $gstin,'pan_no' => $pan_no,'comp_name' => $comp_name,'status' => 1);
            
            $this->customer_model->update_data($data,$cli_id);
            $this->session->set_flashdata('success','Customer Details Update Successfully!');
            redirect($url);
       
         } else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
        redirect(base_url() . 'customer/view_customer');
    }
    
    
    
    public function creting_customer()
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
            
            if (isset($_POST['fanme']))
            {
                $pre = "";
                $fanme = test_input($this->input->post('fanme'));
                $lanme = test_input($this->input->post('lanme'));
               
                $address = test_input($this->input->post('address'));
                $city = test_input($this->input->post('city'));
                $state = "";
                
                $mobile = test_input($this->input->post('mobile'));
                $mobile2 = test_input($this->input->post('mobile2'));
                $email = test_input($this->input->post('email'));
                
                $gstin = test_input($this->input->post('gstin'));
                $pan_no = test_input($this->input->post('pan_no'));
                $comp_name = test_input($this->input->post('comp_name'));
                
                $data = array('pri' => $pre,'name' => $fanme,'last_name' => $lanme,
                    'address' => $address,'city' => $city,'state' => $state,
                    'mobile' => $mobile,'mobile2' => $mobile2,'email' => $email,
                    'gstnid' => $gstin,'pan_no' => $pan_no,'comp_name' => $comp_name,'status' => 1);
                
                $this->customer_model->insert_data($data);
                $this->session->set_flashdata('success','Customer Added Successfully!');
          
            } else
            {
                $this->session->set_flashdata('error','Fill Up All Entery!');
                
            }
            
            redirect(base_url() . 'customer/add_customer');
            
        } else
        { $data['message'] = 'your login session has expired';
        $this->load->view('admin/login', $data);
      
        }
    }
    
    
    
    
}
