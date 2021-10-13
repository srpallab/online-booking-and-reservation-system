<?php
require_once "booking.class.php";

class BookingContr extends Booking {

  public function bookProduct($startdate, $enddate, $productID, $customerId) {
    // print_r([$startdate, $enddate, $productID, $customerId]);
    // die();
    $this->setBooking($startdate, $enddate, $productID, $customerId);
  }

}
