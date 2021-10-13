<?php 
require_once "customer.class.php";

class CustomerContr extends Customer {

  public function addCustomerFromBooking($name, $phone, $email){
    $customerId = $this->setCustomer($name, $phone, $email);
    return $customerId;
  }

}
