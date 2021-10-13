<?php
require_once "../class/customercontr.class.php";
require_once "../class/bookingcontr.class.php";

if(
  isset($_REQUEST['id']) &&
  isset($_REQUEST['name']) &&
  isset($_REQUEST['phone']) &&
  isset($_REQUEST['email']) &&
  isset($_REQUEST['startdate']) &&
  isset($_REQUEST['enddate'])
){
  // print_r($_REQUEST);
  $customerObj = new CustomerContr();
  $customerId = $customerObj->addCustomerFromBooking($_REQUEST['name'], $_REQUEST['phone'], $_REQUEST['email']);
  $bookingObj = new BookingContr();
  $bookingObj->bookProduct($_REQUEST['startdate'], $_REQUEST['enddate'], $_REQUEST['id'], $customerId);
  
  header('Location: ../payment.php');
  exit();
}

?>
