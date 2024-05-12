<?php

class UserModel extends DataBase
{
  private $pdo;
  public function __construct() {
    $this->pdo = $this->getConnection();
  }
  public function fetch() {
    $sql = $this->pdo->query('SELECT * FROM cliente');
    if($sql->rowCount() > 0) {
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    } else {
      return [];
    }
  }

  public function fetchById() {
    
    $sql = $this->pdo->prepare('SELECT * FROM cliente WHERE id = ?');
    $sql->execute(['1']);
    if($sql->rowCount() > 0) {
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
  }
}