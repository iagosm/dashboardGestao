<?php

class RenderView
{
  public function loadView($view, $args) 
  {
    $baseUrl = $this->getBaseURL();
    extract($args);
    require_once __DIR__."/../view/layout/header.php";
    require_once __DIR__."/../view/$view.php";
    require_once __DIR__."/../view/layout/footer.php";
  }

  public function getBaseURL () {
    $baseUrl = 'http://localhost/dashboardGestao/';
    return $baseUrl;
  }
}