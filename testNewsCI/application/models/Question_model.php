<?php
class Question_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_questions($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('Question');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('Question', array('Q_Id' => $id));
        return $query->row_array();
    }
    
    public function get_questions_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('Question');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('Question', array('Q_Id' => $id));
        return $query->row_array();
    }
    
    public function set_questions($id = 0)
    {
        $this->load->helper('url');
 
       // $slug = url_title($this->input->post('Exam_Name'), 'dash', TRUE);
 
        $data = array(
            'Q_Name' => $this->input->post('Q_Name'),
        );
        
        if ($id == 0) {
            return $this->db->insert('Question', $data);
        } else {
            $this->db->where('Q_Id', $id);
            return $this->db->update('Question', $data);
        }
    }
    
    public function delete_questions($id)
    {
        $this->db->where('Q_Id', $id);
        return $this->db->delete('Question');
    }

     public function get_questions_by_question_id_and_exam_id( $Eid )
    {
        
        $this->db->order_by('Q_Id', 'asc');       
        $this->db->where("(Exam_Id = " . $Eid . ") ");
        $query = $this->db->get('Question', 1);
        return $query->row_array();
    }

     public function get_next_question($Qid  , $Eid )
    {
        
        

         $this->db->order_by('Q_Id', 'asc');
         $this->db->where("(Q_Id > " . $Qid . " and Exam_Id = " . $Eid . ") ");
         $query =$this->db->get('Question',1);
   
       
         return $query->row_array();

    }

     public function get_previous_question($Qid  , $Eid )
    {
        

        $this->db->order_by('Q_Id', 'desc');
         $this->db->where("(Q_Id < " . $Qid . " and Exam_Id = " . $Eid . ") ");
         $query =$this->db->get('Question',1);
   
       
         return $query->row_array();

    }


     public function set_question_for_exam($Eid,$Qid = 0)
    {
        $this->load->helper('url');
 
       // $slug = url_title($this->input->post('Exam_Name'), 'dash', TRUE);
 //$id = $_GET['id'];
        $data = array(
            'Exam_Id' => $Eid,
            'Q_Name' => $this->input->post('Q_Name'),
        );
        
        if ($Qid == 0) {
            $this->db->insert('Question', $data);
            return  $this->db->insert_id();
        } else {
            $this->db->where('Q_Id', $id);
            $this->db->update('Question', $data);
            return $Qid;
        }
    }
}