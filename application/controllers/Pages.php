<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Pages extends CI_Controller
{
    
    function __construct()
    {
        
        parent::__construct();
        #Libariry Coll
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('website_model');
        $this->load->model('testimonial_model');
        $this->load->model('clients_model');
      
        $this->load->model('Services_model');
        $this->load->model('gallery_model');
        $this->load->model('Slider_model');
        
    }
    
      public function tooth_fillin()
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
        $page_url2 = $this->uri->uri_string();
        $data['gallery']= $this->gallery_model->get_active_img_gall($page_url2);
        
        $data['location_data']= $this->Services_model->get_ative_location();
        $data['clients_logo']= $this->clients_model->get_active_clients();
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('s_tooth_fillin',$data);
    }
  
    public function s_dental_implants022()
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
        $page_url2 = $this->uri->uri_string();
        $data['gallery']= $this->gallery_model->get_active_img_gall($page_url2);
        
        $data['location_data']= $this->Services_model->get_ative_location();
        $data['clients_logo']= $this->clients_model->get_active_clients();
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('s_dental_implants',$data);
    }
    public function s_braces_orthodontic_treatment()
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
        $page_url2 = $this->uri->uri_string();
        $data['gallery']= $this->gallery_model->get_active_img_gall($page_url2);
        
        $data['location_data']= $this->Services_model->get_ative_location();
        $data['clients_logo']= $this->clients_model->get_active_clients();
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('s_braces_orthodontic_treatment',$data);
    }
    
    public function s_teeth_whitening()
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
        $page_url2 = $this->uri->uri_string();
        $data['gallery']= $this->gallery_model->get_active_img_gall($page_url2);
        
        $data['location_data']= $this->Services_model->get_ative_location();
        $data['clients_logo']= $this->clients_model->get_active_clients();
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('s_teeth_whitening',$data);
    }
    public function s_root_canal_treatment()
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
        $page_url2 = $this->uri->uri_string();
        $data['gallery']= $this->gallery_model->get_active_img_gall($page_url2);
        
        $data['location_data']= $this->Services_model->get_ative_location();
        $data['clients_logo']= $this->clients_model->get_active_clients();
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('s_root_canal_treatment',$data);
    }
    public function s_wisdom_teeth_surgery()
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
        $page_url2 = $this->uri->uri_string();
        $data['gallery']= $this->gallery_model->get_active_img_gall($page_url2);
        
        $data['location_data']= $this->Services_model->get_ative_location();
        $data['clients_logo']= $this->clients_model->get_active_clients();
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('s_wisdom_teeth_surgery',$data);
    }
    public function s_crowns_and_bridges()
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
        $page_url2 = $this->uri->uri_string();
        $data['gallery']= $this->gallery_model->get_active_img_gall($page_url2);
        
        $data['location_data']= $this->Services_model->get_ative_location();
        $data['clients_logo']= $this->clients_model->get_active_clients();
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('s_crowns_and_bridges',$data);
    }
    
    public function s_maxillofacial_trauma_management()
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
        $page_url2 = $this->uri->uri_string();
        $data['gallery']= $this->gallery_model->get_active_img_gall($page_url2);
        
        $data['location_data']= $this->Services_model->get_ative_location();
        $data['clients_logo']= $this->clients_model->get_active_clients();
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('s_maxillofacial_trauma_management',$data);
    }
    
    public function s_oral_cancer_detection_and_management()
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
        $page_url2 = $this->uri->uri_string();
        $data['gallery']= $this->gallery_model->get_active_img_gall($page_url2);
        
        $data['location_data']= $this->Services_model->get_ative_location();
        $data['clients_logo']= $this->clients_model->get_active_clients();
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('s_oral_cancer_detection_and_management',$data);
    }
    
    public function tooth_preparation()
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
        $page_url2 = $this->uri->uri_string();
        $data['gallery']= $this->gallery_model->get_active_img_gall($page_url2);
        
        $data['location_data']= $this->Services_model->get_ative_location();
        $data['clients_logo']= $this->clients_model->get_active_clients();
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('s_tooth_preparation',$data);
    }
    
    public function trial_pit()
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
        $page_url2 = $this->uri->uri_string();
        $data['gallery']= $this->gallery_model->get_active_img_gall($page_url2);
        
        $data['location_data']= $this->Services_model->get_ative_location();
        $data['clients_logo']= $this->clients_model->get_active_clients();
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('s_trial_pit',$data);
    }
    
    public function local_anesthesia()
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
        $page_url2 = $this->uri->uri_string();
        $data['gallery']= $this->gallery_model->get_active_img_gall($page_url2);
        
        $data['location_data']= $this->Services_model->get_ative_location();
        $data['clients_logo']= $this->clients_model->get_active_clients();
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('s_local_anesthesia',$data);
    }
    
    
    
    public function oral_antibiotics()
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
        $page_url2 = $this->uri->uri_string();
        $data['gallery']= $this->gallery_model->get_active_img_gall($page_url2);
        
        $data['location_data']= $this->Services_model->get_ative_location();
        $data['clients_logo']= $this->clients_model->get_active_clients();
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('s_oral_antibiotics',$data);
    }
    
    public function orthognathic_surgeries()
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
        $page_url2 = $this->uri->uri_string();
        $data['gallery']= $this->gallery_model->get_active_img_gall($page_url2);
        
        $data['location_data']= $this->Services_model->get_ative_location();
        $data['clients_logo']= $this->clients_model->get_active_clients();
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('s_orthognathic_surgeries',$data);
    }
    
    
    public function invisible_braces()
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
        $page_url2 = $this->uri->uri_string();
        $data['gallery']= $this->gallery_model->get_active_img_gall($page_url2);
        
        $data['location_data']= $this->Services_model->get_ative_location();
        $data['clients_logo']= $this->clients_model->get_active_clients();
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('s_invisible_braces',$data);
    }
    
    public function our_specialist()
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
        $page_url2 = $this->uri->uri_string();
        $data['gallery']= $this->gallery_model->get_active_img_gall($page_url2);
        
        $data['location_data']= $this->Services_model->get_ative_location();
        $data['clients_logo']= $this->clients_model->get_active_clients();
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('our_specialist',$data);
    }
    
    public function dr_rajesh_jambure()
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
        $page_url2 = $this->uri->uri_string();
        $data['gallery']= $this->gallery_model->get_active_img_gall($page_url2);
        
        $data['location_data']= $this->Services_model->get_ative_location();
        $data['clients_logo']= $this->clients_model->get_active_clients();
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('dr_rajesh_jambure',$data);
    }
    
    
    public function sitemaps()
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
        $page_url2 = $this->uri->uri_string();
        $data['gallery']= $this->gallery_model->get_active_img_gall($page_url2);
        
        $data['location_data']= $this->Services_model->get_ative_location();
        $data['clients_logo']= $this->clients_model->get_active_clients();
        $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('sitemaps',$data);
    }
     
    
 
    
    
    public function about_us()
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
        $this->load->view('about',$data);
    }
    
    
    
    public function contact_us_view()
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
        
        $this->load->view('contact',$data);
        
    }
 
    public function faq()
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
        
      
        $data['website_info']= $this->website_model->get_single_data();
        
        $this->load->view('faq',$data);
        
    }
    
    public function privacy()
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
        
        
        $data['website_info']= $this->website_model->get_single_data();
        
        $this->load->view('privacy_policy',$data);
        
    }
 
    public function termcondition()
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
        
        
        $data['website_info']= $this->website_model->get_single_data();
        
        $this->load->view('termcondition',$data);
        
    }
 
    
    
    
    
}
