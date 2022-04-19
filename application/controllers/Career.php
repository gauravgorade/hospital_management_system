<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Career extends CI_Controller
{
    
    function __construct()
    {
        
        parent::__construct();
        #Libariry Coll
        $this->load->library('session');
        
        $this->load->helper('url');
        $this->load->model('admin_model');
        $this->load->model('send_email_model');
        $this->load->model('User_model');
        $this->load->model('website_model');
        $this->load->model('testimonial_model');
        $this->load->model('clients_model');
        $this->load->model('career_model');
    }
    
    public function view_application()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            $data['result']=$this->career_model->getall_resume();
            $this->load->view("admin/resume_all_view", $data);
            
        } else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
 
  
    public function delete_job_application($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $result=$this->career_model->get_single_data($t_id);
            $img_path="";
            foreach ($result as $row)
            {
                $img_path =$row->resume_path;
            }
            $old_file_path = "public/resume_doc/".$img_path;
            if (file_exists($old_file_path))
            {
                unlink($old_file_path);
            }
            
            $this->career_model->delete_id($t_id);
            $this->session->set_flashdata('success', 'Application delete successfully !');
            redirect(base_url() . 'Career/view_application');
        }else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    
    public function resume_view($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $data = array('status' => '0' );
            $this->career_model->update_data($data,$t_id);
            $data['result'] = $this->career_model->get_single_data($t_id);
            $this->load->view('admin/resume_view', $data);
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    
    function apply_now()
    {
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = strip_tags($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        if (isset($_POST['name']))
        {
           
            $name= test_input($this->input->post('name'));
            $mobile = test_input($this->input->post('mobile'));
         
            $email = test_input($this->input->post('email'));
            $bio= test_input($this->input->post('bio'));
            $date =date("Y-n-d"); $time=date('h:i A');
            
            $picture="";
            if(!empty($_FILES['rusume']['name']))
            {
                $config['upload_path'] = 'public/resume_doc';
                $config['max_size']  = 2100;
                //  $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['allowed_types'] = 'doc|docx|pdf';
                $config['file_name'] = time().'-'.$_FILES['rusume']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('rusume'))
                {
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
               
                     $data = array('name' => $name,'mobile' => $mobile,  'email' => $email,
                        'resume_path'=> $picture ,'bio'=> $bio , 'status' => 1,'date' =>$date, 'time' => $time);
                    $this->career_model->insert_data($data);
                    
                    $resumelink=base_url()."public/resume_doc/".$picture;
                    $this->career_model->email_career_admin($name, $mobile, $email,$bio,$resumelink);
                    $this->career_model->email_career_user($name,$email);
                    
                    $this->session->set_flashdata('success','Apply Job Successfully!');
                    redirect(base_url() . 'career');
                }else
                {
                    $this->session->set_flashdata('error','Plase Choose Your Resume file PDF OR DOC formate and file size must be 2 MB!');
                }
            }else
            {
                $this->session->set_flashdata('error','Plase Choose Your Resume file PDF OR DOC formate !');
            }
            
            
            redirect(base_url() . 'career');
            
            
        }
        
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
        $this->load->view('career',$data);
    }
    
    
}
