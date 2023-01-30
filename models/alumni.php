<?php

class Alumni extends CI_Model {

public function __construct() {

    parent::__construct();
    //echo 'constructor';
}


// public function_construct($c_number, $c_name )
// {

//     this->$c_number = $c_number;
//     $this->$c_name = $c_name;
// }





    function insertNewAlumni ($data) {
        if($data) {

            $this-> db -> trans_begin(true);

            //check the duplication of account
            $query = $this->db->get_where('basic_info', array('email' => trim($data['alumEmail'])));
            $count = $query->num_rows();

           if ($count == 0) {

                $this->db->select_max('alumniNumber');
                $result= $this->db->get('basic_info');

                if($result->num_rows() > 0) {
                    $cArray = $result->result_array();
                    $cCount = $cArray[0]['alumniNumber'];
                    $cNumber = $cCount + 1;
                    } else {
                        $cNumber = 1000;
                    }

                    $value = array (
                        'alumniNumber' => $cNumber,
                        'alumni_IC' => trim($data['alumIC']),
                        'matric_No' => trim($data['alumMatricNo']),
                        'name' => trim($data['alumName']),
                        'gender' => trim($data['alumGender']),
                        'DOB' => trim($data['alumDOB']),
                        'address' => trim($data['alumAddress']),
                        'email' => trim($data['alumEmail']),
                        'phoneNo' => trim($data['alumPhoneNo']),
                        
                      
                    );

                    $value2 = array(
                        'alumni_IC' => trim($data['alumIC']),
                        'post' => trim($data['alumPost']),
                        'employment_sector' => trim($data['alumEmployementSector']),
                        'startDate' => trim($data['alumStartDate']),
                        'endDate' => trim($data['alumEndDate']),
                        'work_address' => trim($data['alumWorkAddress']),
                        'salary' => trim($data['alumSalary'])
                    );

                    $this->db->insert('basic_info', $value);
                    $this->db->insert('working_info', $value2);
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