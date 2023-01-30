<?php

class ProgramInformation extends CI_Model {



public function __construct()
	{
		parent::__construct();
	}	


public function getPrograminfo(){
	$query = $this->db->get('program_info');

 if ($query->num_rows() > 0){
 	return $query;
 }	

}





} 

?>	