<?php

namespace core;

use controllers\HomeController;

class Core {

  public function run() {
    $request = filter_input(INPUT_GET, "request") ?? "Home/index";
    $path = explode("/", $request);
    
    [$classController, $method] = array_map(
      fn($original, $default) => !empty($original) ? $original : $default,
      $path,
      ["Home", "index"]
    );
    $params = array_slice($path, 2);

    $classController = $this->formatControllerClass($classController);
    $controller = $this->createController($classController);
    $method = method_exists($controller, $method) ? $method : "index";

    call_user_func_array([$controller, $method], $params);
  }
  private function createController(string $classController): Controller {
    return $this->controllerExists($classController) ? new $classController : new ErrorController;
  }

  private function controllerExists(string $classController) {
    $file = str_replace("\\", "/", __DIR__ . "\\..\\{$classController}.php");
    return file_exists($file);
  }

  private function formatControllerClass(string $classController): string {
    $classController = ucfirst($classController);
    return "controllers\\{$classController}Controller";
  }
}