<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Home extends CI_Controller
{
    
    function __construct()
    {
      parent::__construct();
      $this->load->library('session');
      $this->load->helper('url');
      $this->load->model('website_model');
      $this->load->model('slider_model');
      $this->load->model('clients_model');
      $this->load->model('testimonial_model');
      $this->load->model('gallery_model');
      $this->load->model('Services_model');
      $this->load->model('Contact_us_email');
	$this->load->model('review_model');
	$this->load->model('Book_appointment_model'); 
	$this->load->model('Email_contact_us');
	$this->load->model('Email_enquiry');
	 
    }

public function email()
{
	$name="Vipin"; $email="vipin@gmail.com";  $mobile= "8444661814";
	 $subject="Subjects jdjl";  $message="dg fdgdfg"; $city="Abd"; $speciality="Skeeen";
	 $address="Sut girni";
    $to ="wd.crelite@gmail.com";   
    //$this->Email_contact_us->user_email($name,$email, $mobile, $subject, $message);
	//$this->Email_contact_us->admin_email($name,$email, $mobile, $subject, $message);

 	// $this->Email_enquiry->user_enquiry_email($name, $mobile, $speciality, $city, $email);
	$this->Email_enquiry->admin_enquiry_email($name, $mobile, $speciality, $city, $email);
	/* 
	$this->Book_appointment_model->contact_email($name,$email, $mobile, $subject, $message);
	$this->Book_appointment_model->enquiry_email($name,$email, $mobile, $subject, $message);
	$this->Book_appointment_model->skin_endo_email($name, $email, $mobile, $city, $speciality, $message, $address);
	$this->Book_appointment_model->endo_book_appointment_email($name, $email, $mobile, $city, $speciality, $message, $address);
	$this->Book_appointment_model->skin_book_appointment_email($name, $email, $mobile, $city, $speciality, $message, $address);
 	*/



}

    public function index()
    {
       $data['testimonial_data']= $this->testimonial_model->get_active_testimonial();
	    $data['review']= $this->review_model->get_active_review();
		 $data['slider_data']= $this->slider_model->get_ative_sliderdata();
       $data['result2']=$this->slider_model->get_ative_sliderdata();


	  $this->load->view('index', $data);
    }
	public function about_us()
	{
 		 $this->load->view('about_jaju');
	}
	public function contact_us()
	{
 		 $this->load->view('contact_us');
	}
	public function disclaimer()
	{
 		 $this->load->view('disclaimer');
	}
	public function privacyPolicy()
	{
 		 $this->load->view('privacyPolicy');
	}
	public function termsncondition()
	{
 		 $this->load->view('termsncondition');
	}
	public function sitemap()
	{
 		 $this->load->view('sitemap');
	}
/*     public function email()
    {
        $name="vipin tst"; $email="vipin.gangawane@gmail.com";
        $mobile="8446641804";$message="hello test";
    //	   $this->Contact_us_email->user_contact_email($name,$email);
    //    $this->Contact_us_email->admin_contactus_email($name,$email,$mobile,$message); 
    }
     */
    
    
    
}
