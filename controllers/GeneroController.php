<?php

class GeneroController extends RenderView
{
  public function index()
  {
    $users = new UserModel();
    $this->loadView('genero', [
      'title' => 'Home Page Pae',
      // 'users' => $users->fetchById(),
    ]);
  }

  public function create()
  {
    $result = 0;
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if(!empty($dados)) {
      $genero = new Genero();
      $idGenero = $genero->create($dados['nome'], $dados['ativo']);
      if($idGenero > 0) {
        $result = $idGenero;
      }
    }
    echo json_encode($result);
  }
}