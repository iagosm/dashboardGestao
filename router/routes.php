<?php 

$routes = [ 
  '/' => 'HomeController@index',
  '/endereco' => 'EnderecoController@index',
  '/enderecoCreate' => 'EnderecoController@create',
  '/genero' => 'GeneroController@index',
  '/generoCreate' => 'GeneroController@create', 
  '/users/{id}' => 'UserController@show',
];