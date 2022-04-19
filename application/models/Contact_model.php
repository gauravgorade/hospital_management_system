<?php
class Contact_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function getall_contact()
    {
        $this->db->select('*');
        $this->db->from("contact");
        $this->db->order_by("c_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
   
     
    function update_data($data,$cid)
    {
        $this->db->where('c_id', $cid);
        $this->db->update('contact', $data);
    }
    
    function  get_single_data($cid)
    {
        $this->db->select('*');
        $this->db->from('contact');
        $this->db->where('c_id', $cid);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    
    function delete_id($cid)
    {
        $this->db->where('c_id', $cid);
        $this->db->delete('contact');
    }
    
    
    function getall_mobileno()
    {
        $this->db->select('*');
        $this->db->from("crelite_contact");
        $this->db->order_by("con_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    function update_mobile_data($data,$cid)
    {
        $this->db->where('con_id', $cid);
        $this->db->update('crelite_contact', $data);
    }
    
    
    function delete_mobile($cid)
    {
        $this->db->where('con_id', $cid);
        $this->db->delete('crelite_contact');
    }
    
    function check_contact_exist($mobile)
    {
        $codition = array('mobile' => $mobile);
        $this->db->select('*');
        $this->db->from('crelite_contact');
        $this->db->where($codition);
        $query = $this->db->get();
        $result=$query->result();
        return $result;
    }
    
    function check_email_exist($email)
    {
        $codition = array('email' => $email);
        $this->db->select('*');
        $this->db->from('subcribeus');
        $this->db->where($codition);
        $query = $this->db->get();
        $result=$query->result();
        return $result;
    }
    
    function insert_contactus($data)
    {
        $this->db->insert('contact', $data);
    }
    function insert_contact_save($data)
    {
        $this->db->insert('crelite_contact', $data);
    }
    
    function insert_news_latter($data)
    {
        $this->db->insert('subcribeus', $data);
    }
    
    
    
    
}