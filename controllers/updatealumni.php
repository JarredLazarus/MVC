<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Updatealumni extends CI_controller {

    function __construct()
    {

        parent::__construct();

        $this->load->model('Alumni','',TRUE);    
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
    }

        public function index()
        {
            $this->load->view('header');
            $this->load->view('updatealumniform_view');
            $this->load->view('footer');
        }


    function addnew() {
        //Sign Up form validation
        $this->load->library('form_validation');
        $data ['content'] = "formUpdateAlumni";

        //define the rules of input validation
        $this->form_validation->set_rules('aIC', 'IC', 'trim|required|min_length[12]|max_length[20]');
        $this->form_validation->set_rules('aMatricNo', 'MatricNo', 'trim|required');       
        $this->form_validation->set_rules('aName', 'Name', 'trim|required'); 
        $this->form_validation->set_rules('aGender', 'Gender', 'trim|required');  
        $this->form_validation->set_rules('aDOB', 'DOB', 'trim|required');
        $this->form_validation->set_rules('aAddress', 'Address', 'trim|required');
        $this->form_validation->set_rules('aEmail', 'Email', 'trim|required');
        $this->form_validation->set_rules('aPhoneNo', 'Phone', 'trim|required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('aPost', 'Post', 'trim|required'); 
        $this->form_validation->set_rules('aEmployementSector', 'Employement Sector', 'trim|required'); 
        $this->form_validation->set_rules('aStartDate', 'Date Start', 'trim|required'); 
        $this->form_validation->set_rules('aEndDate', 'Date End', 'trim|required'); 
        $this->form_validation->set_rules('aWorkAddress', 'Work Address', 'trim|required'); 
        $this->form_validation->set_rules('aSalary', 'Salary', 'trim|required'); 

        $this->form_validation->set_error_delimiters('<div class="error_msg">', '</div>');
    
        if($this->form_validation->run() == FALSE)
        {
            //Field validation failed. User redirected to login page
            $this->session->set_flashdata('status','<div class="alert alert-danger text-center" style="width:60%">Error!
            Please Enter the Correct Information! </div>');
            $this->load->view('header');
            $this->load->view('updatealumniform_view', $data);
            $this->load->view('footer');
        }
        else 
        {
            //Binding form data from view into array $Data
            $data['alumIC'] = $this->input->post('aIC');
            $data['alumMatricNo'] = $this->input->post('aMatricNo');
            $data['alumName'] = $this->input->post('aName');
            $data['alumGender'] = $this->input->post('aGender');
            $data['alumDOB'] = $this->input->post('aDOB');
            $data['alumAddress'] = $this->input->post('aAddress');
            $data['alumEmail'] = $this->input->post('aEmail');
            $data['alumPhoneNo'] = $this->input->post('aPhoneNo');
            $data['alumPost'] = $this->input->post('aPost');
            $data['alumEmployementSector'] = $this->input->post('aEmployementSector');
            $data['alumStartDate'] = $this->input->post('aStartDate');
            $data['alumEndDate'] = $this->input->post('aEndDate');
            $data['alumWorkAddress'] = $this->input->post('aWorkAddress');
            $data['alumSalary'] = $this->input->post('aSalary');
        
            //Pass the $data to controller 
            $this -> load -> model('Alumni','', TRUE);
            $result = $this -> Alumni -> insertNewAlumni($data);

                if($result) {
                    $this->session->set_flashdata('status', 
                    '<div class="alert_green" style="width:60%"> Your Details Data Was Added Successfully!</div>');
                    $this->load->view('header');
                    $this->load->view('updatealumniform_view');
                    $this->load->view('footer');
                    } else {

                        $this->session->set_flashdata('status', '<div class="alert" style="width:500px">Error! Please Try
                        Again!!</div>');
                        $this->load->view('header');
                        $this->load->view('updatealumniform_view');
                        $this->load->view('footer');
                    }
                }

        }//end of addnew method

 }//end of class

?>