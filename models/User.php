<?php

namespace models;

class User {
  private string $email;
  private string $password;
  private ?int $id;

  public function __construct(string $email, string $password, ?int $id = null) {
    $this->setEmail($email);
    $this->setPassword($password);
    $this->setId($id);
  }

  public function getEmail(): string {
    return $this->email;
  }
  private function setEmail(string $email) {
    $this->email = strtolower($email);
  }

  public function getPassword(): string {
    return $this->password;
  }
  private function setPassword(string $password) {
    $this->password = password_hash($password, PASSWORD_DEFAULT);
  }

  public function getId(): ?int {
    return $this->id;
  }
  private function setId(?int $id) {
    $this->id = $id;
  }

}

interface DataBaseUser{
  public function addUser();
  public function findById();
  public function findAll();
  public function login();
  public function updateUser();
  public function deleteUser();
}
