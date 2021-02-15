<?php

namespace core;

class Core {
  
  public function run() {
    $request = filter_input(INPUT_GET, "request") ?? "Home/index";
    
    if($request) {
      $path = explode("/", $request);
      $url = ["classController" => "Home", "method" => "index"]; 

      if(!empty($path[0]))
        $url["classController"] = ucfirst($path[0]."Controller");

      if(!empty($path[1]))
        $url["method"] = $path[1];

      if(!empty($path[2]))
        $url["params"] = $path[2];

      extract($url);

      $pathDir = "controllers/{$classController}.php";
      $verify = !file_exists($pathDir) || method_exists($classController, $method);

      if($verify) {
        $classController = "HomeController";
        $method = "index";
      }

      $controller = new $classController;
      call_user_func_array(array($controller, $method));

    }
  }
}