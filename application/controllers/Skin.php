<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Skin extends CI_Controller {
 
    function __construct()
    {
        
        parent::__construct();
        #Libariry Coll
        $this->load->library('session');
        $this->load->helper('url');  
        $this->load->model('admin_model');
    	$this->load->model('Testimonial_model');
		$this->load->model('gallery_model');
		  
   }

   public function index()
   {

		  $data['testimonial']= $this->Testimonial_model->get_active_testimonial();
	  	  $this->load->view('skin/skin_index',  $data);

   }
   public function gallery()
   {
	     $data['catigery']= $this->gallery_model->get_activecatigiry();
         $data['gallery']= $this->gallery_model->get_active_gallery2();

	   $this->load->view('skin/gallery',$data);
   }
   public function treatment()
   {
	   $this->load->view('skin/treatment');
   }
   public function acnescar()
   {
	   $this->load->view('skin/acnescar');
   }
   public function chemicalpeeling()
   {
	   $this->load->view('skin/chemicalpeeling');
   }
   public function cosmetictreatment()
   {
	   $this->load->view('skin/cosmetictreatment');
   }
   public function hairdisorder()
   {
	   $this->load->view('skin/hairdisorder');
   }
   public function leprosy()
   {
	   $this->load->view('skin/leprosy');
   }
   public function sexuallytrasmitted()
   {
	   $this->load->view('skin/sexuallytrasmitted');
   }
   public function skinbiopsy()
   {
	   $this->load->view('skin/skinbiopsy');
   }
   public function skindisorder()
   {
	   $this->load->view('skin/skindisorder');
   }

//   public function skin_about()
//    {
// 	   $this->load->view('skin/skin_index');
//    }


}

?>
