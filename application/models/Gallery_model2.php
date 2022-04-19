<?php
class Gallery_model2 extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function  get_single_data($cid)
    {
        $this->db->select('*');
        $this->db->from('gallery2');
        $this->db->where('g_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }     
  
    
    
    function  get_active_img_gall($cid)
    {
        $this->db->select('*');
        $this->db->from('gallery2');
        $this->db->where('ser_slug', $cid);
        $this->db->limit(4); 
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    
    
    
    
    function update_data($data,$userid)
    {
        $this->db->where('g_id', $userid);
        $this->db->update('gallery2', $data);
    }
   
    
    
    function get_gallery()
    {
        
        $this->db->select('*');
        $this->db->from("gallery2");
        $this->db->order_by("g_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
    }
    function get_gallerycategory()
    {
        
        $this->db->select('*');
        $this->db->from("gallery_category2");
        $this->db->order_by("gc_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
    }
    
  
function get_active_gallery2()
    {
        $this->db->select('*');
        $this->db->from("gallery2");
		$this->db->join('gallery_category2', 'gallery2.g_ccategory_id = gallery_category2.gc_id');
        $this->db->where('status', 1);
        $this->db->order_by("g_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    
    function get_active_gallery()
    {
        $this->db->select('*');
        $this->db->from("gallery2");
        $this->db->where('status', 1);
        $this->db->order_by("g_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    public function get_count() {
      
        $this->db->where('status', 1);
        $this->db->order_by('g_id', 'DESC');
     return   $query = $this->db->count_all('gallery2');
        
    }
    
    public function get_gallery_pag($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->where('status', 1);
        $this->db->order_by('g_id', 'DESC');
        $query = $this->db->get('gallery2');
        
        return $query->result();
    }
    
   
    
    
    function insert_data($data)
    {
        $this->db->insert('gallery2', $data);
    }
    function insert_category_data($data)
    {
        $this->db->insert('gallery_category2', $data);
    }
    
    
    function delete_id($cid)
    {
        $this->db->where('g_id', $cid);
        $this->db->delete('gallery2');
    }
    
    
    function delete_category_id($cid)
    {
        $this->db->where('gc_id ', $cid);
        $this->db->delete('gallery_category2');
    }
    function category_update_data($data,$userid)
    {
        $this->db->where('gc_id', $userid);
        $this->db->update('gallery_category2', $data);
    }
    
    function  Category_get_single_data($cid)
    {
        $this->db->select('*');
        $this->db->from('gallery_category2');
        $this->db->where('gc_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    function get_activecatigiry()
    {
        $this->db->select('*');
        $this->db->from("gallery_category2");
        $this->db->where('gc_status', 1);
        $this->db->order_by("gc_id", "ASC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    
    
    
    
}
