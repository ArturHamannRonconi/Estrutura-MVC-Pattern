<?php

namespace controllers;

use models\User;
use models\UserDb;

class HomeController extends Controller {
  public function index(){
    $this->renderTemplate("home");
  }
}