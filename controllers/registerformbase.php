<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class registerformbase extends CI_Controller {

    function __construct(){

        parent::__construct();
        $this->load->model('register','',TRUE);
		$this->load->library('session');
        $this->load->helper('form');
		}

		public function index(){

			$this->load ->view('header'); 
			$this->load->view('registerform'); 
			$this->load->view('footer');

		}
		function createRegisterform(){
			
			$this->load->library('form_validation'); 
			$data ['content'] = "registerform";
	
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('hp', 'Phone Number', 'trim|required|regex_match[/^[0-9]{10}$/]');
			$this->form_validation->set_rules('degreeID', 'Last Degree Course', 'trim|required');
			$this->form_validation->set_rules('degreePointer', 'Degree Pointer', 'trim|required');
			$this->form_validation->set_rules('icNo', 'Identity Card Number', 'trim|required');
	
			$this->form_validation->set_error_delimiters('<div class="error_msg">', '</div>');
	
			if($this->form_validation->run() == FALSE)
			{
				
				$this->session ->set_flashdata('postgrade_status',
				'<div class="alert alert-danger text-center" 
				style="width:60%">Error! Please Enter the correct Information!</div>'); 
				$this->load ->view('header'); 
				$this->load->view('registerform', $data); 
				$this->load->view('footer');
			}
			else
			{
				
				$data['name'] = $this->input->post('name');
				$data['email'] = $this->input->post('email'); 
				$data['hp'] = $this->input->post('hp');
				$data['degreeID'] = $this->input->post('degreeID'); 
				$data['degreePointer'] = $this->input->post('degreePointer');
				$data['icNo'] = $this->input->post('icNo');
				$this-> load -> model('register','', TRUE); 
				$result = $this-> register -> insertNewRegisterform($data);
				if($result)
				{
					$this->session->set_flashdata('postgrade_status', '<div class="alert-green" style="width: 60%">Your registration has been submitted!</div>');
					$this->load->view('header');
					$this->load->view('registerform');
					$this->load->view('footer');
				}
				else{
					$this->session->set_flashdata('postgrade_status', '<div class="alert" style="width: 500px">Error! Please try again!</div>');
					$this->load->view('header');
					$this->load->view('registerform');
					$this->load->view('footer');
				}
			}
	
		}
	
	
		
		
	
	}
	?>



	
		


