<?php

namespace models;

class UserDb implements DataBaseUser {
  private Connection $engine;

  public function __construct(Connection $eng) {
    $this->engine = $eng;
  }
}