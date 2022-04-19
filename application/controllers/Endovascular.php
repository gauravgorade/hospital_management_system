<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Endovascular extends CI_Controller {
 
    function __construct()
    {
        
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');  
        $this->load->model('admin_model');
     	$this->load->model('Testimonial2_model');
		$this->load->model('gallery_model2');
   }
 
   public function endo_index()
   {
		$data['testimonial']= $this->Testimonial2_model->get_active_testimonial2();
	   $this->load->view('endovascular/endovascular_index',$data);
   }
   public function endo_gallery()
   {
	    $data['catigery']= $this->gallery_model2->get_activecatigiry();
       $data['gallery']= $this->gallery_model2->get_active_gallery2();
	   $this->load->view('endovascular/gallery',$data);
   }
   public function endo_treatment()
   {
	   $this->load->view('endovascular/treatment');
   }
   public function leg()
   {
	   $this->load->view('endovascular/leg');
   }
   
   public function lung()
   {
	   $this->load->view('endovascular/lung');
   }
   public function men()
   {
	   $this->load->view('endovascular/men');
   }
   public function women()
   {
	   $this->load->view('endovascular/women');
   }
   

//   public function skin_about()
//    {
// 	   $this->load->view('skin/skin_index');
//    }


}

?>
