<?php
class Database {
  private static $instance;
  private $pdo;

  private function __construct() {
    $dsn = "mysql:host=localhost;dbname=protechlocker";
    $username = "root";
    $password = "";

    $this->pdo = new PDO($dsn, $username, $password);
    $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  }

  public static function getInstance() {
    if (self::$instance === null) {
      self::$instance = new self();
    }

    return self::$instance;
  }

  public function getPdo() {
    return $this->pdo;
  }
}
?>