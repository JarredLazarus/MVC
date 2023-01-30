<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {
  function __construct(){
    parent:: __construct();
    $this->load->model('Newsletter', '', TRUE);
    $this->load->library('session');
     $this->load->helper('form');
     $this->load->helper('url');
  }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('subscribe_view');
		$this->load->view('footer');
	}
  function addnew(){
    $this->load->library('form_validation');
    $data['content']="formSubscribe";

    $this->form_validation->set_rules('cEmail', 'Email' , 'trim|required|valid_email');
    $this->form_validation->set_error_delimiters('<div class="error_msg">','</div>');

    if($this->form_validation->run() == FALSE)
    {
      $this->session->set_flashdata('subscribe_status', '<div class="alert">Error! Please Enter the Correct Information!</div>');
      $this->load->view('header');
  		$this->load->view('subscribe_view', $data);
  		$this->load->view('footer');

    }
    else
    {
      $data['custEmail']=$this->input->post('cEmail');

      $this->load->model('Newsletter', '', TRUE);
      $result=$this->Newsletter->insertNewUser($data);


      if($result){
        $this->session->set_flashdata('subscribe_status', '<div class="alert_green">Successfully Subscribed</div>');
        $this->load->view('header');
    		$this->load->view('subscribe_view', $data);
    		$this->load->view('footer');
      }
      else {
        $this->session->set_flashdata('subscribe_status', '<div class="alert">Error! Please Try Again</div>');
        $this->load->view('header');
    		$this->load->view('subscribe_view');
    		$this->load->view('footer');
      }

    }
  }
}
