<?php
class Dbh {
  private $host   = 'localhost';
  private $dbName = 'orbs';
  private $user   = 'admin';
  private $pwd    = '1';

  protected function connect(){
    try {
      $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
      $pdo = new PDO($dsn, $this->user, $this->pwd);
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      return $pdo;
    } catch (PDOException $e){
        print "Error " . $e->getMessage() . "<br />";
        die();
    }
  }
}
?>
