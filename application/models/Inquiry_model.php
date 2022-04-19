<?php

class Inquiry_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function getall_inquiry()
    {
        $this->db->select('*');
        $this->db->from("inquiry");
        $this->db->order_by("c_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    
    function getnew_inquiry()
    {
        $this->db->select('*');
        $this->db->from('inquiry');
        $this->db->where('status', '1');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    function update_data($data,$cid)
    {
        $this->db->where('c_id', $cid);
        $this->db->update('inquiry', $data);
    }
    
    function  get_single_data($cid)
    {
        $this->db->select('*');
        $this->db->from('inquiry');
        $this->db->where('c_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    
    function delete_id($cid)
    {
        $this->db->where('c_id', $cid);
        $this->db->delete('inquiry');
    }
    
    function insert_inquiry($data)
    {
        $this->db->insert('inquiry', $data);
    }
    function insert_quate($data)
    {
        $this->db->insert('get_qute', $data);
    }
    
    function book_appoitment($data)
    {
        $this->db->insert('book_appointment', $data);
    }
    
    
}