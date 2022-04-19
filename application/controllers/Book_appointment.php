<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Book_appointment extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Inquiry_model');
        $this->load->model('Get_quote_model');
        $this->load->model('Book_appointment_model');
		$this->load->model('Email_contact_us');
    }

	public  function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = strip_tags($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	
	
	public function contact_email()
			{

				$name = 'manisha';
				$mobile = '9876543210';
				$email ='manisha@gmail.com';
				$subject = 'subject';
				$message ='message';

				print_r($this->Book_appointment_model->contact_email($name, $email, $mobile, $subject, $message));
			}		
	
	public function enquiry_email()
	{

		$name = 'manisha';
		$mobile = '9876543210';
		$email ='manisha@gmail.com';
		$city = 'Aurangabad';
		$speciality = 'Endovascular';

		print_r($this->Book_appointment_model->enquiry_email($name, $email, $mobile, $city, $speciality));
	}

	
	
	public function skin_endo_email()
			{

				$name = 'manisha';
				$email ='manisha@gmail.com';
				$mobile = '9876543210';
				$city = 'Aurangabad';
				$speciality = 'Skin';
				$address ='Bhalgoan Aurangabad';
				$message ='Test Email';

				print_r($this->Book_appointment_model->skin_endo_email($name, $email, $mobile, $city, $speciality, $address, $message));
			}
	
	public function endo_book_appointment_email()
			{

				$name = 'manisha';
				$email ='manisha@gmail.com';
				$mobile = '9876543210';
				$city = 'Aurangabad';
				$speciality = 'Endovascular';
				$address ='Bhalgoan Aurangabad';
				$message ='Test Email';

				print_r($this->Book_appointment_model->endo_book_appointment_email($name, $email, $mobile, $city, $speciality, $address, $message));
			}
	public function skin_book_appointment_email()
			{

				$name = 'manisha';
				$email ='manisha@gmail.com';
				$mobile = '9876543210';
				$city = 'Aurangabad';
				$speciality = 'Skin';
				$address ='Bhalgoan Aurangabad';
				$message ='Test Email';

				print_r($this->Book_appointment_model->skin_book_appointment_email($name, $email, $mobile, $city, $speciality, $address, $message));
			}
			
			
			public function contact_form()
			{
					$url  = $this->input->post('url');
					$name  = $this->test_input($this->input->post('name'));
					$mobile  = $this->test_input($this->input->post('mobile'));
					$email  = $this->test_input($this->input->post('email'));
					$subject  = $this->test_input($this->input->post('subject'));
					$message =   $this->test_input($this->input->post('message'));
					   $date = date("Y-m-d");   $time = date("H:i:s");   $status= "1";
					$data= array(
							'name' => $name,'mobile' => $mobile, 'email' =>$email,
							'subject' =>$subject, 'message' =>$message,
							'date' => $date,'time' => $time,  'status' => $status
							
						);
						$this->Book_appointment_model->contact_us($data);		
						 	$this->Email_contact_us->user_email($name,$email, $mobile, $subject, $message);
							$this->Email_contact_us->admin_email($name,$email, $mobile, $subject, $message);

						$this->session->set_flashdata('success','Thank you for contacting us we will get back to you soon !');
						redirect($url);
			}
			public function homeshortappointment()
			{


					$url  = $this->input->post('url');
					$yname  = $this->test_input($this->input->post('yname'));
					$mobileno  = $this->test_input($this->input->post('mobileno'));
					$city  = $this->test_input($this->input->post('city'));
					$servicesname =   $this->test_input($this->input->post('servicesname'));
					  $date = date("Y-m-d");   $time = date("H:i:s");   $status= "1";
					$data= array(
							'name' => $yname,'mobile' => $mobileno, 'city' =>$city,
							'service' =>$servicesname,'date' => $date,'time' => $time,  'status' => $status
							
						);
						$this->Book_appointment_model->insert_data($data);
						
						//$this->Email_enquiry->user_enquiry_email($yname, $mobileno, $servicesname, $city);
						$this->Email_enquiry->admin_enquiry_email($yname, $mobileno, $servicesname, $city);

						$this->session->set_flashdata('success','Thank you for contacting us we will get back to you soon !');
						redirect($url);
			}


		public function skeen_endo()
		{

			$date = '';
			$vascularTreatment = '';

				$url  = $this->input->post('url');
				$name =   $this->test_input($this->input->post('name'));
				$email  = $this->test_input($this->input->post('email'));
				$age  = $this->test_input($this->input->post('age'));
				$gender  = $this->test_input($this->input->post('gender'));
				$mobile  = $this->test_input($this->input->post('mobile'));
				$address  = $this->test_input($this->input->post('address'));
				$city  = $this->test_input($this->input->post('city'));
				
				$selectspeciality  = $this->test_input($this->input->post('selectspeciality'));

				##skin
					$skin_hospitallocation  = $this->test_input($this->input->post('skin_hospitallocation'));
					$skinTreatments = $this->test_input($this->input->post('skinTreatments'));
					$skin_date  = $this->test_input($this->input->post('skin_date'));
					$skin_sloat  = $this->test_input($this->input->post('skin_sloat'));
					$skin_msg = $this->test_input($this->input->post('skin_msg'));

				#endo
					$endo_hospitallocation  = $this->test_input($this->input->post('endo_hospitallocation'));
					$services  = $this->test_input($this->input->post('services'));
					$endovascularTreatment  = $this->test_input($this->input->post('endovascularTreatment'));
					$endovascularDisease  = $this->test_input($this->input->post('endovascularDisease'));
					$endo_date1  = $this->test_input($this->input->post('endodate1'));
					$endo_date2  = $this->test_input($this->input->post('endodate2'));
					$endo_date3  = $this->test_input($this->input->post('endodate3'));
					$endo_time  = $this->test_input($this->input->post('endo_time'));
					$endo_msg  = $this->test_input($this->input->post('endo_msg'));

					if($endo_date1 != NULL)
					{
						$date = $endo_date1;
					}
					else if ($endo_date2 != NULL)
					{
						$date = $endo_date2;
					}
					else
					{
						$date = $endo_date3;
					}


					if($endovascularTreatment != NULL)
					{
						$vascularTreatment = $endovascularTreatment;
					}
					else
					{
						$vascularTreatment = $endovascularDisease;
					}

					$data= array(
						'name' => $name,'email' => $email, 'age' =>$age,
						'gender' =>$gender,'mobile' => $mobile, 'address'=> $address,
						'city'=> $city, 
						'selectspeciality'=> $selectspeciality, 

						'skin_hospitallocation'=> $skin_hospitallocation,
						'skinTreatments'=> $skinTreatments, 'skin_date'=> $skin_date, 'skin_sloat'=> $skin_sloat, 
						'skin_msg'=> $skin_msg,
						
						'endo_hospitallocation'=> $endo_hospitallocation, 'services'=> $services, 
						'endovascularTreatment'=> $vascularTreatment, 'endo_date'=> $date, 'endo_time'=> $endo_time, 
						'endo_msg'=> $endo_msg,
						
					);
					$this->Book_appointment_model->insert_appointment($data);	
					// $this->Book_appointment_model->endo_book_appointment_email($name,$email);		


						// $this->db->last_query();
						// print_r($data);
						// die();

					$this->session->set_flashdata('success','Thank you for contacting us we will get back to you soon !');
					redirect($url);
		}
		public function endo_book_appointment()
		{

			$date = '';
			$vascularTreatment = '';

				$url  = $this->input->post('url');
				$name =   $this->test_input($this->input->post('name'));
				$email  = $this->test_input($this->input->post('email'));
				$age  = $this->test_input($this->input->post('age'));
				$gender  = $this->test_input($this->input->post('gender'));
				$mobile  = $this->test_input($this->input->post('mobile'));
				$address  = $this->test_input($this->input->post('address'));
				$city  = $this->test_input($this->input->post('city'));
				
				$selectspeciality  = $this->test_input($this->input->post('selectspeciality'));
				#endo
					$endo_hospitallocation  = $this->test_input($this->input->post('endo_hospitallocation'));
					$services  = $this->test_input($this->input->post('services'));
					$endovascularTreatment  = $this->test_input($this->input->post('endovascularTreatment'));
					$endovascularDisease  = $this->test_input($this->input->post('endovascularDisease'));
					$endo_date4  = $this->test_input($this->input->post('endodate4'));
					$endo_date5  = $this->test_input($this->input->post('endodate5'));
					$endo_date6  = $this->test_input($this->input->post('endodate6'));
					$endo_time  = $this->test_input($this->input->post('endo_time'));
					$endo_msg  = $this->test_input($this->input->post('endo_msg'));

					if($endo_date4 != NULL)
					{
						$date = $endo_date4;
					}
				else if ($endo_date5 != NULL)
					{
						$date = $endo_date5;
					}
				else
				{
					$date = $endo_date6;
					}


					if($endovascularTreatment != NULL)
					{
						$vascularTreatment = $endovascularTreatment;
					}
					else
					{
						$vascularTreatment = $endovascularDisease;
					}

					$data= array(
						'name' => $name,'email' => $email, 'age' =>$age,
						'gender' =>$gender,'mobile' => $mobile, 'address'=> $address,
						'city'=> $city, 
						'selectspeciality'=> $selectspeciality, 

						'endo_hospitallocation'=> $endo_hospitallocation, 'services'=> $services, 
						'endovascularTreatment'=> $vascularTreatment, 'endo_date'=> $date, 'endo_time'=> $endo_time, 
						'endo_msg'=> $endo_msg,
						
					);
					$this->Book_appointment_model->insert_appointment($data);
					// $this->Book_appointment_model->endo_book_appointment_email($name,$email);

						// $this->db->last_query();
						// print_r($data);
						// die();

					$this->session->set_flashdata('success','Thank you for contacting us we will get back to you soon !');
					redirect($url);
		}
		public function skeen_book_appointment()
		{
					$url  = $this->input->post('url');
					$name =   $this->test_input($this->input->post('name'));
					$email  = $this->test_input($this->input->post('email'));
					$age  = $this->test_input($this->input->post('age'));
					$gender  = $this->test_input($this->input->post('gender'));
					$mobile  = $this->test_input($this->input->post('mobile'));
					$address  = $this->test_input($this->input->post('address'));
					$city  = $this->test_input($this->input->post('city'));
					
					$selectspeciality  = $this->test_input($this->input->post('selectspeciality'));

					##skin
						$skin_hospitallocation  = $this->test_input($this->input->post('skin_hospitallocation'));
						$skinTreatments = $this->test_input($this->input->post('skinTreatments'));
						$skin_date  = $this->test_input($this->input->post('skin_date'));
						$skin_sloat  = $this->test_input($this->input->post('skin_sloat'));
						$skin_msg = $this->test_input($this->input->post('skin_msg'));

						$data= array(
							'name' => $name,
							'email' => $email, 
							'age' =>$age,
							'gender' =>$gender,
							'mobile' => $mobile, 
							'address'=> $address,
							'city'=> $city, 
							'selectspeciality'=> $selectspeciality, 

							'skin_hospitallocation'=> $skin_hospitallocation,
							'skinTreatments'=> $skinTreatments, 
							'skin_date'=> $skin_date, 
							'skin_sloat'=> $skin_sloat, 
							'skin_msg'=> $skin_msg,
							
						);
					$this->Book_appointment_model->insert_appointment($data);
					// $this->Book_appointment_model->skeen_book_appointment_email($name,$email);

						// 	$this->db->last_query();
						// print_r($data);
						// die();
						$this->session->set_flashdata('success','Thank you for contacting us we will get back to you soon !');
						redirect($url);
								}
}
