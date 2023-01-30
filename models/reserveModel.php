<?php

class reserveModel extends CI_Model {

    public function construct()
    {
        parent::__construct();
    }


    function insertReserveHall($data){

    if($data){
            $this->db->trans_begin(true);
            $this->db->select_max('lecturer');
            $result = $this->db->get('reserve_hall');
            $value = array(
                    'lecturer' => trim($data['lecturer']),
                    'subjects' => trim($data['subjects']),
                    'facilityName' => trim($data['facilityName']),
                    'capacity' => trim($data['capacity']),
                    'date' => trim($data['date']),
                    'time' => trim($data['time'])
            );

            $this->db->insert('reserve_hall', $value);
            
    }else{
        $this->db->trans_rollback();
        return false;
    }

    if($this->db->trans_status() == FALSE){
        $this->db->trans_rollback();
        return false;

    }else{
        $this->db->trans_commit();
        return true;
    }
}
    function deleteInquiry($data)
    {

    }
}

?>