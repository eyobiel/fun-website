<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {        

       function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
       $this->load->model('event');
       
       }
       public function index()
{

	$this->load->view('event');
}
    
    /*
     * Create an activity
     */
    
    public function createTable(){
        $data = array();
        $userData = array();
        if($this->input->post('createActivitySubmit')){
            //$this->form_validation->set_rules('type_activity', 'Type_activity', 'required');
            $this->form_validation->set_rules('title_name', 'Title_name', 'required'); 
            $this->form_validation->set_rules('date', 'Date', 'required'); 
            $this->form_validation->set_rules('start_time', 'Start_time', 'required');
            $this->form_validation->set_rules('end_time', 'End_time', 'required');
            $this->form_validation->set_rules('meeting_address', 'Meeting_address', 'required');
            $this->form_validation->set_rules('post_code', 'Post_code', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');            

            $userData = array(
                'type_activity' => strip_tags($this->input->post('taskOption')),
                'title' => strip_tags($this->input->post('title_name')),
                'date' => strip_tags($this->input->post('date')),
                'start_time' => strip_tags($this->input->post('start_time')),
                'end_time' => strip_tags($this->input->post('end_time')),
                'meeting_address' => strip_tags($this->input->post('meeting_address')),
                'post_code' => strip_tags($this->input->post('post_code')),
                'description' => strip_tags($this->input->post('description'))
                
                
            );

            if($this->form_validation->run() == true){
                $insert = $this->event->insert($userData);
                if($insert){
                    $this->session->set_userdata('success_msg', 'Your successfully created an activity');
                    redirect('events/');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
        $data['event'] = $userData;
        //load the view
        $this->load->view('event', $data);
    }
        

       
}