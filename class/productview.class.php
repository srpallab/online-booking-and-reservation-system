<?php
require_once "product.class.php";

class ProductView extends Product {

  public function showProducts($type){
    $products = $this->getProduct($type);

    return $products;
  } 
  
  
}

?>
