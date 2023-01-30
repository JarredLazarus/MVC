<?php

class Feedback extends CI_Model{

    public function __construct(){
        parent::__construct();
    }
    
    public function insertFeedback($data){
        if($data){
            $this -> db -> trans_begin(true);

            $this->db->select_max('id'); 
            $result = $this->db->get('feedback'); 
            
            if ($result->num_rows() > 0) { 
                $cArray = $result->result_array(); 
                $cCount = $cArray[0]['id']; 
                $cNumber = $cCount + 1; 
            } else { 
                $cNumber = 10000; 
            } 

            $value = array(
                'id' => $cNumber, 
                'email' => trim($data['email']), 
                'feedback' => trim($data['feedback']), 
                'rating' => trim($data['rating']), 
                
            ); 

            $this -> db -> insert('feedback', $value);

            if($this -> db -> trans_status() === FALSE){
                $this -> db -> trans_rollback();
                return false;
            } else {
                $this -> db -> trans_commit();
                return true;
            }

        } else {
            return false;
        }
    }

}
?>