<?php

class Seo_model extends CI_Model
{
    
    function __construct()
    {   
        parent::__construct();    
    }
    
    
    function  get_all_seo_page()
    {
        $this->db->select('*');
        $this->db->from('seo');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    function  get_single_data($cid)
    {
        $this->db->select('*');
        $this->db->from('seo');
        $this->db->where('seo_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    
    function delete_seo_id($t_id)
    {
        $this->db->where('seo_id', $t_id);
        $this->db->delete('seo');
    }
    
    
    function update_seo_data($data,$userid)
    {
        $this->db->where('seo_id', $userid);
        $this->db->update('seo', $data);
    }
    
    
    
    function create_seo($data)
    {
        $this->db->insert('seo', $data);
    }
    
}