<?php 

class DataBase 
{
  public function getConnection() 
  {
    try {
      $pdo = new PDO("mysql:dbname=loja;host:localhost", "root", "");
      return $pdo;
    } catch (PDOException $err) {

    }
  }
}