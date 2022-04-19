<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Gallery extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('website_model');
        $this->load->model('gallery_model');
    }
    
   
    
    public function index()
    {
        $page_url =$this->uri->uri_string();
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
        
        $data['activecatigiry']= $this->gallery_model->get_activecatigiry();
       // $data['active_g_serv']= $this->gallery_model->get_active_g_service();
        //  $data['result_ser']= $this->gallery_model->get_gallery_service();
        $data['gallery']= $this->gallery_model->get_active_clients();
        $data['website_info']= $this->website_model->get_single_data();
        $this->load->view('gallery',$data);
        
    }
    

    public function view_gallery()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
         //   $data['result_ser']= $this->gallery_model->get_gallery_service();
            $data['result']=$this->gallery_model->get_gallery();
            $this->load->view("admin/gallery_view", $data);
            
        } else
        {
            $data['message'] = 'your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    
    public function add_gallery()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
           
          //  $data['result_ser']= $this->gallery_model->get_gallery_service();
         //   $data['result_ser2']= $this->gallery_model->get_activecatigiry();
            $this->load->view('admin/gallery_add');
            
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
            
            $this->gallery_model->update_data($data,$t_id);
            $this->session->set_flashdata('success','gallery Status Change   Successfully!');
            redirect(base_url(). 'gallery/view_gallery');
            
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
            $data['result'] = $this->gallery_model->get_single_data($t_id);
            $this->load->view('admin/gallery_edit', $data);
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    public function delete_gallery($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $result=$this->gallery_model->get_single_data($t_id);
            $img_path="";
            foreach ($result as $row)
            {
                $img_path =$row->img_path;
            }
            $old_file_path = "public/img/gallery/".$img_path;
            if (file_exists($old_file_path))
            {
                unlink($old_file_path);
            }
            
            $this->gallery_model->delete_id($t_id);
            $this->session->set_flashdata('success', 'gallery delete successfully !');
            redirect(base_url() . 'gallery/view_gallery');
        }else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    
    public function update_gallery()
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
            $url = test_input($this->input->post('url'));
            $cname = test_input($this->input->post('cname'));
            $gallery_category_id = test_input($this->input->post('gallery_category_id'));
            
            $old_profile =  test_input($this->input->post('old_profile'));
            $picture = "";
            if (! empty($_FILES['userImage']['name'])) {
                $config['upload_path'] = 'public/img/gallery';
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
                    
                    $old_file_path = "public/img/gallery/".$old_profile;
                    if (file_exists($old_file_path))
                    {
                        unlink($old_file_path);
                    }
                } else {
                    $picture = "";
                    $this->session->set_flashdata('fileerror', 'Plase Must Choose jpg|jpeg|png|gif
                            formate file and size MAX 2 MB !');
                }
            } else {  $picture = $old_profile; }
            
            
            $t_id = test_input($this->input->post('t_id'));
            $ser_slug = test_input($this->input->post('ser_slug'));
            
            $data = array('name' => $cname,'ser_slug' => $ser_slug,
                'img_path'=> $picture,'g_ccategory_id'=>  $gallery_category_id);
            
            $this->gallery_model->update_data($data,$t_id);
            $this->session->set_flashdata('success','gallery Update Successfully!');
            redirect($url);
            
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
        redirect(base_url() . 'gallery/view_gallery');
    }
    
    
    
    public function creting_gallery()
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
            
            if (isset($_POST['cname']))
            {
                
                $cname = test_input($this->input->post('cname'));
                $ser_slug = test_input($this->input->post('ser_slug'));
                
                $gallery_category_id = test_input($this->input->post('gallery_category_id'));
                $picture="";
                if(!empty($_FILES['userImage']['name']))
                {
                    $config['upload_path'] = 'public/img/gallery';
                    $config['max_size']  = 2100;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    /*    $config['allowed_types'] = 'doc|pdf'; */
                    $config['file_name'] = time().'-'.$_FILES['userImage']['name'];
                    
                    //Load upload library and initialize configuration
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    
                    if($this->upload->do_upload('userImage'))
                    {
                        $uploadData = $this->upload->data();
                        $picture = $uploadData['file_name'];
                        
                        $data = array('name' => $cname,'ser_slug' => $ser_slug,
                            'img_path'=> $picture , 'status' => 1, 'g_ccategory_id' => $gallery_category_id);
                        $this->gallery_model->insert_data($data);
                        $this->session->set_flashdata('success','Gallery Added Successfully!');
                        //   redirect($url);
                    }else
                    {
                        $this->session->set_flashdata('error','Please Choose Image JPG OR PNG format and file size must be MAX 2 MB!');
                    }
                }else
                {
                    $this->session->set_flashdata('error','Plase Choose gallery Image!');
                }
            } else
            {
                $this->session->set_flashdata('error','Fill Up All Entery!');
                
            }
            
            redirect(base_url() . 'gallery/add_gallery');
            
        } else
        { $data['message'] = 'your login session has expired';
        $this->load->view('admin/login', $data);
        
        }
    }
    
    
    
    
    
}
