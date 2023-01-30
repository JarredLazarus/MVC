<?php

/**
 *
 */
class Question extends CI_Model
{
   private $c_number;
   private $c_name;
   private $c_firstName;
   private $c_lastName;
   private $c_phone;
   private $c_add1;
   private $c_add2;
   private $c_city;
   private $c_state;
   private $c_postalCode;
   private $c_country;
   private $c_salesRepEmpNo;
   private $c_creditlimit;

  public function __construct()
  {
    parent::__construct();
  }

function insertNewQuestion ($data){
if($data){
  $this->db->trans_begin(true);
    $this->db->select_max('customerNumber');
    $result=$this->db->get('customers');

    if($result->num_rows()>0){
      $cArray=$result->result_array();
      $cCount=$cArray[0]['customerNumber'];
      $cNumber=$cCount+1;
      }
      else{
        $cNumber=10000;
      }
      $value=array(
        'customerNumber' => $cNumber,
        'customerName' =>trim($data['custName']),
        'email'=>trim($data['custEmail']),
        'question' => trim($data['custQuestion'])
      );
      $this->db->insert('customers',$value);

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
