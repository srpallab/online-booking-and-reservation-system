<?php
session_start();
require_once "../class/customercontr.class.php";
require_once "../class/bookingcontr.class.php";

if(isset($_REQUEST['id']) && isset($_REQUEST['startdate']) && isset($_REQUEST['enddate'])) {
  // print_r($_REQUEST);
  $customerObj = new CustomerContr();
  $bookingObj = new BookingContr();
  if(!isset($_SESSION['user_id']) && !isset($_SESSION['isAdmin'])){
    $customerId = $customerObj->addCustomerFromBooking($_REQUEST['name'], $_REQUEST['phone'], $_REQUEST['email']);
    $bookingObj->bookProduct($_REQUEST['startdate'], $_REQUEST['enddate'], $_REQUEST['id'], $customerId);
  } elseif(isset($_SESSION['user_id']) && !isset($_SESSION['isAdmin'])){
    $bookingObj->bookProduct($_REQUEST['startdate'], $_REQUEST['enddate'], $_REQUEST['id'], $_SESSION['user_id']);
  }


  
  header('Location: ../payment.php');
  exit();
}
