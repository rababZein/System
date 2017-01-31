<?php
class Score_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    
    public function set_scores($User_Id,$Q_Id,$A_Id,$id=0)
    {
        $this->load->helper('url');
 
       // $slug = url_title($this->input->post('Exam_Name'), 'dash', TRUE);
 
        $data = array(
            'User_Id' => 1,
            'Q_Id' => $Q_Id,
            'A_Id' => $A_Id
        );
         $this->db->get_where('Score', array('User_Id' => $User_Id ,'Q_Id'=> $Q_Id));
        $afftectedRows = $this->db->affected_rows();
        if ($afftectedRows > 0) 
        {

        $this->db->where('Q_id', $data['Q_Id'])->where('User_Id',$data['User_Id']);
            return $this->db->update('Score', $data);
        }

       else {
            return $this->db->insert('Score', $data);
        } 
    }
    

 public function get_scores_by_question($User_Id, $Q_Id)
    {
 
        $query = $this->db->get_where('Score', array('User_Id' => $User_Id , 'Q_Id' => $Q_Id ));
        return $query->row_array();
    }
   
}