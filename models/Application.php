<?php
	
	class Application extends CI_Model {


		public function _construct()
	{
		parent:: __construct();
		//echo 'constructor';
	}

		/*
		public function __construct($name, $email){

			$this->name = $name;
			$this->email = $email;
		}
		*/

		function insertNewApplicants ($data) {
		if ($data) {
			$this->db->trans_begin(true);

			//check the duplication of account
			$query  = $this->db->get_where('staff_application', array('email'=> trim($data['aEmail'])));
			$count = $query->num_rows();

			if ($count==0) {
				$this->db->select_max('ID');
				$result = $this->db->get('staff_application');

				if ($result->num_rows() > 0){
					$sArray = $result->result_array();
					$sCount = $sArray[0]['ID'];
					$sID = $sCount + 1;
				} else {
					$cNumber = 10000;
				}

				$value = array (
					'ID' => $sID,
					'name' => trim($data['aName']),
					'email' => trim($data['aEmail']),
					'phone' => trim($data['aPhone']),
					'eduBackground' => trim($data['aBackground']),
					'expertise' => trim($data['aExpertise']),
					'position' => trim($data['aPosition']),
					'experience' => trim($data['aExperience'])
				);

				$this->db->insert('staff_application', $value);

			} else {
				$this->db->trans_rollback();
				return false;
			}

			if ($this->db->trans_status() == FALSE)
			{
				$this->db->trans_rollback();
				return false;
			} else {
				$this->db->trans_commit();
				return true;
			}
		} else {
			return false;
		}
	}
	}

?>