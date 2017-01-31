<?php
class User_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_users($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('User');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('User', array('User_Id' => $id));
        return $query->row_array();
    }
    
    public function get_users_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('User');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('User', array('User_Id' => $id));
        return $query->row_array();
    }
    
    public function set_users($id = 0)
    {
        $this->load->helper('url');

        $data = array(
            'User_Name' => $this->input->post('User_Name'),
        );
        
        if ($id == 0) {
            return $this->db->insert('User', $data);
        } else {
            $this->db->where('User_Id', $id);
            return $this->db->update('User', $data);
        }
    }
    
    public function delete_users($id)
    {
        $this->db->where('User_Id', $id);
        return $this->db->delete('User');
    }

   
}