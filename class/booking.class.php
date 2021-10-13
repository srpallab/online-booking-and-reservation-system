<?php
require_once "../class/dbh.class.php";

class Booking extends Dbh {

  protected function setBooking($startdate, $enddate, $productID, $customerId){
    $sql = "INSERT INTO booking (start_date, end_date, product_id, customer_id)";
    $sql .= " VALUES (?, ?, ?, ?)";
    // print($sql);
    // die();
    $stmt = $this->connect()->prepare($sql);
    try{
      $stmt->execute([$startdate, $enddate, $productID, $customerId]);
    } catch (Exception $e){
      print($e);
      // die();
    }
    
  }
  
}
