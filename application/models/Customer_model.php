<?php

class Customer_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function get_single_data($cid)
    {
        $this->db->select('*');
        $this->db->from('customer_info');
        $this->db->where('cli_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
     }
    
     function get_active_customer()
     {
         $this->db->select('*');
         $this->db->from("customer_info");
         $this->db->where('status', 1);
         $this->db->order_by("cli_id", "DESC");
         $query = $this->db->get();
         $query_result = $query->result();
         return $query_result;
         
     }
     
     function getUserDetails($postData=array())
     {
         
         $response = array();
         
         if(isset($postData['username']) ){
             // Select record
             $this->db->select('*');
             $this->db->where('cli_id', $postData['username']);
             $records = $this->db->get('customer_info');
             $response = $records->result_array();
             
         }
         
         return $response;
     }
     
    
    function update_data($data,$userid)
    {
        $this->db->where('cli_id', $userid);
        $this->db->update('customer_info', $data);
    }
    
    
    
    function get_customer()
    {
        $this->db->select('*');
        $this->db->from("customer_info");
        $this->db->order_by("cli_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    
    function get_prefixe()
    {
        $this->db->select('*');
        $this->db->from("prefixe");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    function get_state()
    {
        $this->db->select('*');
        $this->db->from("state_list");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    
    
    
    function insert_data($data)
    {
        $this->db->insert('customer_info', $data);
    }
    
    
    
    function delete_id($cid)
    {
        $this->db->where('cli_id', $cid);
        $this->db->delete('customer_info');
    }
}