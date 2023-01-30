<?php

class Apply extends CI_Controller {

	function _construct(){
		parent:: __construct();
		$this->load->model('Application', '', TRUE);
		$this->load->library('session');
		$this->load->helper('form');
	}
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('applicationform_view');
		$this->load->view('footer');
	}

	function addnew() {

		//sign up form validation
		$this->load->library('form_validation');
		$data ['content'] = "formApply";

		//define the rules of input validation
		$this->form_validation->set_rules('sName', 'Full Name', 'trim|required');
		$this->form_validation->set_rules('sEmail', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('sPhone', 'Phone', 'trim|required|regex_match[/^[0-9]{10}$/]');
		$this->form_validation->set_rules('sEduBg', 'Education Background', 'trim|required');
		$this->form_validation->set_rules('sExpertise', 'Expertise', 'trim|required');
		$this->form_validation->set_rules('sPosition', 'Position', 'trim|required');
		$this->form_validation->set_rules('sExperience', 'Experience', 'trim|required');

		$this->form_validation->set_error_delimiters('<div class="error_msg">','</div>');

		if($this->form_validation->run()==FALSE)
		{
			//field validation failed, user redirected to login page
			$this->session->set_flashdata('application_status', 
				'<div class="alert alert-danger text-center" 
			style="width:60%">Error! Please Enter the Correct Information!</div>');
			$this->load->view('header');
			$this->load->view('applicationform_view', $data);
			$this->load->view('footer');

		} 
		else 
		{

			//Binding form data from view into array $Data
			$data['aName'] = $this->input->post('sName');
			$data['aEmail'] = $this->input->post('sEmail');
			$data['aPhone'] = $this->input->post('sPhone');
			$data['aBackground'] = $this->input->post('sEduBg');
			$data['aExpertise'] = $this->input->post('sExpertise');
			$data['aPosition'] = $this->input->post('sPosition');
			$data['aExperience'] = $this->input->post('sExperience');

			//pass the $data to controller
			$this -> load -> model('Application', '', TRUE);
			$result = $this->Application->insertNewApplicants($data);

			if($result){
				$this->session->set_flashdata('application_status', 
					'<div class="alert-green" 
					style="width:60%">New Staff Application Data was added successfully!</div>');
				$this->load->view('header');
				$this->load->view('applicationform_view', $data);
				$this->load->view('footer');
			} else{

				$this->session->set_flashdata('application_status', '<div class="alert" style="width:500px">Error! Please try Again!!</div>');
				$this->load->view('header');
				$this->load->view('applicationform_view');
				$this->load->view('footer');
			}

		}

	} //end of addnew method
}//end of class

?>