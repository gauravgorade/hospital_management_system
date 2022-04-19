<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Blogs2 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
       /* 
	    $this->load->model('Services_model');
        $this->load->model('website_model');
        $this->load->model('testimonial_model');
        $this->load->model('clients_model'); */
        $this->load->model('Blog_model2');
    }
   
    public function status($t_id,$status)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $data = array('blog_status' => $status );
            $this->Blog_model2->update_data($data,$t_id);
            $this->session->set_flashdata('success','Services Status change  Successfully!');
            redirect(base_url().'blogs2/view');
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }

    
    public function delete($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $result=$this->Blog_model2->get_single_data($t_id);
            $small_img=$long_img="";
            foreach ($result as $row)
            {
                $small_img =$row->small_img;  $long_img =$row->long_img;
            }
            $old_file_path = "public/img/blog/".$small_img;
            $old_file_path2 = "public/img/blog/".$long_img;
            if (file_exists($old_file_path))
            {
                unlink($old_file_path);
            }
            
            if (file_exists($old_file_path2))
            {
                unlink($old_file_path2);
            }
            
            $this->Blog_model2->delete_id($t_id);
            $this->session->set_flashdata('success','Services delete successfully !');
            redirect(base_url().'Blogs/view');
        }else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
      
 


    public function create_blog()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
			$data['cat_result'] = $this->Blog_model2->get_blogcatedata();
			 $data['tag_result'] = $this->Blog_model2->get_blogtagdata();
            $this->load->view('admin/blog_add2', $data);    
        } else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
               }
    }
    
	public function external_img()
	{
		if(isset($_FILES['upload']['name']))
		{
		$file = $_FILES['upload']['tmp_name'];
		$file_name = $_FILES['upload']['name'];
		$file_name_array = explode(".", $file_name);
		$extension = end($file_name_array);
		$new_image_name = rand() . '.' . $extension;
		chmod('uploads', 0777);
		$allowed_extension = array("jpg", "gif", "png");
		if(in_array($extension, $allowed_extension))
		{
			move_uploaded_file($file, 'uploads/' . $new_image_name);
			$function_number = $_GET['CKEditorFuncNum'];
			$url = base_url().'uploads/' . $new_image_name;
			$message = '';
			echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
		} else{
			echo '<script>alert("Unable to upload the file")</script>'; 
		
		}
		}
		
	}


 
    public function update_Blog()
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
            $picture = "";
            $picture2 = "";
            
             $blog_id = test_input($this->input->post('blog_id'));
			 
           
             $picture2;
             $s_name = test_input($this->input->post('b_name'));
             $blog_url = test_input($this->input->post('blog_url'));
             $short_desc = test_input($this->input->post('short_desc'));
             
           /*   $long_desc1 =  $this->input->post('long_desc1');
             $long_desc2 = $this->input->post('long_desc2'); */
            
			$long_desc1 = htmlspecialchars($_POST['long_desc1']);
			$long_desc2 =  htmlspecialchars($_POST['long_desc2']);

             $old_profile =  test_input($this->input->post('old_profile'));
             $old_profile2 =  test_input($this->input->post('old_profile2'));
             
			 $category_id =  test_input($this->input->post('category_id'));
			 $tags_id = $this->input->post('tags_id');
			 $tags_id= implode(", ",$tags_id);
		   	$featured = $this->input->post('featured');
 			 $blog_status = test_input($this->input->post('blog_status'));
	 
 
             
             $picture = "";
             if (! empty($_FILES['smallImage']['name'])) {
                 $config['upload_path'] = 'public/img/blog';
                 $config['max_size'] = 2100;
                 // $config['allowed_types'] = 'jpg|jpeg|png|gif';
                 $config['allowed_types'] = 'jpg|jpeg|png|gif';
                 $config['file_name'] = time() . '-' . $_FILES['smallImage']['name'];
                 
                 // Load upload library and initialize configuration
                 $this->load->library('upload', $config);
                 $this->upload->initialize($config);
                 
                 if ($this->upload->do_upload('smallImage')) {
                     $uploadData = $this->upload->data();
                     $picture = $uploadData['file_name'];
                     
                     $old_file_path = "public/img/blog".$old_profile;
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
             if (! empty($_FILES['largeImage']['name'])) {
                 $config['upload_path'] = 'public/img/blog';
                 $config['max_size'] = 2100;
                 // $config['allowed_types'] = 'jpg|jpeg|png|gif';
                 $config['allowed_types'] = 'jpg|jpeg|png|gif';
                 $config['file_name'] = time() . '-' . $_FILES['largeImage']['name'];
                 
                 // Load upload library and initialize configuration
                 $this->load->library('upload', $config);
                 $this->upload->initialize($config);
                 
                 if ($this->upload->do_upload('largeImage')) {
                     $uploadData = $this->upload->data();
                     $picture2 = $uploadData['file_name'];
                     
                     $old_file_path2 = "public/img/blog/".$old_profile2;
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
             
             $data = array('blog_name' => $s_name,
                 'short_desc' => $short_desc,
                 'long_desc1' => $long_desc1,
                 'log_desc2'=> $long_desc2 ,
                 'blog_url'=> $blog_url ,
                 'small_img' => $picture,
                 'long_img' => $picture2,
			 	 'category_id'=>$category_id,'tags_id'=>$tags_id,'featured'=>$featured,'blog_status'=>$blog_status,
                );
           
             $this->Blog_model2->update_data($data,$blog_id);
            
            $this->session->set_flashdata('success','Blog Updated Successfully!');
            redirect($url);            
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
        redirect(base_url() . 'Blogs/view');
    }
    
    public function creating_blog()
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
            
            $picture1="";
            $picture2="";
            $s_name = test_input($this->input->post('b_name'));
            $service_url = test_input($this->input->post('blog_url'));
            $short_desc = test_input($this->input->post('short_desc'));
        
			$long_desc1 = htmlspecialchars($_POST['long_desc1']);
			$long_desc2 =  htmlspecialchars($_POST['long_desc2']);
			$category_id =  test_input($this->input->post('category_id'));
			$tags_id = $this->input->post('tags_id');
			$tags_id= implode(", ",$tags_id);
		   	$featured = $this->input->post('featured');
 			$blog_status = test_input($this->input->post('blog_status'));
			 

            $date = date("Y-m-d");
            if(!empty($_FILES['smallImage']['name']))
            {
                $config['upload_path'] = 'public/img/blog';
                $config['max_size']  = 2100;
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                /*    $config['allowed_types'] = 'doc|pdf'; */
                $config['file_name'] = time().'-'.$_FILES['smallImage']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('smallImage'))
                {
                    $uploadData = $this->upload->data();
                    $picture1 = $uploadData['file_name'];
                    //  redirect($url);
                }else
                {
                    $this->session->set_flashdata('error','Please Choose Image JPG OR PNG format and file size must be MAX 2 MB!');
                }
            } else
            {
                $this->session->set_flashdata('error','Please Choose Image!');
            }
            
            if(!empty($_FILES['largeImage']['name']))
            {
                $config['upload_path'] = 'public/img/blog';
                $config['max_size']  = 2100;
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                /*    $config['allowed_types'] = 'doc|pdf'; */
                $config['file_name'] = time().'-'.$_FILES['largeImage']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('largeImage'))
                {
                    $uploadData = $this->upload->data();
                    $picture2 = $uploadData['file_name'];
                    //   redirect($url);
                }else
                {
                    $this->session->set_flashdata('error','Please Choose Image JPG OR PNG format and file size must be MAX 2 MB!');
                }
            } else
            {
                $this->session->set_flashdata('error','Please Choose Image!');
            }
              $user_id = $this->session->userdata('ci_user_id');

            $data = array('blog_name' => $s_name, 
                'short_desc' => $short_desc,
                'long_desc1' => $long_desc1,
                'log_desc2'=> $long_desc2 ,
                'blog_url'=> $service_url ,
                'small_img' => $picture1,
                'long_img' => $picture2,
                'blog_date' => $date,
				'category_id'=>$category_id,'tags_id'=>$tags_id,
				'featured'=>$featured,'blog_status'=>$blog_status, 
				 'author_id'=>$user_id,     
				         
            );
            
            $this->Blog_model2->insert_data($data);
            $this->session->set_flashdata('success','Blog Added Successfully!');
            //   redirect($url);
            
                
             redirect(base_url() . 'Blogs2/create_blog');
       } else
        {$data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);        
        }
    }
    
    public function view()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            $data['result']=$this->Blog_model2->get_blogdata();
           
            $this->load->view('admin/blog_view2', $data);
        } else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
    }



    public function edit($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
        	$data['result'] = $this->Blog_model2->get_single_data($t_id);
		 	 $data['cat_result'] = $this->Blog_model2->get_blogcatedata();
			 $data['tag_result'] = $this->Blog_model2->get_blogtagdata();
			//print_r( $data['cat_result']);
 		 $this->load->view('admin/blog_edit2', $data);
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
      
    public function creating_blog_cate()
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
            $bcat_name = test_input($this->input->post('catname'));            
            $bcat_url =test_input($this->input->post('caturl'));    
			$cat_desc =test_input($this->input->post('cat_desc'));    
            $data = array('b_cat_name' => $bcat_name,
                'b_cat_url' => $bcat_url, 'cat_desc' => $cat_desc,
            );
            
            $this->Blog_model2->insert_catedata($data);
            $this->session->set_flashdata('success','Blog Category Added Successfully!');
            //   redirect($url);
            redirect(base_url() . 'Blogs2/view_blog_categories');
        } else
        {$data['message'] = 'Your login session has expired';
        $this->load->view('admin/login', $data);
        }
        
    }
    
    public function view_blog_categories()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            $data['result']=$this->Blog_model2->get_blogcatedata();
           
            $this->load->view('admin/blog_categoty_view2', $data);
        } else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
            
        }
    }  
    
    public function edit_blog_categories($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        { 
            $data['result'] = $this->Blog_model2->get_single_cate_data($t_id);
            $this->load->view('admin/blog_categoty_edit2', $data);            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    public function update_blog_cate()
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
                $url = test_input($this->input->post('blogcateurl'));            
                $blogcate_id = test_input($this->input->post('t_id'));             
                $s_name = test_input($this->input->post('bcatename'));
                $caturl = test_input($this->input->post('caturl'));
			    $cat_desc =test_input($this->input->post('cat_desc'));    
                $data = array('b_cat_name' => $s_name,
                 'b_cat_url' => $caturl, 'cat_desc' => $cat_desc 
             );
           
             $this->Blog_model2->updateblogcate_data($data,$blogcate_id);
            
            $this->session->set_flashdata('success','Blog Category Updated Successfully!');
            redirect($url);            
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
        redirect(base_url() . 'Blogs2/view_blog_categories');
    }
    
    
    public function delete_blogcate($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $result=$this->Blog_model2->get_single_data($t_id);
            $this->Blog_model2->deleteblogcate_id($t_id);
            $this->session->set_flashdata('success','Blog Category Deleted successfully !');
            redirect(base_url().'Blogs2/view_blog_categories');
        }else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    public function blogcate_status($t_id,$status)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $data = array('b_cat_status' => $status );
            $this->Blog_model2->updateblogcate_data($data,$t_id);
            $this->session->set_flashdata('success','Blog Category Status change  Successfully!');
            redirect(base_url().'Blogs2/view_blog_categories');
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    public function create_blog_tag()
    {
        $session_id = $this->session->userdata('client_login');
        if($session_id==true)
        {
            $this->load->view('admin/blog_tag_add');
            
        } else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
    
    
    public function creating_blog_tag()
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
            $btag_name = test_input($this->input->post('tagname'));
            $btag_url = test_input($this->input->post('tagurl'));
            $data = array('b_tag_name' => $btag_name,'b_tag_url'=>$btag_url );
            
            $this->Blog_model2->insert_tagdata($data);
            $this->session->set_flashdata('success','Blog Category Added Successfully!');
            //   redirect($url);
            redirect(base_url() . 'Blogs2/view_blog_tag');
        } else
        {$data['message'] = 'Your login session has expired';
        $this->load->view('admin/login', $data);
        }
         }
         
         public function view_blog_tag()
         {
             $session_id = $this->session->userdata('client_login');
             if($session_id==true)
             {
                 $data['result']=$this->Blog_model2->get_blogtagdata();
                 
                 $this->load->view('admin/blog_tag_view2', $data);
             } else {
                 $data['message'] = 'Your login session has expired';
                 $this->load->view('admin/login', $data);
                 
             }
         } 
         
         public function edit_blog_tag($t_id)
         {
             $session_id = $this->session->userdata('client_login');
             if ($session_id == true)
             {
                 $data['result'] = $this->Blog_model2->get_single_tag_data($t_id);
                 $this->load->view('admin/blog_tag_edit2', $data);
             }else {
                 $data['message'] = 'Your login session has expired';
                 $this->load->view('admin/login', $data);
             }
         }
         
         public function update_blog_tag()
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
         	

 				$url = test_input($this->input->post('blogcateurl'));   
				$blogcate_id = test_input($this->input->post('t_id'));
                $s_name = test_input($this->input->post('btagname'));
                $tagurl= test_input($this->input->post('tagurl'));
				$cat_desc =test_input($this->input->post('cat_desc'));    
                $data = array('b_tag_name' => $s_name,'b_tag_url'=>$tagurl,'cat_desc'=>$cat_desc);
                $this->Blog_model2->updateblogtag_data($data,$blogcate_id);
               
                
                 	redirect($url);
             }else {
                 $data['message'] = 'Your login session has expired';
                 $this->load->view('admin/login', $data);
             }
             redirect(base_url() . 'Blogs2/view_blog_categories');
         }
         
         
         public function delete_blogtag($t_id)
         {
             $session_id = $this->session->userdata('client_login');
             if ($session_id == true)
             {
                 $result=$this->Blog_model2->get_single_data($t_id);
                 $this->Blog_model2->deleteblogtag_id($t_id);
                 $this->session->set_flashdata('success','Blog Tag Deleted successfully !');
                 redirect(base_url().'Blogs2/view_blog_tag');
             }else
             {
                 $data['message'] = 'Your login session has expired';
                 $this->load->view('admin/login', $data);
             }
         }
         
         public function blogtag_status($t_id,$status)
         {
             $session_id = $this->session->userdata('client_login');
             if ($session_id == true)
             {
                 $data = array('b_tag_status' => $status );
                 $this->Blog_model2->updateblogtag_data($data,$t_id);
                 $this->session->set_flashdata('success','Blog Tag Status change  Successfully!');
                 redirect(base_url().'Blogs2/view_blog_tag');
                 
             }else {
                 $data['message'] = 'Your login session has expired';
                 $this->load->view('admin/login', $data);
             }
         }
		 
         public function add_category($t_id)
         {
             $session_id = $this->session->userdata('client_login');
             if ($session_id == true)
             {
                 $data['result'] = $this->Blog_model2->get_category_add($t_id);
                 $data['categories'] = $this->Blog_model2->get_blogcategory();
                 $data['result_category'] = $this->Blog_model2->added_blogcategory($t_id);
                 $this->load->view('admin/set_blog_category', $data);
             }else {
                 $data['message'] = 'Your login session has expired';
                 $this->load->view('admin/login', $data);
             }
         }
        
         public function category_add()
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
                 $blog_id = test_input($this->input->post('blog_id'));
                 $categories = test_input($this->input->post('categories'));
                 
                 $data = array('blog_id' => $blog_id,'b_cat_id'=>$categories );
                 
                 $this->Blog_model2->insert_blog_category($data);
                 
                 $this->session->set_flashdata('success','Blog Category Set Successfully!');
                 redirect($url);
                 
             }else {
                 $data['message'] = 'Your login session has expired';
                 $this->load->view('admin/login', $data);
             }
             redirect(base_url() . 'Blogs2/add_category');
         }
         
         public function delete_set_category($t_id,$b_id)
         {
             $session_id = $this->session->userdata('client_login');
             if ($session_id == true)
             {
                 $data['result'] = $this->Blog_model2->get_category_add($t_id);
                 $this->Blog_model2->deleteblogcateset_id($t_id);
                 $this->session->set_flashdata('success','Blog Category Deleted successfully !');
                 redirect(base_url().'Blogs2/add_category/'.$b_id);
           
             }else
             {
                 $data['message'] = 'Your login session has expired';
                 $this->load->view('admin/login', $data);
             }
         }
         
       
         public function add_tag($t_id)
         {
             $session_id = $this->session->userdata('client_login');
             if ($session_id == true)
             {
                 $data['result'] = $this->Blog_model2->get_tag_add($t_id);
                 $data['tags'] = $this->Blog_model2->get_blogtag();
                 $data['result_tags'] = $this->Blog_model2->added_blogtag($t_id);
                 $this->load->view('admin/set_blog_tag', $data);
             }else {
                 $data['message'] = 'Your login session has expired';
                 $this->load->view('admin/login', $data);
             }
         }
         
         public function tag_add()
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
                 $blog_id = test_input($this->input->post('blog_id'));
                 $tags = test_input($this->input->post('tags'));
                 
                 $data = array('blog_id' => $blog_id,'b_tag_id'=>$tags );
                 
                 $this->Blog_model2->insert_blog_tag($data);
                 
                 $this->session->set_flashdata('success','Blog Tag Set Successfully!');
                 redirect($url);
                 
             }else {
                 $data['message'] = 'Your login session has expired';
                 $this->load->view('admin/login', $data);
             }
             redirect(base_url() . 'Blogs2/add_category');
         }
         
         public function delete_set_tag($t_id,$b_id)
         {
             $session_id = $this->session->userdata('client_login');
             if ($session_id == true)
             {
                 $data['result'] = $this->Blog_model2->get_tag_add($t_id);
                 $this->Blog_model2->deleteblogtagset_id($t_id);
                 $this->session->set_flashdata('success','Blog Category Deleted successfully !');
                 redirect(base_url().'Blogs2/add_tag/'.$b_id);
                 
             }else
             {
                 $data['message'] = 'Your login session has expired';
                 $this->load->view('admin/login', $data);
             }
         }
         public function blog_single($b_id)
         {
             
             $data['blog_result']=$this->Blog_model2->get_recent_blogdata();
             $data['website_info']= $this->website_model->get_single_data();
             $data['res_blog']= $this->Blog_model2->get_blogslug_data($b_id);
             $data['res_cate']= $this->Blog_model2->get_blogcatedata();
             $data['res_tag']= $this->Blog_model2->get_blogtagdata($b_id);
             $data['res_tags']= $this->Blog_model2->get_blogtagsdata();
             $this->load->view('blog_single',$data);
         }
         
         public function blog_categorywise($b_id)
         {
             
             $data['website_info']= $this->website_model->get_single_data();
             $data['res_blog']= $this->Blog_model2->get_blogslug_data($b_id);
             $data['res_category']= $this->Blog_model2->get_categorywiseblog_data($b_id);
             $this->load->view('blog_categorywise',$data);
         }
         
         public function blog_tagwise($b_id)
         {
             
             $data['website_info']= $this->website_model->get_single_data();
             $data['res_blog']= $this->Blog_model2->get_blogslug_data($b_id);
             $data['res_tag']= $this->Blog_model2->get_tagwiseblog_data($b_id);
             $this->load->view('blog_tagwise',$data);
         }


	public function cmt_status($t_id,$status,$blog_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
            $data = array('status' => $status );
			print_r($data );

            $this->Blog_model2->update_cmt_data($data,$t_id);
            $this->session->set_flashdata('success','Blog Comments Status change  Successfully!');
            redirect(base_url().'Blogs2/comment/'.$blog_id);
            
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }

    
    public function cmt_delete($t_id,$blog_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        { 
          
			$this->Blog_model2->delete_cmt_id($t_id);
            $this->session->set_flashdata('success','Blog Comments delete successfully !');
            redirect(base_url().'Blogs2/comment/'.$blog_id);
        }else
        {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }
	 public function comment($t_id)
    {
        $session_id = $this->session->userdata('client_login');
        if ($session_id == true)
        {
        	$data['result'] = $this->Blog_model2->get_single_data($t_id);
			$data['blog_comment'] = $this->Blog_model2->get_blog_comment($t_id);
	 
		
 		 $this->load->view('admin/blog_comment2', $data);
        }else {
            $data['message'] = 'Your login session has expired';
            $this->load->view('admin/login', $data);
        }
    }

 		public function comments_view($b_id,$blog_id)
         {
        	$data['result'] = $this->Blog_model2->get_single_data($blog_id);
        
            $data['cmt_blog']= $this->Blog_model2->get_blog_single_comment($b_id);
        
             $this->load->view('admin/blog_comment_single2',$data);
         }

}
?>
