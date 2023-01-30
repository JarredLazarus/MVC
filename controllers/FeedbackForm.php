<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FeedbackForm extends CI_Controller {

	function __construct(){
        parent:: __construct(); 
        $this -> load ->model('Feedback','',TRUE); 
        $this -> load ->library('session'); 
        $this -> load ->helper('form'); 
    } 
    
    function index(){
        $this->load->view('header');
		$this->load->view('feedback_view');
		$this->load->view('footer');
        $this->session->set_flashdata('feedback_status', '');
    }

    function submit(){
        //Sign Up form validation 
        $this->load->library('form_validation'); 
        $data['content'] = "feedbackForm"; 
        
        //Define the rules of input validation 
        $this->form_validation->set_rules('cEmail', 'Respondant Email', 'trim|required'); 
        $this->form_validation->set_rules('cFeedback', 'Contact Person\'s First Name', 'trim|required'); 
        $this->form_validation->set_rules('cRating', 'Contact Person\'s Last Name', 'trim|required'); 
        $this->form_validation->set_error_delimiters('<div class="error_msg">', '</div>'); 

        if($this->form_validation->run() === FALSE) { 

        //Field validation failed. User redirected to login page 
            $this->session->set_flashdata('feedback_status', '<div class="alert alert-danger text-center" stvle="width:60%">Please fill in all details.</div>'); 
            $this->load->view('header');
		    $this->load->view('feedback_view');
		    $this->load->view('footer'); 
        } else {
            //Binding form data from view into array $Data 
            $data['email'] = $this->input->post('cEmail'); 
            $data['feedback'] = $this->input->post('cFeedback'); 
            $data['rating'] = $this->input->post('cRating'); 

            //Pass the $data to controller 
            $this -> load -> model('Feedback','', TRUE); 
            $result = $this -> Feedback -> insertFeedback($data); 
        
         
            if($result){ 
                $this->session->set_flashdata('feedback_status', '<div class="alert_green" style="width:60%">Thank you for your feedback!</div>'); 
                $this->load->view('header');
		        $this->load->view('feedback_view');
		        $this->load->view('footer');  
            }
            else { 
                $this->session->set_flashdata('feedback_status','<div class="alert" style="width:500px">An error occured while submitting your feedback.</div>'); 
                $this->load->view('header');
                $this->load->view('feedback_view');
                $this->load->view('footer'); 
            }
        }
    }
}