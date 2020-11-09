<?php

abstract class Personne {

  protected string $lastname;
  protected string $firstname;

  public function __construct(string $lastname, string $firstname) {
    $this->setLastname($lastname);
    $this->setFirstname($firstname);
  }

  public function setLastname(string $lastname):self {
    $this->lastname = $lastname;
    return $this;
  }

  public function getLastname() {
    return $this->lastname;
  }

  public function setFirstname(string $firstname):self {
    $this->firstname =$firstname;
    return $this;
  }

  public function getFirstname() {
    return $this->firstname;
  }

}
