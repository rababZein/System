<?php
class Answer extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('answer_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['answers'] = $this->answer_model->get_answers();
        $data['title'] = 'Answers archive';
 
        $this->load->view('templates/header', $data);
        $this->load->view('answer/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($id = NULL)
    {
        $data['answers_item'] = $this->answer_model->get_answers($id);
        
        if (empty($data['answers_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['answers_item']['A_Name'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('answer/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a new Answer';
 
        $this->form_validation->set_rules('A_Name', 'A_Name', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('answer/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->answer_model->set_answers();
            $this->load->view('templates/header', $data);
            $this->load->view('answer/success');
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
        
        $data['title'] = 'Edit The Answer';        
        $data['answers_item'] = $this->answer_model->get_answers_by_id($id);
        
        $this->form_validation->set_rules('A_Name', 'A_Name', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('answer/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->answer_model->set_answers($id);
            $this->load->view('answer/success');
            redirect( base_url() . 'index.php/answer');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $answers_item = $this->answer_model->get_answers_by_id($id);
        
        $this->answer_model->delete_answers($id);        
        redirect( base_url() . 'index.php/answer');        
    }
}