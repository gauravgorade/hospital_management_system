<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Custom404 extends CI_Controller
{
    function __construct()
    {
        
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('website_model');
        
    }
    
    public function index()
    {
        // $this->load->view('admin/custom404');
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            
            $this->load->view('admin/custom404');
        } else
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
            
            
            
            $data['website_info']= $this->website_model->get_single_data();
            
            $this->load->view('custom404',$data);
        }
    }
}


?>
