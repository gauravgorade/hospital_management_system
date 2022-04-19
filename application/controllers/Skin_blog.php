<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Skin_blog extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Services_model');
        $this->load->model('website_model');
        $this->load->model('testimonial_model');
        $this->load->model('clients_model');
        $this->load->model('Blog_model');
		$this->load->model('User_model');
    }

   public function search_blogs()
    {   
		
		$search_text = "";
		if($this->input->post('submit') != NULL )
		{
			$search_text = $this->input->post('serchname');
			$this->session->set_userdata(array("search"=>$search_text));
		}else
		{
			if($this->session->userdata('search') != NULL)
			{
				$search_text = $this->session->userdata('search');
			}
		}
	 
		$data['search_text'] = $search_text;
		$data['recent_blogs'] = $this->Blog_model->get_recent_blogdata();
		$data['website_info']= $this->website_model->get_single_data();
     	$data['cat_result'] = $this->Blog_model->get_blogcatedata();
		$data['tag_result'] = $this->Blog_model->get_blogtagdata();
	    $data['result']=$this->Blog_model->get_search_blogdata($search_text);
        $this->load->view('skin/skin_search',$data);
	
    } 


 	public function indexss($rowno=0)
    {      
		$data['recent_blogs'] = $this->Blog_model->get_recent_blogdata();
		$data['website_info']= $this->website_model->get_single_data();
     	$data['cat_result'] = $this->Blog_model->get_blogcatedata();
		$data['tag_result'] = $this->Blog_model->get_blogtagdata();
	    $data['result']=$this->Blog_model->get_active_blogdata();

/* 	echo	count(   $data['result']);die();
 */
		$search_text = "";
		if($this->input->post('submit') != NULL )
		{
			$search_text = $this->input->post('search');
			$this->session->set_userdata(array("search"=>$search_text));
		}else
		{
			if($this->session->userdata('search') != NULL){
				$search_text = $this->session->userdata('search');
			}
		}

		// Row per page
		$rowperpage = 2;

	 	// Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}
      	
        $allcount = $this->Blog_model->getrecordBlogCount($search_text);
	 	$users_record = $this->Blog_model->getBlogData($rowno,$rowperpage,$search_text);
	   	$config['base_url'] = base_url().'skin-blogs';
      	$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;

 		 $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
    
		// Initialize
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $users_record;
		$data['row'] = $rowno;
		$data['search'] = $search_text;


        $this->load->view('skin/skin_blogs',$data);
    }








/* 	 public function index()
    {      
		$data['recent_blogs'] = $this->Blog_model->get_recent_blogdata();
		$data['website_info']= $this->website_model->get_single_data();
     	$data['cat_result'] = $this->Blog_model->get_blogcatedata();
		$data['tag_result'] = $this->Blog_model->get_blogtagdata();
	    $data['result']=$this->Blog_model->get_active_blogdata();
        $this->load->view('skin/skin_blogs',$data);
    } */

	public function skin_categories($skin)
    {      
		$data['bresult'] = $this->Blog_model->get_single_cate_data_by_slug($skin);
			$ta_id =array();
 			if (!empty($data['bresult'])) 
			 {		$b_cat_id="";
					foreach ($data['bresult'] as $key => $tvalue) 
					 {
						$b_cat_id =  $tvalue->b_cat_id;
					 }

					$data['recent_blogs'] = $this->Blog_model->get_recent_blogdata();
					$data['website_info']= $this->website_model->get_single_data();
					$data['cat_result'] = $this->Blog_model->get_blogcatedata();
					$data['tag_result'] = $this->Blog_model->get_blogtagdata();
					$data['result']=$this->Blog_model->get_blog_cat_id_wise($b_cat_id);
				 
					$this->load->view('skin/skin_categories_wise_data',$data);
			 } else {

			 	 $this->load->view('skin/no_blog_found',);
			 }

		
    }
	

	public function blog_single($blog_name)
	{
		 
			$data['result'] = $this->Blog_model->get_blogslug_data($blog_name);
		 	$data['cat_result'] = $this->Blog_model->get_blogcatedata();
			$data['tag_result'] = $this->Blog_model->get_blogtagdata();
			$data['recent_blogs'] = $this->Blog_model->get_recent_blogdata();
			 if (!empty($data['result'])) 
			 {
				$author_detils = $data['result']['0']->author_id;
				/*  $data['result'] */
				 $data['author_detils'] = $this->User_model->get_user($author_detils);
				/*   print_r($data['author_detils']); */
				  $this->load->view('skin/skin_single_blog', $data);
				
			 }else {
				 
				 $this->load->view('skin/no_blog_found',);
			 }
			 //	print_r( $data['result']);

	}
		public function blog_tag($blog_name)
	{
	 	
		   $data['tresult'] = $this->Blog_model->get_single_tag_by_url($blog_name);
		   $ta_id =array();
 			if (!empty($data['tresult'])) 
			 { 
				 	foreach ($data['tresult'] as $key => $tvalue) 
				{
						$b_tag_url = $tvalue->b_tag_url;     $b_tag_id = $tvalue->b_tag_id;
					 
						$tg_expodes =  explode(" ," , $b_tag_id); $b_tag_name = $tvalue->b_tag_name;
							$data['resultb']=$this->Blog_model->get_active_blogdata();
						foreach ($data['resultb'] as $key => $bvalue) 
						{  	 $skm= $bvalue->tags_id; 	  $tg_expodes =  explode(", " , $skm);
								if (in_array($b_tag_id, $tg_expodes)){ $ta_id[] = $bvalue->blog_id; 
									 
					 	}  

						 
						}
							 
						$ts_id=	implode("','", $ta_id);
			 	$ts_id=	implode(" ,", $ta_id);
			}
		 
			//echo $ts_id;
		 				$data['ts_id']= $ts_id;

						$data['bt_result'] = $this->Blog_model->get_blog_tag_id_in($ts_id);
			  			 $this->db->last_query();
			 
			 	 		$data['recent_blogs'] = $this->Blog_model->get_recent_blogdata();
						 $data['cat_result'] = $this->Blog_model->get_blogcatedata();
						 $data['tag_result'] = $this->Blog_model->get_blogtagdata();
						 $this->load->view('skin/skin_tag_wise_data', $data);
		
				
			 }else {
				 
				 $this->load->view('skin/no_blog_found',);
			 }
			 //	print_r( $data['result']);

	}


	function blog_comment()
    {
        if (isset($_POST['name'])  && isset($_POST['email']))
        {
           
           $blog_id =$this->input->post('blog_id');
           $name= $this->input->post('name');
           $emaile= $this->input->post('email');
            $mobilem=  $this->input->post('mobile');
           $message= $this->input->post('message');
           $date =date("Y-n-d"); $time=date('h:i A');
            $data= array( 'blog_id' => $blog_id,
                'name' =>$name,'email' => $emaile,
                'mobile' => $mobilem,'message' => $message,
                'public_ip' =>  $this->input->ip_address(),
                'status' => 0,  'date'   => date("Y-n-d"),'time'   =>date('h:i A')
            ); //Transfering data to Model
            
            $url=  $this->input->post('url');
           
            $this->Blog_model->blogcmt($data);
        
             /*  $this->email_send_model->blog_comment_email($date,$name,$message,$emaile);
              $this->email_send_model->admin_comment_blog($name,$mobilem,$emaile, $message,$url,$blog_id,$date,$time);
           
             */  
			
			 $this->session->set_flashdata('success','Yours Comment is Under Observation We will Publish it Very Soon');
            redirect($url);
                
        } 
        else 
        {
            redirect(base_url().'blogs');
        }
    }

	
    


	
} 
?>
