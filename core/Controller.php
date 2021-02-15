<?php

namespace core;

class Controller {
  public function renderTemplate(string $viewName, array $modelData = []) {
    require 'views/template.php';
  }

  public function renderView(string $viewName, array $modelData = []) {
    extract($modelData);
    require "views/{$viewName}.php";
  }
}