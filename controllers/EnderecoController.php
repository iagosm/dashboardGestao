<?php

class EnderecoController extends RenderView
{
  public function index()
  {
    $users = new UserModel();
    $this->loadView('endereco', [
      'title' => 'Home Page Pae',
      // 'users' => $users->fetchById(),
    ]);
  }

  public function create()
  {
    $result = 0;
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if(!empty($dados)) {
      $endereco = new Endereco();
      $idEndereco = $endereco->create($dados['cep'], $dados['endereco'], $dados['cidade'], $dados['uf'], $dados['bairro'], $dados['ativo']);
      if($idEndereco > 0) {
        $result = $idEndereco;
      }
    }
    echo json_encode($result);
  }
}