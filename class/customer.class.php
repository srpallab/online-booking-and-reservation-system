<?php 
require_once "dbh.class.php";

class Customer extends Dbh {
  protected function getCustomer(){}

  protected function setCustomer($name, $phone, $email){
    $sql = "INSERT INTO customer (name, phone, email) VALUES (?, ?, ?);";
    $conn = $this->connect();
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $phone, $email]);
    // print($conn->lastInsertId());
    // die();
    return $conn->lastInsertId();
  }
}
