<?php

$config = [
   "database" => array(
     "driver"   => "mysql",
     "host"     => "217.120.100.2", //My host if im working on webserver
     "username" => "root", //My SQL username
     "password" => "Sternsedirk1999", //My SQL password
     "dbname"   => "personaleducationstorage" //My SQL database name
   ),
 ];
final class Database {
  private static $instance = null;
  public $db;
  private function __construct() {
    global $config;
    try {
      $dsn = sprintf("%s:hostname=%s;dbname=%s;", $config["database"]["driver"],
                                                  $config["database"]["host"],
                                                  $config["database"]["dbname"]);
      $this->db = new PDO($dsn, $config["database"]["username"], $config["database"]["password"]);
      $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    } catch(PDOException $e) {
      exit("Error: " . $e->getMessage());
    }
  }

  public static function getDb() {
    if(is_null(Database::$instance)) Database::$instance = new Database();
    return Database::$instance->db;
  }
}
