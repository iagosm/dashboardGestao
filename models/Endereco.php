<?php

class Endereco extends DataBase
{
  private $pdo;
  public function __construct() {
    $this->pdo = $this->getConnection();
  }
  
  public function create($cep, $endereco, $cidade, $uf, $bairro, $ativo) 
  {
    $sql = "INSERT INTO endereco
    (cep, endereco, cidade, uf, bairro, ativo, created_at, updated_at) 
    VALUES (:cep, :endereco, :cidade, :uf, :bairro, :ativo, :created_at, :updated_at)";
    $sql = $this->pdo->prepare($sql);
    $sql->bindValue(':cep', $cep);
    $sql->bindValue(':endereco', $endereco);
    $sql->bindValue(':cidade', $cidade);
    $sql->bindValue(':uf', $uf);
    $sql->bindValue(':bairro', $bairro);
    $sql->bindValue(':ativo', $ativo);
    $sql->bindValue(':created_at', date('Y-m-d H:i:s'));
    $sql->bindValue(':updated_at', date('Y-m-d H:i:s'));
    $sql->execute();
    if($sql->rowCount() > 0) {
      return $this->pdo->lastInsertId();
    }
    return 0;
  }
  
  public function delete($idEndereco) 
  {
    try {
      $sql = "DELETE FROM endereco WHERE idendereco=:idendereco";
      $sql = $this->pdo->prepare($sql);
      $sql->bindValue(':idendereco', $idEndereco);
      $sql->execute();
      if($sql->rowCount() > 0) {
         return true;
      }
    } catch (PDOException $e) {}
    return false;
  }
}