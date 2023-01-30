<?php

/**
 *
 */
class Newsletter extends CI_Model
{
 

  public function __construct()
  {
    parent::__construct();
    //echo 'constructor';
  }

  function insertNewUser($data){
    $c_status="subscribed";
    if($data){
      $this->db->trans_begin(true);
      //check the duplication of account
      $query = $this->db->get_where('Newsletter', array('email'=>trim($data['custEmail'])));
      $count = $query->num_rows();
      if($count == 0){
        $this->db->select_max('id');
        $result=$this->db->get('newsletter');

        if($result->num_rows()>0){
          $cArray=$result->result_array();
          $cCount=$cArray[0]['id'];
          $cNumber=$cCount+1;
          }
          else{
            $cNumber=10000;
          }
          $valuelogin = array(
            'id'=>$cNumber,
            'email'=>trim($data['custEmail'])
          );
          $this->db->insert('newsletter', $valuelogin);
      }
      else{
        $this->db->trans_rollback();
        return false;
      }
      if($this->db->trans_status()=== FALSE){
        $this->db->trans_rollback();
        return false;
      }else{
        $this->db->trans_commit();
        return true;
      }
    }
    else{
      return false;
    }




}
}
?>
