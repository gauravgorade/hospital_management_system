<?php
class Services_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function  get_single_data($cid)
    {
        $this->db->select('*');
        $this->db->from('services');
        $this->db->where('services_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    function  get_single_active_data($cid)
    {
        $codition = array('service_url' => $cid, 'status' => 1);
        $this->db->select('*');
        $this->db->from('services');
        $this->db->where($codition);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    function  get_ative_location()
    {
        $this->db->select('*');
        $this->db->from('services');
        $this->db->where('status', 1);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    
    
    function delete_id($cid)
    {
        $this->db->where('services_id', $cid);
        $this->db->delete('services');
    }
    function update_data($data,$userid)
    {
        $this->db->where('services_id', $userid);
        $this->db->update('services', $data);
    }
     
     function insert_data($data)
    {
        $this->db->insert('services', $data);
    }
    function get_servicedata()
    {
        $this->db->select('*');
        $this->db->from("services");
        $this->db->order_by("services_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    
    
    
}