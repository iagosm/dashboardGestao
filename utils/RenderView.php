<?php

class RenderView
{
  public function loadView($view, $args) 
  {
    extract($args);
    require_once __DIR__."/../view/$view.php";
  }
}