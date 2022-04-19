<?php 
class Blog_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    
    function insert_data($data)
    {
        $this->db->insert('blog_tbl', $data);
    }
    function  get_single_data($cid)
    {
        $this->db->select('*');
        $this->db->from('blog_tbl');
        $this->db->where('blog_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    function update_data($data,$bid)
    {
        $this->db->where('blog_id', $bid);
        $this->db->update('blog_tbl', $data);
    }
    function delete_id($cid)
    {
        $this->db->where('blog_id', $cid);
        $this->db->delete('blog_tbl');
    }
    
    function  get_active_blogdata()
    {
        $this->db->select('*');
        $this->db->from('blog_tbl');
        $this->db->where('blog_status', 1);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
	 function  get_recent_blog_catigiery_wise($cid)
    {
        $this->db->select('*');
        $this->db->from('blog_tbl');
        $this->db->where('blog_status', 1);
		$this->db->where('category_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    function get_blogdata()
    {
        $this->db->select('*');
        $this->db->from("blog_tbl");
        $this->db->order_by("blog_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    
    function insert_catedata($data)
    {
        $this->db->insert('blog_category', $data);
    }
    
    function get_blogcatedata()
    {
        $this->db->select('*');
        $this->db->from("blog_category");
        $this->db->order_by("b_cat_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    
    function  get_single_cate_data($cid)
    {
        $this->db->select('*');
        $this->db->from('blog_category');
        $this->db->where('b_cat_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
	  function  get_single_cate_data_by_slug($cid)
    {
        $this->db->select('*');
        $this->db->from('blog_category');
        $this->db->where('b_cat_url', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    function updateblogcate_data($data,$bid)
    {
        $this->db->where('b_cat_id', $bid);
        $this->db->update('blog_category', $data);
    }

    function deleteblogcate_id($cid)
    {
        $this->db->where('b_cat_id', $cid);
        $this->db->delete('blog_category');
    }


    function insert_tagdata($data)
    {
        $this->db->insert('blog_tags', $data);
    }
    
    function get_blogtagdata()
    {
        $this->db->select('*');
        $this->db->from("blog_tags");
        $this->db->order_by("b_tag_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    function  get_single_tag_data($cid)
    {
        $this->db->select('*');
        $this->db->from('blog_tags');
        $this->db->where('b_tag_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
	 function  get_single_tag_by_url($cid)
    {
        $this->db->select('*');
        $this->db->from('blog_tags');
        $this->db->where('b_tag_url', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    
    function updateblogtag_data($data,$bid)
    {
        $this->db->where('b_tag_id', $bid);
        $this->db->update('blog_tags', $data);
    }
    
	   

    function deleteblogtag_id($cid)
    {
        $this->db->where('b_tag_id', $cid);
        $this->db->delete('blog_tags');
    }
    
    function  get_category_add($cid)
    {
        $this->db->select('*');
        $this->db->from('blog_tbl');
        $this->db->where('blog_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    
    
    function get_blogcategory()
    {
        $this->db->select('*');
        $this->db->from("blog_category");
        $this->db->where('b_cat_status', 1);
        $this->db->order_by("b_cat_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
     
    function added_blogcategory($t_id)
    {
        $this->db->select('set_blog_category.*,blog_category.*, blog_tbl.*');
        $this->db->from("set_blog_category");
        $this->db->join('blog_tbl', 'blog_tbl.blog_id = set_blog_category.blog_id', 'left'); 
        $this->db->join('blog_category', 'blog_category.b_cat_id = set_blog_category.b_cat_id', 'left'); 
       
        $this->db->where('set_blog_category.blog_id',$t_id);
        $this->db->order_by("set_blog_category.set_category_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;       
    }
    
    
    function insert_blog_category($data)
    {
        
        $this->db->insert('set_blog_category', $data);
        
    }
    
    function deleteblogcateset_id($cid)
    {
        $this->db->where('set_category_id', $cid);
        $this->db->delete('set_blog_category');
    }
 
    
    function  get_tag_add($cid)
    {
        $this->db->select('*');
        $this->db->from('blog_tbl');
        $this->db->where('blog_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
        
    function get_blogtag()
    {
        $this->db->select('*');
        $this->db->from("blog_tags");
        $this->db->where('b_tag_status', 1);
        $this->db->order_by("b_tag_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    
    function added_blogtag($t_id)
    {
        $this->db->select('set_blog_tag.*,blog_tags.*, blog_tbl.*');
        $this->db->from("set_blog_tag");
        $this->db->join('blog_tbl', 'blog_tbl.blog_id = set_blog_tag.blog_id', 'left');
        $this->db->join('blog_tags', 'blog_tags.b_tag_id = set_blog_tag.b_tag_id', 'left');
        $this->db->where('set_blog_tag.blog_id',$t_id);
        $this->db->order_by("set_blog_tag.set_tag_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
    }
    
    
    function insert_blog_tag($data)
    {
        
        $this->db->insert('set_blog_tag', $data);
        
    }
    
    function deleteblogtagset_id($cid)
    {
        $this->db->where('set_tag_id', $cid);
        $this->db->delete('set_blog_tag');
    }
      
   
    function  get_blogslug_data($cid)
    {
        $this->db->select('*');
        $this->db->from('blog_tbl');
	    $this->db->where('blog_url', $cid);
		 $this->db->where('blog_status', 1);
        $query = $this->db->get();
        $result = $query->result();
        return $result;		      
    }
	 function  get_blog_tag_id_in($cid)
    {
        $this->db->select('*');
        $this->db->from('blog_tbl');
		$this->db->where_in('blog_id', $cid);
		$this->db->where('blog_status', 1);
        $query = $this->db->get();
        $result = $query->result();
        return $result;		      
    }

	function  get_blog_cat_id_wise($cid)
    {
        $this->db->select('*');
        $this->db->from('blog_tbl');
		$this->db->where('category_id', $cid);
		$this->db->where('blog_status', 1);
        $query = $this->db->get();
        $result = $query->result();
        return $result;		      
    }
       
 

    function get_recent_blogdata()
     {
         $this->db->select('*');
         $this->db->from('blog_tbl');
         $this->db->where('blog_status', 1);
         $this->db->limit(5);
         $query = $this->db->get();
         $result = $query->result();
         return $result;  
        
    }
    
    function get_tagblogdata($t_id)
    {
        
        $this->db->select('set_blog_tag.*,blog_tags.*, blog_tbl.*');
        $this->db->from("set_blog_tag");
        $this->db->join('blog_tbl', 'blog_tbl.blog_id = set_blog_tag.blog_id', 'left');
        $this->db->join('blog_tags', 'blog_tags.b_tag_id = set_blog_tag.b_tag_id', 'left');
        $this->db->where('set_blog_tag.blog_id',$t_id);
        $this->db->order_by("set_blog_tag.set_tag_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    function get_blogtagsdata()
    {
        
        $this->db->select('*');
        $this->db->from('blog_tags');
        $this->db->where('b_tag_status', 1);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    
    function get_categorywiseblog_data($t_id)
    {
        $this->db->select('set_blog_category.*,blog_category.*, blog_tbl.*');
        $this->db->from("set_blog_category");
        $this->db->join('blog_tbl', 'blog_tbl.blog_id = set_blog_category.blog_id', 'left');
        $this->db->join('blog_category', 'blog_category.b_cat_id = set_blog_category.b_cat_id', 'left');
        
        $this->db->where('blog_category.b_cat_url',$t_id);
        $this->db->order_by("set_blog_category.set_category_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;       
        
        
    }
    
    
    
    function get_tagwiseblog_data($t_id)
    {
        $this->db->select('set_blog_tag.*,blog_tags.*, blog_tbl.*');
        $this->db->from("set_blog_tag");
        $this->db->join('blog_tbl', 'blog_tbl.blog_id = set_blog_tag.blog_id', 'left');
        $this->db->join('blog_tags', 'blog_tags.b_tag_id = set_blog_tag.b_tag_id', 'left');
        $this->db->where('blog_tags.b_tag_url',$t_id);
        $this->db->order_by("set_blog_tag.set_tag_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
        
    }


    private function _get_users_data(){
        
        $this->db->select('*');
        $this->db->from('blog_tbl');
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
    }
    
    
    
    public function get_users($limit, $start){
        
        $this->db->select('*');
        $this->db->from('blog_tbl');
        $this->db->limit($limit, $start);    
        $query = $this->db->get();
        return $query->result_array();
        
    }
     public function count_all_users(){
        
        $this->db->select('*');
        $this->db->from('blog_tbl');  
        $query = $this->db->count_all_results();    
        return $query;
        
    }
    
    
    public function count_blogs_by_cati_id($cid){
        
        $this->db->select('*');
        $this->db->from('blog_tbl');  
		$this->db->where('category_id', $cid);
		$this->db->where('blog_status', 1);
        $query = $this->db->count_all_results();    
        return $query;
        
    }

	 function blogcmt($data)
    { $this->db->insert('blog_camment', $data); }

	 public function get_blog_comment($id)
  	{   
        $this->db->select('*');
        $this->db->from('blog_camment');
		$this->db->where('blog_id', $id);
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
    }
	 function update_cmt_data($data,$bid)
    {
        $this->db->where('cmt_id', $bid);
        $this->db->update('blog_camment', $data);
    }
	  function delete_cmt_id($cid)
    {
        $this->db->where('cmt_id', $cid);
        $this->db->delete('blog_camment');
    }

	
	public function get_blog_single_comment($id)
  	{   
        $this->db->select('*');
        $this->db->from('blog_camment');
		$this->db->where('cmt_id', $id);
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
    }

		// Fetch records
	public function getBlogData($rowno,$rowperpage,$search="") 
	{
			
		$this->db->select('*');
		$this->db->from('blog_tbl');
		$this->db->where('blog_status', 1);
		/* if($search != '')
		{
        	$this->db->like('blog_name', $search);
			$this->db->or_like('short_desc', $search);
        } */
        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_search_blogdata($search) 
	{
		
		$this->db->select('*');
		$this->db->from('blog_tbl');   
		$this->db->where('blog_status', 1);
	 	if($search != '')
		{
        	$this->db->like('blog_name', $search);
			$this->db->or_like('short_desc', $search);
        } 
        
		$query = $this->db->get();
		return $query->result_array();
	}

	



	// Select total records
    public function getrecordBlogCount($search = '') {

    	$this->db->select('count(*) as allcount');
      	$this->db->from('blog_tbl');
      	$this->db->where('blog_status', 1);
      	/* if($search != ''){
       		$this->db->like('blog_name', $search);
			$this->db->or_like('short_desc', $search);
      	} */
      	$query = $this->db->get();
      	$result = $query->result_array(); 
      	return $result[0]['allcount'];
    }




	//getrecordBlogCount
    
}

?>
