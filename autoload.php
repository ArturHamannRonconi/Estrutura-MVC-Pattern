<?php

spl_autoload_register(function($class) {
  $baseDir = __DIR__."/";
  $file = str_replace("\\", "/", $class);
  $file = "{$baseDir}{$file}.php";

  file_exists($file) ? require($file):null;
});

