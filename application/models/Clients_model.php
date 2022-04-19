<?php
class Clients_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function  get_single_data($cid)
    {
        $this->db->select('*');
        $this->db->from('client_slider');
        $this->db->where('s_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    
    
    
    
    function update_data($data,$userid)
    {
        $this->db->where('s_id', $userid);
        $this->db->update('client_slider', $data);
    }
    
    
    function get_clients()
    {
        
        $this->db->select('*');
        $this->db->from("client_slider");
        $this->db->order_by("s_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
    }
    
    function get_active_clients()
    {
        $this->db->select('*');
        $this->db->from("client_slider");
        $this->db->where('status', 1);
        $this->db->order_by("s_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    
    function insert_data($data)
    {
        $this->db->insert('client_slider', $data);
    }
    
    
    
    function delete_id($cid)
    {
        $this->db->where('s_id', $cid);
        $this->db->delete('client_slider');
    }
}