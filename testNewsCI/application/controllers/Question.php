<?php
class Question extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('question_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['questions'] = $this->question_model->get_questions();
        $data['title'] = 'Questions archive';
 
        $this->load->view('templates/header', $data);
        $this->load->view('question/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($id = NULL)
    {
        $data['questions_item'] = $this->question_model->get_questions($id);
        
        if (empty($data['questions_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['questions_item']['Q_Name'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('question/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a new question';
 
        $this->form_validation->set_rules('Q_Name', 'Q_Name', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('question/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->question_model->set_questions();
            $this->load->view('templates/header', $data);
            $this->load->view('question/success');
            $this->load->view('templates/footer');
        }
    }
    
    public function edit()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Edit The Question';        
        $data['questions_item'] = $this->question_model->get_questions_by_id($id);
        
        $this->form_validation->set_rules('Q_Name', 'Q_Name', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('question/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->question_model->set_questions($id);
            $this->load->view('question/success');
            redirect( base_url() . 'index.php/question');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $questions_item = $this->question_model->get_questions_by_id($id);
        
        $this->question_model->delete_questions($id);        
        redirect( base_url() . 'index.php/question');        
    }
}