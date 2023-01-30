<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programinfo extends CI_Controller {

function __construct(){

	parent::__construct();

	$this->load->model('ProgramInformation','',TRUE);	
}	


	public function index()
	{	$data['program'] = $this->ProgramInformation->getPrograminfo();  
		$this->load->view('header');
		$this->load->view('programinfo_view',$data);
		$this->load->view('footer');
	}
}
?>