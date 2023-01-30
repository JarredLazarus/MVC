<?php
class AcademicStaff extends CI_Controller {
	// function __construct(){
	// 	parent::__construct(){
	// 		//$this->load->model('AcademicStaff', '', TRUE);
	// 		// $this->load->library('session');
	// 		// $this->load->helper('form');
	// 	}
	// }

	public function index(){
		
		$this->load->view('header');
		$this->load->view('academicstaff_view');
		$this->load->view('footer');
	}

}
?>