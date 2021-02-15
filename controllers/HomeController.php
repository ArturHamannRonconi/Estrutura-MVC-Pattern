<?php

namespace controllers;

use models\User;
use models\UserDb;
use core\Controller;

class HomeController extends Controller {
  public function index(){
    $this->renderTemplate("home");
  }
}