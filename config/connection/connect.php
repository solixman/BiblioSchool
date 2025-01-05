<?php
// creating a connectio
class Connect
{

  // a public pdo attribut ro store the connection
  public $pdo;

  public function  __construct()
  {
   // connection info
    $servername = "localhost";
    $username = "root";
    $password = "Jaafar@27";

    // trying the connection and catching an error if there is any

    try {
      $this -> pdo = new PDO("mysql:host=$servername;dbname=bibllioschool", $username, $password);

      $this -> pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "Connected successfully"
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }

  // a function that returns the connection for testing
  public function get_connection()
  {
    return $this->pdo;
  }
}
