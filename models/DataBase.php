<?php 

class DataBase 
{
  public function getConnection() 
  {
   try {
      $pdo = new PDO("mysql:dbname=ism;host:localhost", "root", "");
      return $pdo;
    } catch (PDOException $err) {

    }
  }
}