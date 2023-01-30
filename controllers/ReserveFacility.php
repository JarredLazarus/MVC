<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReserveFacility extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('reserveModel','',TRUE);
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
    }


	public function index()
	{
		$this->load->view('header');
		$this->load->view('reserve');
		$this->load->view('footer');	
	}

    public function store(){
        $this->load->library('form_validation');
        $data['content']="formreserver";

        $this->form_validation->set_rules('name','name','trim|required');
        $this->form_validation->set_rules('subject','subject','trim|required');
        $this->form_validation->set_rules('facility','facility','trim|required');
        $this->form_validation->set_rules('capacity','capacity','trim|required');
        $this->form_validation->set_rules('date','date','trim|required');
        $this->form_validation->set_rules('time','time','trim|required');

        $this->form_validation->set_error_delimiters('<div class="error_msg','</div>');

    
        if($this->form_validation->run()==FALSE){
           $this->session->set_flashdata('status','<div class="alert alert-danger text-center"
            style="width=60%">Error! Please enter information!</div>');
            $this->load->view('header');
            $this->load->view('reserve',$data);
            $this->load->view('footer');
        }else{
           
                $data['lecturer']=$this->input->post('name');
                $data['subjects']=$this->input->post('subject');
                $data['facilityName']=$this->input->post('facility');
                $data['capacity']=$this->input->post('capacity');
                $data['date']=$this->input->post('date');
                $data['time']=$this->input->post('time');
            $this->load->model('reserveModel','',TRUE);
            $result = $this->reserveModel->insertReserveHall($data);
            
            if($result){
                $this->session->set_flashdata('status',
                '<div class="alert_green"
                style="width:60%">New Reserve Data Was Added Succesfull!</div>');
                $this->load->view('header');
                $this->load->view('reserve',$data);
                $this->load->view('footer');                
            }else{
                $this->session->set_flashdata('status','<div class="alert alert-danger text-center"
                style="width=60%">Error! Cannot go away!</div>');
                
                    $this->load->view('header');
                    $this->load->view('reserve',$data);
                    $this->load->view('footer');
            }


        }

       
    }
    
}
?>