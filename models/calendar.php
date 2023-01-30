<?php

class Calendar extends CI_Model {

private $a_number;    
private $a_description;
private $a_datestart;
private $a_dateend;
private $a_duration;
private $a_remarks;


public function __construct() {

    parent::__construct();
    //echo 'constructor';
}


// public function_construct($c_number, $c_name )
// {

//     this->$c_number = $c_number;
//     $this->$c_name = $c_name;
// }





    function insertNewCalendar ($data) {
        if($data) {

            $this-> db -> trans_begin(true);

            //check the duplication of account
            $query = $this->db->get_where('academic_calendar', array('dateStart' => trim($data['caledateStart'])));
            $count = $query->num_rows();

           if ($count == 0) {

                    $value = array (
                        'descriptions' => trim($data['caledesc']),
                        'dateStart' => trim($data['caledateStart']),
                        'dateEnd' => trim($data['caledateEnd']),
                        'duration' => trim($data['caleduration']),
                        'remarks' => trim($data['caleremarks']),
                 
                      
                    );

                    $this->db->insert('academic_calendar', $value);

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