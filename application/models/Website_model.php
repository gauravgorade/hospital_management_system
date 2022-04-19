<?php
class Website_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function update_data($data)
    {
        $this->db->where('web_id','1');
        $this->db->update('website_information', $data);
    }
   
    
    function  get_seo_data($page_url)
    {
        $this->db->select('*');
        $this->db->from('seo');
        $this->db->where('page_url',$page_url);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    
    
    
    function  get_single_data()
    {
        $this->db->select('*');
        $this->db->from('website_information');
        $this->db->where('web_id','1');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    
    function get_all_mail_data()
    {
        $this->db->select('*');
        $this->db->from("maling_list");
        $this->db->order_by("m_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    
    function get_all_subscribers()
    {
        $this->db->select('*');
        $this->db->from("subcribeus");
        $this->db->order_by("sb_id", "DESC");
        $query = $this->db->get();
        $query_result = $query->result();
        return $query_result;
        
    }
    
    function update_newslater($data,$t_id)
    {
        $this->db->where('sb_id', $t_id);
        $this->db->update('subcribeus', $data);
    }
    
    function  get_single_mailing_data($t_id)
    {
        $this->db->select('*');
        $this->db->from('maling_list');
        $this->db->where('m_id',$t_id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    function  get_maling_service($t_id)
    {
        $this->db->select('*');
        $this->db->from('maling_list');
        $this->db->where('mailing_for',$t_id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
        
    }
    
    
    function update_maling_data($data,$t_id )
    {
        $this->db->where('m_id',$t_id);
        $this->db->update('maling_list', $data);
    }
 
    function insert_email($data)
    {
        $this->db->insert('maling_list', $data);
    }
    
    function delete_id($cid)
    {
        $this->db->where('m_id', $cid);
        $this->db->delete('maling_list');
    }
    
    function delete_newslatter($cid)
    {
        $this->db->where('sb_id', $cid);
        $this->db->delete('subcribeus');
    }
    
    
}