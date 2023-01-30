<?php

class register extends CI_Model {

    public function construct()
    {
        parent::__construct();
    }


    function insertNewRegisterform($data){
            
        if($data){
            $this->db->trans_begin(true);
            $query = $this->db->get_where('postgrad_apply', array('icNo' => trim($data['icNo'])));
            $count = $query -> num_rows();
            if($count == 0){

                

                $value = array(
                    'degree_ID' => trim($data['degreeID']),
                    'name' => trim($data['name']),
                    'hp_no' => trim($data['hp']),
                    'icNo' => trim($data['icNo']),
                    'degree_pointer' => trim($data['degreePointer']),
                    'email' => trim($data['email']),
                    
                );

                $this->db->insert('postgrad_apply', $value);
            }
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
    function deleteRegister($data)
    {

    }
}

?>