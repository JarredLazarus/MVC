<?php

/**
 *
 */
class Customer extends CI_Model
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
    //echo 'constructor';
  }
// public function __construct( $c_number, $c_name )
//  {
//    $this->$c_number = $c_number;
//    $this->$c_name =$c_name;
//  }
//   function getCustomers($country)
// {
//
//   // code...
//   // $query = $this->db->query('SELECT customerNumber, customerName, phone, country FROM customers WHERE country="Singapore"' );
//   // foreach ($query->result() as $row) {
//   //   // code...
//   //   echo $row->customerNumber;
//   //   echo $row->customerName;
//   //   echo $row->phone;
//   //   echo $row->country;
//   //   echo '</br>';
//   $country_clear=$this->db->escape($country);
//   echo $country_clear;
//     $query = $this->db->query('SELECT customerNumber, customerName, phone, country FROM customers WHERE country='.$country_clear );
//     if ($query->num_rows() > 0){
//     foreach ($query->result() as $row) {
//     // code...
//     echo $row->customerNumber;
//     echo $row->customerName;
//     echo $row->phone;
//     echo $row->country;
//     echo '</br>';
//   }
// }else{
//   echo "No Data Found";
// }
// }
// function getCustomerbyEmployee()
// {
//   $this-> db ->select('firstName, customerName, phone');
//   $this-> db ->from('customers');
//   $this-> db ->join('employees', 'customers.salesRepEmployeeNumber = employees.employeeNumber');
//   $query = $this->db->get();
//
//   if($query->num_rows() > 0){
//     foreach ($query->result() as $row) {
//     // code...
//     echo $row->firstName;
//     echo $row->customerName;
//     echo $row->phone;
//     echo '</br>';
//   }
// }else {
//   echo 'No Data Found';
// }
// }
function insertNewCustomer ($data){
if($data){
  $this->db->trans_begin(true);
  //check the duplication of account
  $query = $this->db->get_where('Login', array('email'=>trim($data['custEmail'])));
  $count = $query->num_rows();
  if($count == 0){
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
        'contactLastName' => trim($data['custFirstName']),
        'contactFirstName' => trim($data['custLastName']),
        'phone' => trim($data['custPhone']),
        'addressLine1' => trim($data['custAdd1']),
        'addressLine1' => trim($data['custAdd2']),
        'city' => trim($data['custCity']),
        'state' => trim($data['custState']),
        'postalCode' => trim($data['custPostal']),
        'country' => trim($data['custCountry'])
      );
      $this->db->insert('customers',$value);
      $valuelogin = array(
        'customerNumber'=>$cNumber,
        'email'=>trim($data['custEmail']),
        'password'=>sha1($data['custPassword'])
      );
      $this->db->insert('login', $valuelogin);
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
