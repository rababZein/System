<?php
class Exam_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_exams($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('Exam');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('Exam', array('Exam_Id' => $id));
        return $query->row_array();
    }
    
    public function get_exams_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('Exam');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('Exam', array('Exam_Id' => $id));
        return $query->row_array();
    }
    
    public function set_exams($id = 0)
    {
        $this->load->helper('url');
 
       // $slug = url_title($this->input->post('Exam_Name'), 'dash', TRUE);
 
        $data = array(
            'Exam_Name' => $this->input->post('Exam_Name'),
            'Exam_Desc' => $this->input->post('Exam_Desc')
        );
        
        if ($id == 0) {
            return $this->db->insert('Exam', $data);
        } else {
            $this->db->where('Exam_Id', $id);
            return $this->db->update('Exam', $data);
        }
    }
    
    public function delete_exams($id)
    {
        $this->db->where('Exam_Id', $id);
        return $this->db->delete('Exam');
    }
}