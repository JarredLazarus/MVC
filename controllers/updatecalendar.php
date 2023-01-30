<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Updatecalendar extends CI_controller {

    function __construct()
    {

        parent::__construct();

        $this->load->model('Calendar','',TRUE);    
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
    }

        public function index()
        {
            $this->load->view('header');
            $this->load->view('updatecalendar_view');
            $this->load->view('footer');
        }


    function addnew() {
        //Sign Up form validation
        $this->load->library('form_validation');
        $data ['content'] = "formUpdateCalendar";

        //define the rules of input validation
        $this->form_validation->set_rules('Desc', 'desc', 'trim|required|min_length[12]|max_length[100]');
        $this->form_validation->set_rules('date_start', 'dateStart', 'trim|required');       
        $this->form_validation->set_rules('date_end', 'dateEnd', 'trim|required'); 
        $this->form_validation->set_rules('duration', 'duration', 'trim|required');  
        $this->form_validation->set_rules('Remarks', 'remarks', 'trim|required');

        $this->form_validation->set_error_delimiters('<div class="error_msg">', '</div>');
    
        if($this->form_validation->run() == FALSE)
        {
            //Field validation failed. User redirected to login page
            $this->session->set_flashdata('status','<div class="alert alert-danger text-center" style="width:60%">Error!
            Please Enter the Correct Information! </div>');
            $this->load->view('header');
            $this->load->view('updatecalendar_view', $data);
            $this->load->view('footer');
        }
        else 
        {
            //Binding form data from view into array $Data
            $data['caledesc'] = $this->input->post('Desc');
            $data['caledateStart'] = $this->input->post('date_start');
            $data['caledateEnd'] = $this->input->post('date_end');
            $data['caleduration'] = $this->input->post('duration');
            $data['caleremarks'] = $this->input->post('Remarks');
    
            //Pass the $data to controller 
            $this -> load -> model('Calendar','', TRUE);
            $result = $this -> Calendar -> insertNewCalendar($data);

                if($result) {
                    $this->session->set_flashdata('status', 
                    '<div class="alert_green" style="width:60%"> Your Details Data Was Added Successfully!</div>');
                    $this->load->view('header');
                    $this->load->view('updatecalendar_view');
                    $this->load->view('footer');
                    } else {

                        $this->session->set_flashdata('status', '<div class="alert" style="width:500px">Error! Please Try
                        Again!!</div>');
                        $this->load->view('header');
                        $this->load->view('updatecalendar_view');
                        $this->load->view('footer');
                    }
                }

        }//end of addnew method

 }//end of class

?>