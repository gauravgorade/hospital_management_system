<?php
class Testimonial2_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function  get_single_data($cid)
    {
        $this->db->select('*');
        $this->db->from('testimonial2');
        $this->db->where('t_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    function get_active_testimonial2()
    {
        $this->db->select('*');
        $this->db->from("testimonial2");
        $this->db->where('status', 1);
        $this->db->order_by("t_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    
    public function get_count() {
        
        $this->db->where('status', 1);
        $this->db->order_by('t_id', 'DESC');
        return   $query = $this->db->count_all('testimonial2');
        
    }
    
    public function get_testimonial2s($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->where('status', 1);
        $this->db->order_by('t_id', 'DESC');
        $query = $this->db->get('testimonial2');
        
        return $query->result();
    }
    
    function update_data($data,$userid)
    {
        $this->db->where('t_id', $userid);
        $this->db->update('testimonial2', $data);
    }
    
    
    function get_testimonial2()
    {
        $this->db->select('*');
        $this->db->from("testimonial2");
        $this->db->order_by("t_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    
    function insert_data($data)
    {
        $this->db->insert('testimonial2', $data);
    }
    
    
    
    function delete_id($cid)
    {
        $this->db->where('t_id', $cid);
        $this->db->delete('testimonial2');
    }
}
