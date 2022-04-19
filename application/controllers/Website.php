<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Website extends CI_Controller
{
    
    function __construct()
    {
        
        parent::__construct();
        #Libariry Coll
        $this->load->library('session');
        
        $this->load->helper('url');  
        $this->load->model('website_model');
        
     }
     
     
     
     
     public function edit()
     {
     
         $session_id = $this->session->userdata('client_login');
         if($session_id==true)
         {
             $data['result']=$this->website_model->get_single_data();
             $this->load->view("admin/website_info", $data);
             
         } else
         {
             $data['message'] = 'Your login session has expired';
             $this->load->view('admin/login', $data);
             
         }
     }
     
     public function update_websiteinfo()
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
          
             $old_profile =  test_input($this->input->post('old_profile'));
             $old_profile2 =  test_input($this->input->post('old_profile2'));
             
            
             $picture = "";
             if (! empty($_FILES['userImage']['name'])) {
                 $config['upload_path'] = 'public/img';
                 $config['max_size'] = 2100;
                 // $config['allowed_types'] = 'jpg|jpeg|png|gif';
                 $config['allowed_types'] = 'jpg|jpeg|png|gif';
                 $config['file_name'] = time() . '-' . $_FILES['userImage']['name'];
                 
                 // Load upload library and initialize configuration
                 $this->load->library('upload', $config);
                 $this->upload->initialize($config);
                 
                 if ($this->upload->do_upload('userImage')) {
                     $uploadData = $this->upload->data();
                     $picture = $uploadData['file_name'];
                     
                     $old_file_path = "public/img/".$old_profile;
                     if (file_exists($old_file_path))
                     {
                         unlink($old_file_path);
                     }
                 } else {
                     $picture = $old_profile;
                     $this->session->set_flashdata('fileerror', 'Plase Must Choose jpg|jpeg|png|gif
                            formate file and size MAX 2 MB !');
                 }
             } else {     $picture = $old_profile; }
             
             $picture2 = "";
             if (! empty($_FILES['userImage2']['name'])) {
                 $config['upload_path'] = 'public/img';
                 $config['max_size'] = 2100;
                 // $config['allowed_types'] = 'jpg|jpeg|png|gif';
                 $config['allowed_types'] = 'jpg|jpeg|png|gif';
                 $config['file_name'] = time() . '-' . $_FILES['userImage2']['name'];
                 
                 // Load upload library and initialize configuration
                 $this->load->library('upload', $config);
                 $this->upload->initialize($config);
                 
                 if ($this->upload->do_upload('userImage2')) {
                     $uploadData = $this->upload->data();
                     $picture2 = $uploadData['file_name'];
                     
                     $old_file_path2 = "public/img/".$old_profile2;
                     if (file_exists($old_file_path2))
                     {
                         unlink($old_file_path2);
                     }
                 } else {
                     $picture2 = $old_profile2;
                     $this->session->set_flashdata('fileerror', 'Plase Must Choose jpg|jpeg|png|gif
                            formate file and size MAX 2 MB !');
                 }
             } else {     $picture2 = $old_profile2; }
             
            
             
             $picture3= $picture3 =$picture4= "";
        
     
             
           
           
             $website_name = test_input($this->input->post('website_name'));
             $website_short_name = test_input($this->input->post('website_short_name'));
              $footer_about=  $this->input->post('footer_about');
             $short_address = $this->input->post('short_address');
             $address_line1 = test_input($this->input->post('address_line1'));
             $address_line2 = test_input($this->input->post('address_line2'));
             $city = test_input($this->input->post('city'));
             $state = test_input($this->input->post('state'));
               $country = test_input($this->input->post('country'));
              $pincode = test_input($this->input->post('pincode'));
             $email = test_input($this->input->post('email'));
             $mobile = test_input($this->input->post('mobile'));
             $mobile2 = test_input($this->input->post('mobile2'));
             
             $fb_id = test_input($this->input->post('fb_id'));
             $twit_id = test_input($this->input->post('twit_id'));
             $insta_id = test_input($this->input->post('insta_id'));
             $youtub_id = test_input($this->input->post('youtub_id'));
             $linkedin_id = test_input($this->input->post('linkedin_id'));
             $q_termcondiation = $this->input->post('q_termcondiation');
             
             $data = array('website_name' => $website_name, 'website_short_name' => $website_short_name,
                 'footer_about' => $footer_about,'short_address'=> $short_address ,
                 'address_line1'=> $address_line1 ,'address_line2'=> $address_line2 ,
                 'city'=> $city ,'state'=> $state ,'country'=> $country ,
                 'pincode'=> $pincode,'email'=> $email ,'mobile'=> $mobile ,'mobile2'=> $mobile2 ,
                 'fb_id'=> $fb_id ,'twit_id'=> $twit_id ,'insta_id'=> $insta_id ,
                 'youtub_id'=> $youtub_id ,'linkedin_id'=> $linkedin_id,
                 'header_logo' => $picture,'footer_logo' => $picture2,
                
                 'q_termcondiation' => $q_termcondiation);
             
             $this->website_model->update_data($data);
             
             $this->session->set_flashdata('success','Website Information Update Successfully!');
             $this->session->set_userdata('website_logo',$picture);
             $this->session->set_userdata('website_name',$website_short_name);
          
             $this->session->set_userdata('website_full_name',$website_name);
             
         }else {
             $data['message'] = 'Your login session has expired';
             $this->load->view('admin/login', $data);
         }
         redirect(base_url() . 'Website/edit');
     }
     
     
     
     public function subscribers_view()
     {
         $session_id = $this->session->userdata('client_login');
         if($session_id==true)
         {
             $data['result']=$this->website_model->get_all_subscribers();
             
             $this->load->view('admin/subscribers_view', $data);
             
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
             
             $this->website_model->update_newslater($data,$t_id);
             $this->session->set_flashdata('success','Subscribers Status Change Successfully!');
             redirect(base_url(). 'Website/subscribers_view');
             
         }else {
             $data['message'] = 'Your login session has expired';
             $this->load->view('admin/login', $data);
         }
     }
     
     public function delete_newslatterc($t_id)
     {
         $session_id = $this->session->userdata('client_login');
         if ($session_id == true)
         {
           
             $this->website_model->delete_newslatter($t_id);
             $this->session->set_flashdata('success', 'Newsletter email ID delete successfully');
             redirect(base_url() . 'Website/subscribers_view');
         }else
         {
             $data['message'] = 'Your login session has expired';
             $this->load->view('admin/login', $data);
         }
     }
    
}
